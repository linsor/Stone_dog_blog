<?php


use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, '__invoke'])->name("main.index");

Route::group(['namespace' => 'Test', 'middleware' => 'admin'], function () {
    Route::get('/test', [IndexTestController::class, '__invoke'])->name('test.index');
    Route::get('/test/{accessories}', [ShowTestController::class, '__invoke'])->name('test.show');
    Route::get('/test/{post}/edit', [EditTestController::class, '__invoke'])->name('test.edit');
    Route::patch('/test/{post}', [UpdateTestController::class, '__invoke'])->name('test.update');
   // Route::delete('/posts/{post}', [DeleteController::class, '__invoke'])->name('post.delete');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

