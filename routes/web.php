<?php


use App\Http\Controllers\Admin\Users\AdminIndexUserController;
use App\Http\Controllers\Admin\Users\AdminDeleteUserController;
use App\Http\Controllers\Admin\Users\AdminEditUserController;
use App\Http\Controllers\Admin\Users\AdminUpdateUserController;
use App\Http\Controllers\Admin\Post\DeletePostController;
use App\Http\Controllers\Admin\Post\AdminCreatePostController;
use App\Http\Controllers\Admin\Post\AdminEditPostController;
use App\Http\Controllers\admin\Post\AdminIndexPostController;
use App\Http\Controllers\Admin\Post\AdminShowPostController;
use App\Http\Controllers\Admin\Post\StorePostController;
use App\Http\Controllers\Admin\Post\UpdatePostController;
use App\Http\Controllers\Main\Post\IndexPostController;
use App\Http\Controllers\Main\Post\ShowPostController;
use App\Http\Controllers\Main\User\ShowUserController;
use App\Http\Controllers\Main\User\UpdateUserController;
use App\Http\Controllers\Test\EditTestController;
use App\Http\Controllers\Test\IndexTestController;
use App\Http\Controllers\Test\ShowTestController;
use App\Http\Controllers\Test\UpdateTestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(['namespace' => 'Main'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/', [IndexPostController::class, '__invoke'])->name("post.index");
        Route::get('/post/{post}', [ShowPostController::class, '__invoke'])->name('post.show');
    });
    Route::group(['namespace' => 'User'], function () {
        Route::get('/profile', [ShowUserController::class, '__invoke'])->name("profile.show");
        Route::patch('/profile/{user}', [UpdateUserController::class, '__invoke'])->name('user.update');
        
    });

});

Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function () {

    Route::group(['prefix' => '/admin/user'], function () {
        Route::get('/', [AdminIndexUserController::class, '__invoke'])->name("admin.user.index");
        Route::get('/{user}/edit', [AdminEditUserController::class, '__invoke'])->name('admin.user.edit');
        Route::patch('/{user}', [AdminUpdateUserController::class, '__invoke'])->name('admin.user.update');
        Route::delete('/{user}', [AdminDeleteUserController::class, '__invoke'])->name('admin.user.delete');
    });

    Route::group(['prefix' => '/admin'], function () {
        Route::get('/create', [AdminCreatePostController::class, '__invoke'])->name('admin.post.create');
        Route::get('/{post}/edit', [AdminEditPostController::class, '__invoke'])->name('admin.post.edit');
        Route::get('/', [AdminIndexPostController::class, '__invoke'])->name("admin.post.index");
        Route::delete('/post/{post}', [DeletePostController::class, '__invoke'])->name('post.delete');
        Route::post('/post', [StorePostController::class, '__invoke'])->name('post.store');
        Route::patch('/post/{post}', [UpdatePostController::class, '__invoke'])->name('post.update');
        Route::get('/{post}', [AdminShowPostController::class, '__invoke'])->name('admin.post.show');
    });
});

Route::group(['namespace' => 'Test', 'middleware' => 'admin'], function () {
    Route::get('/test', [IndexTestController::class, '__invoke'])->name('test.index');
    Route::get('/test/{accessories}', [ShowTestController::class, '__invoke'])->name('test.show');
    Route::get('/test/{post}/edit', [EditTestController::class, '__invoke'])->name('test.edit');
    Route::patch('/test/{post}', [UpdateTestController::class, '__invoke'])->name('test.update');
    // Route::delete('/posts/{post}', [DeleteController::class, '__invoke'])->name('post.delete');
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

