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

// Route::get('/', function () {
//     return view('login');
// // });
//  Route::get('/', function () {
//      return view('Home');
//   });
Route::get('/', 'PagesController@homelogin'); 



// Route::get('/index', 'UserController@index');
// Route::get('/login', 'UserController@login');
// Route::post('/loginPost', 'UserController@loginPost');


Route::get('/register', 'UserController@create');
Route::post('/', 'UserController@store');






 //Route::post('/index', UserController@)
 Route::get('/index', 'MahasiswaController@index');
 Route::get('/index/create', 'MahasiswaController@create');
 Route::get('/index/{mahasiswa}', 'MahasiswaController@show');
 Route::post('/index', 'MahasiswaController@store');
 Route::delete('/index/{mahasiswa}', 'MahasiswaController@destroy');
 Route::get('/index/{mahasiswa}/edit', 'MahasiswaController@edit');
 Route::patch('/index/{mahasiswa}/edit','MahasiswaController@update');
 //Route::get('/detailmahasiswa', 'MahasiswaController@show');
//Route::get('/MainMenu', 'MahasiswaController@index');
// Route::get('/index', function () {
//     return view('index');
// });
