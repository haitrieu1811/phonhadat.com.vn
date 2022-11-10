<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    //
    function create()
    {
        return view("admin.post.create");
    }

    function createStore(Request $request)
    {
        $data_insert = $request->all();
        $data_insert['user_id'] = Auth::id();

        $request->validate(
            [
                'title' => 'required',
                'description' => 'required|max:200',
                'thumbnail' => 'required|image',
                'content' => 'required',
            ],
            [
                'required' => ':attribute không được để trống',
                'image' => 'File ảnh không hợp lệ',
                'max' => ':attribute chỉ được tối đa :max kí tự',
            ],
            [
                'title' => 'Tiêu đề',
                'description' => 'Mô tả',
                'thumbnail' => 'Ảnh đại diện',
                'content' => 'Nội dung',
            ]
        );

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $name = substr(md5($thumbnail->getClientOriginalName()), 0, 13);
            $extendsion = $thumbnail->getClientOriginalExtension();
            $file_name = $name . '.' . $extendsion;

            $thumbnail->move('public/images/post', $file_name);

            $data_insert['thumbnail'] = $file_name;
        }

        Post::create($data_insert);

        return redirect()
            ->route('admin.post.read')
            ->with('status', 'Thêm bài viết thành công');
    }

    function read()
    {
        $user_id = Auth::id();
        $posts = Post::orderBy('id', 'DESC')
            ->where('user_id', $user_id)
            ->get();

        return view('admin.post.read', compact('posts'));
    }

    function update($id)
    {
        $post = Post::find($id);
        $url = url()->current(); // Đường dẫn hiện tại

        return view('admin.post.update', compact('post', 'id', 'url'));
    }

    function updateStore(Request $request)
    {
        $data_update = $request->all();
        $id = $request->get('id'); // ID bài viết
        $url = $request->get('url'); // Đường dẫn hiện tại

        $request->validate(
            [
                'title' => 'required',
                'description' => 'required|max:200',
                'thumbnail' => 'image',
                'content' => 'required',
            ],
            [
                'required' => ':attribute không được để trống',
                'image' => 'File ảnh không hợp lệ',
                'max' => ':attribute chỉ được tối đa :max kí tự',
            ],
            [
                'title' => 'Tiêu đề',
                'description' => 'Mô tả',
                'thumbnail' => 'Ảnh đại diện',
                'content' => 'Nội dung',
            ]
        );

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $name = substr(md5($thumbnail->getClientOriginalName()), 0, 13);
            $extendsion = $thumbnail->getClientOriginalExtension();
            $file_name = $name . '.' . $extendsion;

            $thumbnail->move('public/images/post', $file_name);

            $data_update['thumbnail'] = $file_name;
        }

        Post::find($id)->update($data_update);

        return redirect($url)
            ->with('status', 'Cập nhật bài viết thành công');
    }

    function delete($id)
    {
        Post::find($id)->delete();

        return redirect()
            ->route('admin.post.read')
            ->with('status', 'Xóa bài viết thành công');
    }

    function trash()
    {
        $user_id = Auth::id();
        $posts = Post::onlyTrashed()
            ->orderBy('deleted_at', 'DESC')
            ->where('user_id', $user_id)
            ->get();

        return view('admin.post.trash', compact('posts'));
    }

    function restore($id)
    {
        Post::onlyTrashed()
            ->where('id', $id)
            ->restore();

        return redirect()
            ->route('admin.post.trash')
            ->with('status', 'Khôi phục bài viết thành công');
    }

    function pernamentlyDelete($id)
    {
        Post::onlyTrashed()
            ->where('id', $id)
            ->forceDelete();

        return redirect()
            ->route('admin.post.trash')
            ->with('status', 'Xóa vĩnh viễn bài viết thành công');
    }
}
