<?php


use App\Http\Controllers\Main\EditPostController;
use App\Http\Controllers\Main\IndexMainController;
use App\Http\Controllers\Main\ShowPostController;
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

Route::group(['namespace' => 'Main', 'middleware' => 'admin'], function () {
    Route::get('/', [IndexMainController::class, '__invoke'])->name("main.index");
    Route::get('/main/{posts}', [ShowPostController::class, '__invoke'])->name('main.show');
    Route::get('/main/{posts}/edit', [EditPostController::class, '__invoke'])->name('main.edit');
    Route::patch('/main/{post}', [UpdatePostController::class, '__invoke'])->name('main.update');
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

