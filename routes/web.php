<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\UserController;

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

Route::get('/' ,[HomeController::class ,'home']);
Route::get('/test', [HomeController::class,'test']);
Route::get('/home' ,[HomeController::class ,'home'])->name('home');
Route::get('/create_lists',[HomeController::class,'create_lists'])->name('create_lists');
Route::get('/create_slugs',[HomeController::class,'create_slugs'])->name('create_slugs');
Route::get("/create_filter_modal_content",[HomeController::class,'create_filter_modal_content'])->name('create_filter_modal_content');

Route::get("/login", [UserController::class, 'show_login'])->name('login');
Route::get("/register", [UserController::class, 'show_register'])->name('register');
Route::post("/register_process", [UserController::class, 'do_registration'])->name('do_registration');
Route::post('/login_process', [UserController::class, 'do_login'])->name('do_login');
Route::post('/account_update', [UserController::class, 'account_update'])->name('do_account_update');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/forget_password', [UserController::class, 'forget_password'])->name('forget_password');

Route::post('/change_password', [UserController::class, 'change_password'])->name('change_password');

Route::get('/reset_link/{reset_token}', [UserController::class, 'reset_link'])->name('reset_link');

Route::post('/update_password', [UserController::class, 'update_password'])->name('update_password');


#User Account
Route::get('/account', [UserController::class, 'account'])->name('account');
Route::get('/favourite_list', [UserController::class, 'favourite_list'])->name('favourite_list');
Route::get('/delete_favourite', [UserController::class, 'delete_favourite'])->name('delete_favourite');

Route::get('/delete_alert_email', [UserController::class, 'delete_alert_email'])->name('delete_alert_email');

Route::get('/email_alerts', [UserController::class, 'email_alerts'])->name('email_alerts');


#Header Content
Route::post('get_our_categories', [HomeController::class ,'get_our_categories'])->name('get_our_categories');
Route::post('get_colors', [HomeController::class, 'get_colors'])->name('get_colors');
Route::post('get_sizes', [HomeController::class, 'get_sizes'])->name('get_sizes');

#Stores
Route::get('online_stores', [StoreController::class, 'online_stores'])->name('online_stores');
Route::get('brands', [StoreController::class, 'online_brands'])->name('brands');


#Products
Route::get('shop/{parent_category_slug}', ['as' => 'shop.categoryProdcuts', 'uses' => 'App\Http\Controllers\ProductController@category_products']);

Route::get('shop/{parent_category_slug}/{category_slug}', ['as' => 'shop.categoryProdcuts1', 'uses' => 'App\Http\Controllers\ProductController@category_products']);

Route::get('shop/{parent_category_slug}/{category_slug}/{sub_category}', ['as' => 'shop.categoryProdcuts2', 'uses' => 'App\Http\Controllers\ProductController@category_products']);

Route::get('shop', ['as' => 'shop.categoryProdcuts3', 'uses' => 'App\Http\Controllers\ProductController@category_products']);

Route::get('shop/{offer_type}',  ['as' => 'shop.offerProducts', 'uses' => 'App\Http\Controllers\ProductController@offer_products']);

Route::get('site_map', [HomeController::class, 'site_map'])->name('site_map');

Route::get('stores/{our_category_id}', [StoreController::class, 'stores']);
Route::get('stores/{parent_category_slug}/{our_category_id}', [StoreController::class, 'stores']);

Route::get("/get_product_details_modal_content",[ProductController::class,'get_product_details_modal_content'])->name('get_product_details_modal_content');

Route::get('/detail/{parent_category_slug}/{our_category_slug}/{product_slug}', [ProductController::class, 'product_detail'])->name('product_detail');

Route::get('redirect_to/{product_id}', [ProductController::class, 'redirect_to'])->name('redirect_to');

Route::get("/get_product_comparison_modal_content",[ProductController::class,'get_product_comparison_modal_content'])->name('get_product_comparison_modal_content');

Route::get('/add_favourite', [UserController::class, 'add_favourite'])->name('add_favourite');
Route::get('/remove_favourite', [UserController::class, 'remove_favourite'])->name('remove_favourite');


#Alerts
Route::get("/get_alert_modal_content",[UserController::class,'get_alert_modal_content'])->name('get_alert_modal_content');

Route::get('/save_alert', [UserController::class, 'save_alert'])->name('save_alert');
Route::post('/edit_email_alert', [UserController::class, 'edit_email_alert'])->name('edit_email_alert');

#Businesses
Route::get('businesses', [BusinessController::class, 'businesses'])->name('businesses');
Route::get('/ac_business_search',[BusinessController::class, 'ac_business_search'])->name('ac_business_search');
Route::get('business_details/{business_id}', [BusinessController::class, 'business_details'])->name('business_details');
Route::post('business/save_review', [BusinessController::class, 'save_review'])->name('save_review');

#Filters 

Route::get('/women', [FilterController::class, 'women_filter'])->name('women_filter');
Route::get('/men', [FilterController::class, 'men_filter'])->name('men_filter');
Route::get('/baby', [FilterController::class, 'baby_filter'])->name('baby_filter');
Route::get('/boy', [FilterController::class, 'boy_filter'])->name('boy_filter');
Route::get('/girl', [FilterController::class, 'baby_filter'])->name('baby_filter');

#Women Filters
Route::get('/women/dress-length', [FilterController::class, 'women_dress_length'])->name('women_dress_length');
Route::get('/women/sleeve-type', [FilterController::class, 'women_sleeve_type'])->name('women_sleeve_type');
Route::get('/women/sleeve-length', [FilterController::class, 'women_slevees_length'])->name('women_slevees_length');
Route::get('/women/features',[FilterController::class,'women_features'])->name('women_features');
Route::get('/women/necklines',[FilterController::class,'women_necklines'])->name('women_necklines');
Route::get('/women/materials',[FilterController::class,'women_materials'])->name('women_materials');
Route::get('/women/patterns',[FilterController::class,'women_patterns'])->name('women_patterns');
Route::get('/women/dress_style',[FilterController::class,'women_dress_style'])->name('women_dress_style');
Route::get('/women/embellishments',[FilterController::class,'women_embellishments'])->name('women_embellishments');
Route::get('/women/occasions',[FilterController::class,'women_occasions'])->name('women_occasions');



#Girls Filters
Route::get('/girl/dress-length', [FilterController::class, 'girl_dress_length'])->name('girl_dress_length');
Route::get('/girl/sleeve-type', [FilterController::class, 'girl_sleeve_type'])->name('girl_sleeve_type');


Route::get('/blog', [FilterController::class, 'all_filters'])->name('blog');

Route::get('/get_price_history_content', [ProductController::class, 'get_price_history_content']);

#Advance Search
Route::get('/advance-search', [ProductController::class, 'advance_search'])->name('advance-search');

Route::get('/get_gender_filters', [ProductController::class, 'get_gender_filters'])->name('get_gender_filters');