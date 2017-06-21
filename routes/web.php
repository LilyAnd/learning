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

Route::get('/about_us', function () {
    return view('about');
});

Route::get('/contact_us', function () {
    return view('contact');
});

Route::get('/voucher_makan', function () {
	return view('voucher');
 //   echo'this is  voucher makan';
});

Route::get('/semua_produk', function () {
    return view('semua');
});

//routing yang lebih baik dibandingkan yang diatas, Route::get('/alamat','namaController@namaFungsi'
Route::get('/about_usController', 'AboutUsController@about_us');

//Route::get('/about_usController', 'AboutUsController@child');

Route::get('/ichi', 'AboutUsController@ichi');

Route::get('/nii', 'AboutUsController@nii');

Route::get('/san', 'AboutUsController@san');

Route::get('/yon', 'AboutUsController@yon');

Route::get('/go', 'AboutUsController@go');

Route::get('/roku', 'AboutUsController@roku');

Route::get('/contact_usController', 'ContacUsController@contact_us');

Route::get('/voucher_makanController', 'VoucherMakanController@voucher_makan');

Route::get('/homeController', 'HomeController@home');

Route::get('/produkController', 'ProdukController@produk');

Route::get('/pertanyaanController', 'PertanyaanController@pertanyaan');

Route::get('/registrasiController', 'RegistrasiController@registrasi');

Route::get('/semuaProdukController', 'SemuaProdukController@semua_produk');

Route::get('/registrasiController', 'RegistrasiController@postRegister');

Route::get('/myFunction', 'AboutUsController@myFunction');

Route::get('/myArray', 'AboutUsController@myArray');

Route::post('/login', 'LoginController@login');

Route::get('/test', 'TestController@test');

Route::get('/student', 'TestController@students');

Route::get('/coba', 'SemuaProdukController@coba');

Route::get('/coba2', 'SemuaProdukController@coba2');

Route::get('/coba3', 'SemuaProdukController@coba3');

Route::get('/coba4', 'SemuaProdukController@coba4');

Route::get('/coba5', 'SemuaProdukController@coba5');
