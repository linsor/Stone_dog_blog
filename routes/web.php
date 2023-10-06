<?php


use App\Http\Controllers\MainController;
use App\Http\Controllers\Test\CreateTestController;
use App\Http\Controllers\Test\IndexTestController;
use App\Http\Controllers\Test\ShowTestController;
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

Route::group(['namespace' => 'Test'], function () {
    Route::get('/test', [IndexTestController::class, '__invoke'])->name('test.index');
    Route::get('/test/create', [CreateTestController::class, '__invoke'])->name('test.create');
  //  Route::post('/posts', [StoreTestController::class, '__invoke'])->name('post.store');
    Route::get('/test/{test}', [ShowTestController::class, '__invoke'])->name('test.show');
   // Route::get('/posts/{post}/edit', [EditController::class, '__invoke'])->name('post.edit');
   // Route::patch('/posts/{post}', [UpdateController::class, '__invoke'])->name('post.update');
   // Route::delete('/posts/{post}', [DeleteController::class, '__invoke'])->name('post.delete');
});