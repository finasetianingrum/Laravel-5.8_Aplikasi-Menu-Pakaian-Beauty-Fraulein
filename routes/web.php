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


Route::get('/', 'PagesController@homepage');

Route::get('about', 'PagesController@about');

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('product', 'ProductController@index');

Route::get('product/create', 'ProductController@create');

Route::get('product/{product}', 'ProductController@show');

Route::post('product', 'ProductController@store');

Route::get('product/{product}/edit', 'ProductController@edit');

Route::patch('product/{product}', 'ProductController@update');
		
Route::delete('product/{product}', 'ProductController@destroy');


// Route::get('jenis', 'JenisController@index');

// Route::get('jenis/create', 'JenisController@create');

// Route::post('jenis', 'JenisController@store');

// Route::get('jenis/{jenis}/edit', 'JenisController@edit');

// Route::patch('jenis/{jenis}', 'JenisController@update');




Route::resource('brand', 'BrandController');

Route::resource('macam', 'MacamController');

Route::resource('user', 'UserController');

// Route::get('sampledata', function() {
// 	DB::table('product')->insert([

// 		[
// 			'id_product' => 'P001',
// 			'nama_product' => 'Bridal Gown',
// 			'harga' => '1.000.000',
// 			'stok' => '2',
// 			'created_at' => '2020-07-03 12:00:00',
// 			'updated_at' => '2020-07-03 12:00:00'
// 		],
// 		[
// 			'id_product' => 'P002',
// 			'nama_product' => 'A Line Dress',
// 			'harga' => '5000.000',
// 			'stok' => '3',
// 			'created_at' => '2020-07-03 12:00:00',
// 			'updated_at' => '2020-07-03 12:00:00'

// 		],
// 	]);

// });




