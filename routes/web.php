<?php

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
    return view('auth.login');
});
Route::post('/login', 'Auth\LoginController@login');


Auth::routes();
Route::match(["GET", "POST"], "/register", function(){
    return redirect("/login");
})->name("register");

Route::get('/home', 'HomeController@index')->name('home');
Route::resource("users", "UserController");

Route::get('/siswa/trash', 'SiswaController@trash')->name('siswa.trash')->middleware('admin');
Route::get('/siswa/{id}/restore', 'SiswaController@restore')->name('siswa.restore')->middleware('admin');
Route::resource("siswa", "SiswaController")->middleware('admin');
///
Route::get('/guru/{id}/editpassword','GuruController@editpassword')->name('guru.editpassword')->middleware('admin');
Route::get('/guru/updatepassword','GuruController@updatepassword')->name('guru.updatepassword')->middleware('admin');
Route::get('/guru/trash', 'GuruController@trash')->name('guru.trash')->middleware('admin');
Route::get('/guru/{id}/restore', 'GuruController@restore')->name('guru.restore')->middleware('admin');
Route::resource("guru", "GuruController")->middleware('admin');
///
Route::get('/walikelas/trash', 'WalikelasController@trash')->name('walikelas.trash')->middleware('admin');
Route::get('/walikelas/{id}/restore', 'WalikelasController@restore')->name('walikelas.restore')->middleware('admin');
Route::resource("walikelas", "WalikelasController")->middleware('admin');

Route::resource("kelas", "KelasController")->middleware('admin');

Route::resource("HalamanGURU", "MengajarController");








