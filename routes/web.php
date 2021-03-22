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
//     return view('welcome');
// });

Route::get('/','HomepageController@homepage')->name('homepage');
Route::get('/iletisim' , 'HomepageController@iletisim')->name('iletisim');
Route::post('/iletisim' , 'HomepageController@iletisimPost')->name('iletisim.post');


Route::get('/{page?}', 'HomepageController@page')->name('page');
Route::post('/{page?}', 'HomepageController@page')->name('page');


Route::get('/admin/giris', 'Back\AdminController@index')->name('admin.giris');

