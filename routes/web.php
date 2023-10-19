<?php


use App\Http\Controllers\Main\CreatePostController;
use App\Http\Controllers\Main\DeletePostController;
use App\Http\Controllers\Main\EditPostController;
use App\Http\Controllers\Main\IndexPostController;
use App\Http\Controllers\Main\ShowPostController;
use App\Http\Controllers\Main\StorePostController;
use App\Http\Controllers\Main\UpdatePostController;
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
    Route::get('/', [IndexPostController::class, '__invoke'])->name("post.index");
    Route::get('/post/create', [CreatePostController::class, '__invoke'])->name('post.create');
    Route::post('/post', [StorePostController::class, '__invoke'])->name('post.store');
    Route::get('/post/{post}', [ShowPostController::class, '__invoke'])->name('post.show');
    Route::get('/post/{post}/edit', [EditPostController::class, '__invoke'])->name('post.edit');
    Route::patch('/post/{post}', [UpdatePostController::class, '__invoke'])->name('post.update');
    Route::delete('/post/{post}', [DeletePostController::class, '__invoke'])->name('post.delete');

});

Route::group(['namespace' => 'Test', 'middleware' => 'admin'], function () {
    Route::get('/test', [IndexTestController::class, '__invoke'])->name('test.index');
    Route::get('/test/{accessories}', [ShowTestController::class, '__invoke'])->name('test.show');
    Route::get('/test/{post}/edit', [EditTestController::class, '__invoke'])->name('test.edit');
    Route::patch('/test/{post}', [UpdateTestController::class, '__invoke'])->name('test.update');
    // Route::delete('/posts/{post}', [DeleteController::class, '__invoke'])->name('post.delete');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

