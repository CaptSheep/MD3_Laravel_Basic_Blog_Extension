<?php


use App\Http\Controllers\AuthController;
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
    return view('home');
})->name('home');
Route::middleware('checkAuth')->group(function (){
    Route::get('index',[PostController::class,'index'])->name('posts.index');
    Route::get('/create',[PostController::class,'create'])->name('post.create');
    Route::post('/create',[PostController::class,'store'])->name('posts.store');
    Route::get('/index/{id}/detail',[PostController::class,'show'])->name('posts.show');
    Route::get('/index/{id}/update',[PostController::class,'edit'])->name('post.edit');
    Route::post('/index/{id}/update',[PostController::class,'update'])->name('posts.update');
    Route::get('/index/{id}/destroy',[PostController::class,'destroy'])->name('posts.destroy');
});
Route::get('/login',[AuthController::class,'showFormLogin'])->name('showFormLogin');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::middleware('checkRegister')->group(function (){
    Route::get('/register',[AuthController::class,'showFormRegister'])->name('showFormRegister');
    Route::post('/register',[AuthController::class,'register'])->name('register');

});
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

