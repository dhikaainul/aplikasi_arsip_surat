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
Route::get('/', 'ArsipController@showdataarsip')->name('showdataarsip');
Route::get('/unggaharsip', 'ArsipController@showunggaharsip')->name('showunggaharsip');
Route::post('/simpanarsip', 'ArsipController@simpanarsip')->name('simpanarsip');
Route::get('/editarsip/{id}', 'ArsipController@editarsip')->name('editarsip');
Route::get('/download/{id}', 'ArsipController@getDownload')->name('download');
Route::post('/updatearsip/{id}', 'ArsipController@updatearsip')->name('updatearsip');
Route::delete('/hapusarsip/{id}', 'ArsipController@hapusarsip')->name('hapusarsip');
Route::get('/lihatarsip/{id}','ArsipController@lihatarsip')->name('lihatarsip');
Route::get('/about', 'ArsipController@about')->name('about');
Route::get('/lihatdata', 'ArsipController@lihatdata')->name('lihatdata');
// Route::get('/download', 'ArsipController@getDownload');