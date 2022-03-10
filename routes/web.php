<?php


use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('posts')->group(function (){
    Route::get('index',[PostController::class,'index'])->name('posts.index');
    Route::get('/create',[PostController::class,'create'])->name('post.create');
    Route::post('/create',[PostController::class,'store'])->name('posts.store');
    Route::get('/index/{id}/detail',[PostController::class,'show'])->name('posts.show');
    Route::get('/index/{id}/update',[PostController::class,'edit'])->name('post.edit');
    Route::post('/index/{id}/update',[PostController::class,'update'])->name('posts.update');
    Route::get('/index/{id}/destroy',[PostController::class,'destroy'])->name('posts.destroy');

});
