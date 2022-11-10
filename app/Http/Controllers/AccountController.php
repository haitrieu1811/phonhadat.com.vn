<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //
    function profile($id = "")
    {
        if ($id) {
            $account = User::find($id);

            if (empty($account)) {
                return redirect()->route('home');
            }
        } else {
            $account = Auth::user();
        }

        return view('account.profile', compact('account'));
    }

    function update()
    {
        $account = Auth::user();

        return view('account.update', compact('account'));
    }

    function updateStore(Request $request)
    {
        $user_id = Auth::id();
        $data_update = $request->except(['_token']);

        $request->validate(
            [
                'name' => 'required',
                'phone' => 'max:10',
                'bio' => 'max:250',
                'avatar' => 'image',
                'cover' => 'image',
            ],
            [
                'required' => ':attribute không được để trống',
                'max' => ':attribute dài tối ta :max kí tự',
                'image' => 'File ảnh không hợp lệ',
            ],
            [
                'name' => 'Họ tên',
                'phone' => 'Số điện thoại',
                'avatar' => 'Ảnh đại diện',
                'cover' => 'Ảnh bìa',
            ]
        );

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatar_name = substr(md5($avatar->getClientOriginalName()), 0, 13);
            $avatar_extendsion = $avatar->getClientOriginalExtension();
            $avatar_file = $avatar_name . '.' . $avatar_extendsion;

            $avatar->move('public/images/user', $avatar_file);

            $data_update['avatar'] = $avatar_file;
        }

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $cover_name = substr(md5($cover->getClientOriginalName()), 0, 13);
            $cover_extendsion = $cover->getClientOriginalExtension();
            $cover_file = $cover_name . '.' . $cover_extendsion;

            $cover->move('public/images/cover', $cover_file);

            $data_update['cover'] = $cover_file;
        }

        User::where('id', $user_id)->update($data_update);

        return redirect()
            ->route('account.update')
            ->with('status', 'Cập nhật tài khoản thành công');
    }
}
