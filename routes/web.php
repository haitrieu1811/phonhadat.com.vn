<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@home')->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified');

// File manager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

// My routes
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    // Account
    Route::get('account/profile/{id?}', 'AccountController@profile')->name('account.profile');
    Route::get('account/update', 'AccountController@update')->name('account.update');

    Route::post('account/updateStore', 'AccountController@updateStore')->name('account.updateStore');

    // Chat
    Route::get('chat', 'ChatController@show')->name('chat.show');

    // Admin.post
    Route::get('admin/post/create', 'AdminPostController@create')->name('admin.post.create');
    Route::get('admin/post/read', 'AdminPostController@read')->name('admin.post.read');
    Route::get('admin/post/update/{id}', 'AdminPostController@update')->name('admin.post.update');
    Route::get('admin/post/delete/{id}', 'AdminPostController@delete')->name('admin.post.delete');
    Route::get('admin/post/trash', 'AdminPostController@trash')->name('admin.post.trash');
    Route::get('admin/post/restore/{id}', 'AdminPostController@restore')->name('admin.post.restore');
    Route::get('admin/post/pernamentlyDelete/{id}', 'AdminPostController@pernamentlyDelete')->name('admin.post.pernamentlyDelete');

    Route::post('admin/post/createStore', 'AdminPostController@createStore')->name('admin.post.createStore');
    Route::post('admin/post/updateStore.', 'AdminPostController@updateStore')->name('admin.post.updateStore');
});

// Post
Route::get('post', 'PostController@show')->name('post.show');
Route::get('post/detail/{slug}/{id}', 'PostController@detail')->name('post.detail');

// Product
Route::get('product', 'ProductController@show')->name('product.show');
Route::get('product/detail/{slug}/{id}', 'ProductController@detail')->name('product.detail');
