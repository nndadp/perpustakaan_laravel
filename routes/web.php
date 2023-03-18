<?php

use App\Http\Controllers\BeritaController;
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

Auth::routes();
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('userRole');
Route::middleware(['userRole'])->group(function () {
    Route::resource('User', AdminController::class);
    Route::resource('Article', ContentController::class);
    Route::get('user/add', 'AdminController@addUser')->name('User.add');
});
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home', function () {
//     return view('/home');
// });

Route::get('/tentang', function () {
    return view('/tentang');
});

Route::get('/galery', function () {
    return view('/galery');
});

Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/berita_detail/{id}', 'BeritaController@show',)->name('berita_detail');


Route::get('/kontak', function () {
    return view('/kontak');
});
