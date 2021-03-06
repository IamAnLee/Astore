<?php

use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\TransactionController;
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
//frontend
Route::get('/', 'HomeController@index');
Route::get('/trangchu','HomeController@index');
Route::get('/shop','ShopController@shop');
Route::get('/about','HomeController@about');
//Danh_muc_sp
Route::get('/danh_muc/{category_id}','ShopController@show_cate');
Route::get('/thuong_hieu/{brand_id}','ShopController@show_brand');
//chi_tiet_san_pham
Route::get('/chi_tiet_san_pham/{product_id}/{category_id}/{brand_id}','TransactionController@detail_product');
//cart
Route::post('/them_gio_hang','TransactionController@cart');
Route::get('/gio_hang','TransactionController@show_cart');
Route::get('/xoa_san_pham/{rowId}','TransactionController@delete_cart');
Route::post('/cap_nhat_gio_hang','TransactionController@update_cart');
//check-out

Route::get('/yeu_cau_dang_nhap','CheckoutController@check_out');
Route::get('/dang_ky','CheckoutController@add_customer');
Route::post('/address','CheckoutController@add_address');
Route::get('/thanh_toan_gio_hang','CheckoutController@payment');
Route::get('/cash_on_delevery','CheckoutController@cash_delevery');
//backen

Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');
// CategoryProduct
Route::get('/add_category_product','CategoryProduct@add_category_product');

Route::get('/edit_category_product/{category_id}','CategoryProduct@edit_category_product');
Route::get('/delete_category_product/{category_id}','CategoryProduct@delete_category_product');

Route::get('/all_category_product','CategoryProduct@all_category_product');
Route::post('/save_category_product','CategoryProduct@save_category_product');
Route::get('/unactive_product/{category_id}','CategoryProduct@unactive_product');
Route::get('/active_product/{category_id}','CategoryProduct@active_product');


Route::post('/update_category_product/{category_id}','CategoryProduct@update_category_product');



//Brand_product
Route::get('/add_brand_product','BrandProduct@add_brand_product');

Route::get('/edit_brand_product/{brand_id}','BrandProduct@edit_brand_product');
Route::get('/delete_brand_product/{brand_id}','BrandProduct@delete_brand_product');

Route::get('/all_brand_product','BrandProduct@all_brand_product');
Route::post('/save_brand_product','BrandProduct@save_brand_product');
Route::get('/unactive_brand_product/{brand_id}','BrandProduct@unactive_brand_product');
Route::get('/active_brand_product/{brand_id}','BrandProduct@active_brand_product');


Route::post('/update_brand_product/{brand_id}','BrandProduct@update_brand_product');


//Product
Route::get('/add_product','ProductController@add_product');

Route::get('/edit_product/{product_id}','ProductController@edit_product');
Route::get('/delete_product/{product_id}','ProductController@delete_product');

Route::get('/all_product','ProductController@all_product');
Route::post('/save_product','ProductController@save_product');
Route::get('/unactive/{product_id}','ProductController@unactive');
Route::get('/active/{product_id}','ProductController@active');
Route::post('/update_product/{product_id}','ProductController@update_product');
