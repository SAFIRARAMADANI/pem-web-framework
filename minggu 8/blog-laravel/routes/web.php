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
    return view('welcome');
});

Route::get('halo', function () {
    return '<h1> Hello World ! </h1>';
});

Route::get('/welcome', function (){
		echo "welcome";
});

Route::get('/show/{id}', function ($id=1){
	echo "nilai parameter adalah ".$id;
});

Route::get('/edit/{nama}', function ($nama){
	echo "nilai parameter adalah".$nama;
})->where('nama','[A-Za-z]+');

Route::get('/index',function(){
	echo "<a href='".route('create')."'>akses route dengan nama </a>";
});

Route::get('/create', function(){
	echo "Route diakses menggunakan nama";
})->name('create');

Route::get('/produk', 'produkContorller@index');

Route::get('/produk/show', 'produkController@show');

Route::get ('/halaman',function(){
	$title='Harry Pooter';
	$konten='harry pooter and the deathly hallos: part 2';
	return view('konten.halaman',compact('title','konten'));
});

route::get('/pelanggan','pelangganController@index');

Route::resource('produk','produkController');

Route::get('/produk/store','produkController@store');
Route::get('/produk/update', 'produkController@update');
Route::get('/produk/delete', 'produkController@delete');






