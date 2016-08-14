<?php

use Detection\MobileDetect as MobileDetect;

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

$detect = new MobileDetect();
if ($detect->isMobile()) {
    Route::get('/', function () {
        return view('app/mobile/app');
    });
} else {
    Route::get('/', 'home@index');
}
//Route::get('/perusahaan/dashboard', 'perusahaan\DashboardController@index');
Route::get('/new.produk', 'home@newProduk');
// Route::get('/','home@index');
Route::get('/fashion.busana.muslim', 'fashionMuslim@index');
Route::get('/fashion.busana.muslim.pria', 'fashionPria@index');
Route::get('/fashion.busana.muslim.wanita', 'fashionWanita@index');

Route::get('/perlengkapan.hajj&umrah', 'perlengkapanHajjUmrah@index');
Route::get('/perlengkapan.hajj&umrah-pria', 'perlengkapanHajjUmrahPria@index');
Route::get('/perlengkapan.hajj&umrah-wanita', 'perlengkapanHajjUmrahWanita@index');

Route::get('/souvenir&accesoris', 'souvenirAccesoris@index');
Route::get('/souvenir', 'souvenirAllproduk@index');
Route::get('/accesoris', 'accesorisAllproduk@index');

Route::get('/detail.produk{id}', 'fashionDetailproduk@index');
Route::post('/simpan', 'fashionDetailproduk@cart');
Route::post('/updateqty', 'detailitemPesanan@update');

//Route::get('/simpan/{id}', [
//    'uses' => 'fashionDetailproduk@cart',
//    'as' => 'product.addToCart']);
Route::get('/detail.item.pesanan', 'detailItemPesanan@index');
Route::get('/remove/{id}', 'detailItemPesanan@remove');
Route::get('/form.pembayaran.produk', 'pembayaran@index');

Route::post('/search.item.produk','fashionSearch@coba');
Route::get('/search/autocomplete','fashionSearch@autoComplete');
Route::get('/search.item','fashionSearch@index');

Route::get('logout', 'LoginController@Logout');
Route::get('adminToko', 'LoginController@index');
Route::post('loginToko', 'LoginController@LoginToko');

//drop down
Route::get('get-kota/{id}', 'pembayaran@getKotax');
Route::get('get-kecamatan/{id}', 'pembayaran@getKecamatanx');
Route::get('get-qty/{id}', 'pembayaran@getKotax');

// page

Route::get('kategori-selected/{id}', 'SelectKategoriController@index');

