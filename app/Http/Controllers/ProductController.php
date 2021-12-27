<?php

namespace App\Http\Controllers;

use App\Models\OurCategory;
use App\Models\ParentCategory;
use App\Models\ColorMap;
use App\Models\SizeMap;
use App\Models\DressStyle;
use App\Models\OfferType;
use App\Models\PriceHistory;
use App\Models\FitType;
use App\Models\StoreCategory;
use App\Models\DressLength;
use App\Models\AllCount;
use App\Models\Neckline;
use App\Models\SleeveType;
use App\Models\Pattern;
use App\Models\Material;
use App\Models\Embellishment;
use App\Models\SleeveLength;
use App\Models\EmailAlert;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;

use DB;
use Str;
use Session;
use Mail;
 
use App\Mail\NotifyMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{

	public function  offer_products(Request $request, $offer_type){

		$product_query  = Product::query();
		$all_count_query = AllCount::query();
		$offer_type_query = OfferType::query();

		$request_data =  $request->all();

		$selected_offer   = "";
		$title_2 = " at Dress Ads";
		$title = "";
		
		
		$breadcrumbs = [];
		$key = "";
		$is_today = false;

		if(Session::has('user')){

			$product_query->with('email_alerts', function($q){
			    $q->where('user_id', Session::get('user')->id);
			});

			$product_query->with('favourite_ads', function($q){
			    $q->where('user_id', Session::get('user')->id);
			});
		}
		
		if($offer_type && $offer_type !=""){

		
			$offer_type = $offer_type;
			switch ($offer_type) {
				case 'today-sale':
					$offer_type = 'sale';
					$is_today= true;
					break;
				
				case 'new-arrival':
					$offer_type = 'new-arrival';
					break;
			}

			$offer = $offer_type_query->where('offer_type_slug', $offer_type)->first();
			$selected_offer =  $offer;

			if(!$is_today){

				$breadcrumbs[$key] = $offer->offer_type_name;
				$key = "/shop/".$offer_type;
				$title = "Women's Dresses Sales, ".$offer->offer_type_name;

			}else{

				$key = "/shop/today-sale";
				$breadcrumbs[$key] = "Today Sales";
				$title = "Women's Dresses Sales, Today Sales";
			}

			

			
			$request_data['offer_type'][] = $offer->id;
			
		
			$selected_sub1 = "Women";
			$selected ="Women";
			$request_data['parent_category_slug'] = "women";

		}else{

			 Redirect::route('shop.categoryProdcuts3');
		}
		

		$title = $title.' '.$title_2;

		#Store or Brand
		$stores = [];

		if(!empty($request->store) && !empty($request->brand)){
			$stores = array_merge($request->store, $request->brand);
		}elseif(!empty($request->store) && empty($request->brand)){
			$stores = $request->store;
		}elseif(empty($request->store) && !empty($request->brand)){
			$stores = $request->brand;
		}

		if(!empty($stores)){
			$product_query->whereIn('store_id', $stores);
		}


		# Price
		$price_max ="" ;
		$price_min = "";
		$price_filter = "";

		if($request->price_range && !empty($request->price_range) ){

			if($request->price_range == "1000+"){
				$price_filter = 1000;
			}else{
				$arr_range = explode("-", $request->price_range);
				$price_max = $arr_range[1];
				$price_min = $arr_range[0];
			}
		}elseif($request->min_price && !empty($request->min_price) && $request->max_price && !empty($request->max_price)){
			
			$price_max = $request->max_price;
			$price_min = $request->min_price;
		}

		if($price_max !="" && $price_min !=""){

			$product_query->where(function($query) use ($price_min)
	        {
	        	$query->where('sale_price','>=',$price_min);
				$query->orWhere(function($query) use ($price_min)
				{
					$query->where('price','>=',$price_min);
					$query->whereNull('sale_price');
				});
	        });

			$product_query->where(function($query) use ($price_max)
	        {
	        	$query->where('sale_price','<=',$price_max);
				$query->orWhere(function($query) use ($price_max)
				{
					$query->where('price','<=',$price_max);
					$query->whereNull('sale_price');
				});
	        });
		}elseif($price_filter !=""){

			$product_query->where('sale_price','>=',$price_filter);
			$product_query->orWhere(function($query) use ($price_filter)
			{
				$query->where('price','>=',$price_filter);
				$query->whereNull('sale_price');
			});
		}

		# Filter by Dress Style
		if($request->dress_style && !empty($request->dress_style)){

			$product_query->whereHas('dress_styles', function($q) use($request) {
			    $q->whereIn('id', $request->dress_style);
			});
		}

		# Filter by Color
		if($request->color && !empty($request->color)){

			$product_query->whereHas('color_maps', function($q) use($request) {
			    $q->whereIn('id', $request->color);
			});
		}

		# Filter by Size
		if($request->size && !empty($request->size)){

			$product_query->whereHas('size_maps', function($q) use($request) {
			    $q->whereIn('id', $request->size);
			});
		}

		# Filter by Dress Length
		if($request->dress_length && !empty($request->dress_length)){

			$product_query->whereHas('dress_lengths', function($q) use($request) {
			    $q->whereIn('id', $request->dress_length);
			});
		}

		# Filter by Pattern
		if($request->pattern && !empty($request->pattern)){

			$product_query->whereHas('patterns', function($q) use($request) {
			    $q->whereIn('id', $request->pattern);
			});
		}

		# Filter by Pattern
		if($request->pattern && !empty($request->pattern)){

			$product_query->whereHas('patterns', function($q) use($request) {
			    $q->whereIn('id', $request->pattern);
			});
		}

		# Filter by Neckline
		if($request->neckline && !empty($request->neckline)){

			$product_query->whereHas('necklines', function($q) use($request) {
			    $q->whereIn('id', $request->neckline);
			});
		}

		# Filter by Sleeve Type
		if($request->sleeve_type && !empty($request->sleeve_type)){

			$product_query->whereHas('sleeve_types', function($q) use($request) {
			    $q->whereIn('id', $request->sleeve_type);
			});
		}

		# Filter by Embellishment
		if($request->embellishment && !empty($request->embellishment)){

			$product_query->whereHas('embellishments', function($q) use($request) {
			    $q->whereIn('id', $request->embellishment);
			});
		}


		# Filter by Material
		if($request->material && !empty($request->material)){

			$product_query->whereHas('materials', function($q) use($request) {
			    $q->whereIn('id', $request->material);
			});
		}


		# Filter by Sleeve Length
		if($request->sleeve_length && !empty($request->sleeve_length)){

			$product_query->whereHas('sleeve_lengths', function($q) use($request) {
			    $q->whereIn('id', $request->sleeve_length);
			});
		}


		# Filter by Fabric Type
		if($request->fabric_type && !empty($request->fabric_type)){

			$product_query->whereHas('fabric_types', function($q) use($request) {
			    $q->whereIn('id', $request->fabric_type);
			});
		}

		# Filter by Feature
		if($request->feature && !empty($request->feature)){

			$product_query->whereHas('features', function($q) use($request) {
			    $q->whereIn('id', $request->feature);
			});
		}


		# Filter by Feature
		if($request->feature && !empty($request->feature)){

			$product_query->whereHas('features', function($q) use($request) {
			    $q->whereIn('id', $request->feature);
			});
		}

		# Filter By Fit Type
		if($request->fit_type && !empty($request->fit_type)){

			$product_query->whereHas('fit_types', function($q) use($request) {
			    $q->whereIn('id', $request->fit_type);
			});
		}
		
		# Filter By Garment Care
		if($request->garment_care && !empty($request->garment_care)){

			$product_query->whereHas('garment_cares', function($q) use($request) {
			    $q->whereIn('id', $request->garment_care);
			});
		}

	

		# Filter By Occasion		
		if($request->occasion && !empty($request->occasion)){

			$product_query->whereHas('occasions', function($q) use($request) {
			    $q->whereIn('id', $request->occasion);
			});
		}

		# Filter By Season		
		if($request->season && !empty($request->season)){

			$product_query->whereHas('seasons', function($q) use($request) {
			    $q->whereIn('id', $request->season);
			});
		}

		# Filter By Theme		
		if($request->theme && !empty($request->theme)){

			$product_query->whereHas('themes', function($q) use($request) {
			    $q->whereIn('id', $request->theme);
			});
		}

		$offer_type_filter = "";


		# Filter By Offer Type

		if(($request->offer_type && !empty($request->offer_type)) || !empty($request_data['offer_type']) ){

			$offer_type_arr = $request->offer_type;

			if($offer_type_arr){
				$offer_type_arr = array_merge($request_data['offer_type'],$offer_type_arr);
			}else{
				$offer_type_arr = [];
				$offer_type_arr = array_merge($request_data['offer_type'],$offer_type_arr);
			}

			$product_query->whereIn('offer_type_id', $offer_type_arr);
			
			$offer_type_filter .="?";
			foreach($request_data['offer_type'] as $ot_id){
				$offer_type_filter.="offer_type[]=".$ot_id."&";
			}

			$offer_type_filter .="s";

		}



		// $product_query->where('name2','like','%dress%')->whereNotNull('image');

		if($request->sort && $request->sort !=""){
		
			$sort_arr = explode('-',$request->sort);
			if($sort_arr[0] == "price"){
 
				$product_query->orderByRaw("CASE WHEN sale_price is null THEN price ELSE sale_price END ".$sort_arr[1]);
			}
		}else{
			// $product_query = $product_query->inRandomOrder();
		}
		
		$limit = $request->limit ? $request->limit : 10;

		$products= $product_query->paginate($limit);
		

		$all_counts = $all_count_query->where('total_count','>',0)->where('parent_category_slug','women')->orderBy('total_count','DESC')->get()->groupBy('count_type');

		$other_counts = AllCount::where('total_count','>',0)->whereNull('parent_category_slug')->orderBy('total_count','DESC')->get()->groupBy('count_type');

		$show_filters = true;


		return view('products.offer_products', 
			[ 
				"products" => $products, 
				"selected_offer"=>$selected_offer, 
				"selected" => $selected,
				"all_counts" => $all_counts,
				"other_counts" => $other_counts,
				"show_filters" => $show_filters,
				"selected_sub1" => $selected_sub1,
				"offer_type_filter" => $offer_type_filter,
				"page_title" => $title,
				"breadcrumbs" => $breadcrumbs,
				"request_data" => (Object)$request_data,
				"is_today" => $is_today

			]
		);

	}


	public function  stores_products(Request $request, $store){

		$query = Store::query();

		$product_query  = Product::query();
		$all_count_query = AllCount::query();

		$request_data =  $request->all();

		$selected_offer   = "";
		$title = "";
		
		
		$breadcrumbs = [];
		$key = "";
		$store_filter ="";
		$selected_id = '';

		if(Session::has('user')){

			$product_query->with('email_alerts', function($q){
			    $q->where('user_id', Session::get('user')->id);
			});

			$product_query->with('favourite_ads', function($q){
			    $q->where('user_id', Session::get('user')->id);
			});
		}

		if($store && $store !=""){

			$query->where('store_slug', $store);

			$selected_store = $query->first();
			
			$selected_id = $selected_store->id;

			$breadcrumbs[$key] = $selected_store->store_name;
			$key = "/shop/".$store;
			$title = $selected_store->store_name.' Dresses';

			if($selected_store->nature == "Store"){

				if(!isset($request_data['store'])){

					$request_data['store'][] = $selected_store->id;
					$store_filter .="?";
					$store_filter.="store[]=".$selected_store->id."&";
				}else{

					$store_filter .="?";
					foreach($request_data['store'] as $ot_id){
						$store_filter.="store[]=".$ot_id."&";
					}

					if(!in_array($selected_store->id, $request_data['store'])){
						$arr = $request_data['store'];
						$arr  = array_merge($arr, [$selected_store->id]);

						$request_data['store'] = $arr;
					}
				}

			}elseif($selected_store->nature == "Brand"){

				if(!isset($request_data['brand'])){

					$request_data['brand'][] = $selected_store->id;
					$store_filter .="?";
					$store_filter.="brand[]=".$selected_store->id."&";
				}else{

					$store_filter .="?";
					foreach($request_data['brand'] as $ot_id){
						$store_filter.="brand[]=".$ot_id."&";
					}

					if(!in_array($selected_store->id, $request_data['brand'])){
						$arr = $request_data['brand'];
						$arr  = array_merge($arr, [$selected_store->id]);

						$request_data['brand'] = $arr;
					}
				}
			}
			

			$selected_sub1 = "Women";
			$selected ="Women";
			$request_data['parent_category_slug'] = "women";
		}else{

			 Redirect::route('shop.categoryProdcuts3');
		}


				#Store or Brand
		$stores = [];

		if(!empty($request->store) && !empty($request->brand)){
			$stores = array_merge($request->store, $request->brand);
		}elseif(!empty($request->store) && empty($request->brand)){
			$stores = $request->store;
		}elseif(empty($request->store) && !empty($request->brand)){
			$stores = $request->brand;
		}

		$stores[] =  $selected_store->id;

		if(!empty($stores)){
			$product_query->whereIn('store_id', $stores);
		}

		

		# Price
		$price_max ="" ;
		$price_min = "";
		$price_filter = "";

		if($request->price_range && !empty($request->price_range) ){

			if($request->price_range == "1000+"){
				$price_filter = 1000;
			}else{
				$arr_range = explode("-", $request->price_range);
				$price_max = $arr_range[1];
				$price_min = $arr_range[0];
			}
		}elseif($request->min_price && !empty($request->min_price) && $request->max_price && !empty($request->max_price)){
			
			$price_max = $request->max_price;
			$price_min = $request->min_price;
		}

		if($price_max !="" && $price_min !=""){

			$product_query->where(function($query) use ($price_min)
	        {
	        	$query->where('sale_price','>=',$price_min);
				$query->orWhere(function($query) use ($price_min)
				{
					$query->where('price','>=',$price_min);
					$query->whereNull('sale_price');
				});
	        });

			$product_query->where(function($query) use ($price_max)
	        {
	        	$query->where('sale_price','<=',$price_max);
				$query->orWhere(function($query) use ($price_max)
				{
					$query->where('price','<=',$price_max);
					$query->whereNull('sale_price');
				});
	        });
		}elseif($price_filter !=""){

			$product_query->where('sale_price','>=',$price_filter);
			$product_query->orWhere(function($query) use ($price_filter)
			{
				$query->where('price','>=',$price_filter);
				$query->whereNull('sale_price');
			});
		}

		# Filter by Dress Style
		if($request->dress_style && !empty($request->dress_style)){

			$product_query->whereHas('dress_styles', function($q) use($request) {
			    $q->whereIn('id', $request->dress_style);
			});
		}

		# Filter by Color
		if($request->color && !empty($request->color)){

			$product_query->whereHas('color_maps', function($q) use($request) {
			    $q->whereIn('id', $request->color);
			});
		}

		# Filter by Size
		if($request->size && !empty($request->size)){

			$product_query->whereHas('size_maps', function($q) use($request) {
			    $q->whereIn('id', $request->size);
			});
		}

		# Filter by Dress Length
		if($request->dress_length && !empty($request->dress_length)){

			$product_query->whereHas('dress_lengths', function($q) use($request) {
			    $q->whereIn('id', $request->dress_length);
			});
		}

		# Filter by Pattern
		if($request->pattern && !empty($request->pattern)){

			$product_query->whereHas('patterns', function($q) use($request) {
			    $q->whereIn('id', $request->pattern);
			});
		}

		# Filter by Pattern
		if($request->pattern && !empty($request->pattern)){

			$product_query->whereHas('patterns', function($q) use($request) {
			    $q->whereIn('id', $request->pattern);
			});
		}

		# Filter by Neckline
		if($request->neckline && !empty($request->neckline)){

			$product_query->whereHas('necklines', function($q) use($request) {
			    $q->whereIn('id', $request->neckline);
			});
		}

		# Filter by Sleeve Type
		if($request->sleeve_type && !empty($request->sleeve_type)){

			$product_query->whereHas('sleeve_types', function($q) use($request) {
			    $q->whereIn('id', $request->sleeve_type);
			});
		}

		# Filter by Embellishment
		if($request->embellishment && !empty($request->embellishment)){

			$product_query->whereHas('embellishments', function($q) use($request) {
			    $q->whereIn('id', $request->embellishment);
			});
		}


		# Filter by Material
		if($request->material && !empty($request->material)){

			$product_query->whereHas('materials', function($q) use($request) {
			    $q->whereIn('id', $request->material);
			});
		}


		# Filter by Sleeve Length
		if($request->sleeve_length && !empty($request->sleeve_length)){

			$product_query->whereHas('sleeve_lengths', function($q) use($request) {
			    $q->whereIn('id', $request->sleeve_length);
			});
		}


		# Filter by Fabric Type
		if($request->fabric_type && !empty($request->fabric_type)){

			$product_query->whereHas('fabric_types', function($q) use($request) {
			    $q->whereIn('id', $request->fabric_type);
			});
		}

		# Filter by Feature
		if($request->feature && !empty($request->feature)){

			$product_query->whereHas('features', function($q) use($request) {
			    $q->whereIn('id', $request->feature);
			});
		}


		# Filter by Feature
		if($request->feature && !empty($request->feature)){

			$product_query->whereHas('features', function($q) use($request) {
			    $q->whereIn('id', $request->feature);
			});
		}

		# Filter By Fit Type
		if($request->fit_type && !empty($request->fit_type)){

			$product_query->whereHas('fit_types', function($q) use($request) {
			    $q->whereIn('id', $request->fit_type);
			});
		}
		
		# Filter By Garment Care
		if($request->garment_care && !empty($request->garment_care)){

			$product_query->whereHas('garment_cares', function($q) use($request) {
			    $q->whereIn('id', $request->garment_care);
			});
		}

	

		# Filter By Occasion		
		if($request->occasion && !empty($request->occasion)){

			$product_query->whereHas('occasions', function($q) use($request) {
			    $q->whereIn('id', $request->occasion);
			});
		}

		# Filter By Season		
		if($request->season && !empty($request->season)){

			$product_query->whereHas('seasons', function($q) use($request) {
			    $q->whereIn('id', $request->season);
			});
		}

		# Filter By Theme		
		if($request->theme && !empty($request->theme)){

			$product_query->whereHas('themes', function($q) use($request) {
			    $q->whereIn('id', $request->theme);
			});
		}

		# Filter By Offer Type
		if($request->offer_type && !empty($request->offer_type)){

			$product_query->whereHas('offer_type', function($q) use($request) {
			    $q->whereIn('id', $request->offer_type);
			});
		}

		// $product_query->where('name2','like','%dress%')->whereNotNull('image');

		if($request->sort && $request->sort !=""){
		
			$sort_arr = explode('-',$request->sort);
			if($sort_arr[0] == "price"){
 
				$product_query->orderByRaw("CASE WHEN sale_price is null THEN price ELSE sale_price END ".$sort_arr[1]);
			}
		}else{
			// $product_query = $product_query->inRandomOrder();
		}
		
		$limit = $request->limit ? $request->limit : 10;

		$products= $product_query->paginate($limit);

		$all_counts = $all_count_query->where('parent_category_slug','women')->where('total_count','>',0)->orderBy('total_count','DESC')->get()->groupBy('count_type');

		$other_counts = AllCount::whereNull('parent_category_slug')->where('total_count','>',0)->orderBy('total_count','DESC')->get()->groupBy('count_type');

		$similar = Store::has('products')->where('status',"Completed")->inRandomOrder()->limit(4)->get();

		return view('products.stores_products', 
			[ 
				"products" => $products, 
				"show_filters" => true,
				"request_data" => (object)$request_data,
				"similar" => $similar,
				"selected" => $selected,
				'selected_id' => $selected_id,
				"other_counts" => $other_counts,
				"selected_sub1" => $selected_sub1, 
				"selected_store"=>$selected_store, 
				"all_counts"=> $all_counts,
				"page_title" => $title,
				"breadcrumbs" => $breadcrumbs,
				"store_filter" => $store_filter
			]
		);
		
	}


	public function  category_products(Request $request, $parent_category_slug="" , $category_slug="", $sub_category=''){

		$query = OurCategory::query();
		$categories_query = OurCategory::query();
		$all_count_query = AllCount::query();
		$product_query = Product::query();
		

		$offers = ['deal','coupon','promo','free-shipping','clearance','weekly-ad','todays-ad','sale','event','gift','student','referral','reward','cash-back','rebate','printable-coupon','seasonal','bogo','discount','new-arrival','unspecified','today-sale'];

		$is_store = Store::where('store_slug', $parent_category_slug)->count();

		if(in_array($parent_category_slug, $offers)){

			return $this->offer_products($request, $parent_category_slug);
		}elseif($is_store){
			
			return $this->stores_products($request, $parent_category_slug);
		}

		$all_counts = [];
		$categories = [];
		$our_category = [];
		
		$request_data =  $request->all();

		$checked = $request_data;
		$checked = array_keys($checked);

		
		$checked = array_diff( $checked,['sort']);

		$checked = array_diff( $checked,['page']);

		$checked = array_diff( $checked,['limit']);

		$checked = array_diff( $checked,['price_range']);


		$total_filters = count($checked);


		$form_url = $_SERVER['PATH_INFO'];

		$selected = "";
		$selected_id = "";
		$categories_query->selectRaw("id");
		$selected_sub1 = "";
		$show_filters = false;
		$pc = "";
		$title_2 = " - upto 70% off at Dress Ads";
		$title = "";
		$selected_parent_category = "";
		$selected_our_category = "";
		
		$breadcrumbs = [];
		$key = "";

		$key = "/shop";
		$breadcrumbs[$key] = "All Categories";

		$nature = "";

		if(Session::has('user')){

			$product_query->with('email_alerts', function($q){
			    $q->where('user_id', Session::get('user')->id);
			});

			$product_query->with('favourite_ads', function($q){
			    $q->where('user_id', Session::get('user')->id);
			});
		}

		$product_query->with('color_maps');
		
		if($parent_category_slug && $parent_category_slug !=""){
		
			$all_count_query->whereNotNull('parent_category_slug')->where('parent_category_slug',$parent_category_slug);
		
			$show_filters =true;

			$pc = ParentCategory::where("parent_category_slug", $parent_category_slug)->first();

			$query->where('parent_category_id', $pc->id);

			$categories_query->where('parent_category_id', $pc->id);
			
			$product_query->where('parent_category_id', $pc->id);

			$selected = $pc->parent_category_name;

			$nature = "parent_category_id";

			$selected_sub1 = $pc->parent_category_name;

			$selected_parent_category = $pc;

			$selected_id = $pc->id;
			
			$title = "Dresses for ".$pc->parent_category_name.$title_2;
			
			$key = "/shop/".$parent_category_slug;

			$breadcrumbs[$key] = $pc->parent_category_name."'s Dresses";

			$request_data['parent_category_slug'] = $pc->parent_category_slug;
		}


		if($category_slug && $category_slug !=""){
			
			$query->where('category_slug',trim($category_slug));

			$categories_query->where('category_slug',$category_slug);

			$our_category = $query->first();
	
			if($our_category){

				$product_query->where('our_category_id', $our_category->id);

				$selected = $our_category->category_name;

				$selected_our_category = $our_category;

				$selected_id = $our_category->id;

				$nature = "our_category_id";

				$title = $our_category->category_name." for ".$pc->parent_category_name." ".$title_2;

				$request_data['category_slug'] = $category_slug;
				
				$key = "/shop/".$parent_category_slug."-".$category_slug;

				if($sub_category && $sub_category !=""){
					$breadcrumbs[$key] = $pc->parent_category_name."'s' ".$our_category->category_name;			
				}else{
					$breadcrumbs[$key] = $our_category->category_name;		
				}

			}else{

				if($total_filters == 0){

					$form_url_arr = explode("/", $form_url);
					if(isset($form_url_arr[count($form_url_arr) - 1])){
						unset($form_url_arr[count($form_url_arr) - 1]);
					}
					$form_url = implode("/", $form_url_arr);
					

				}
			}
		}
		
		if($sub_category && $sub_category !=""){

			$query->where('category_slug', $request->sub_category);
			$categories_query->where('category_slug', $request->sub_category);
			$our_category = $query->first();
			if(isset($our_category->category_name)){
				$selected = $our_category->category_name;
				$nature = "our_category_id";
				$selected_id = $our_category->id;

				$request_data['sub_category'] = $request->sub_category;

				$key = "/shop/".$parent_category_slug."-".$category_slug.'-'.$sub_category;

				$breadcrumbs[$key] = $our_category->category_name;	
			}else{

				if($total_filters == 0){

					$form_url_arr = explode("/", $form_url);
					if(isset($form_url_arr[count($form_url_arr) - 1])){
						unset($form_url_arr[count($form_url_arr) - 1]);
					}
					$form_url = implode("/", $form_url_arr);

				}
			}
		}

		if($selected == ""){
			$selected = "All Categories";

		}

		
		$categories = $categories_query->get()->toArray();

		$sub_categories = [];
	
		if($our_category && isset($our_category->id)){

			// $products = Product::whereIn('our_category_id',$categories)->paginate(20);
			// $sub_categories = OurCategory::withCount('products')->where('parent_id',$our_category->id)->get();
		}

		$sub_categories = OurCategory::inRandomOrder()->limit(9)->get();
		
		
		
		#Store or Brand
		$stores = [];

		if(!empty($request->store) && !empty($request->brand)){
			$stores = array_merge($request->store, $request->brand);
		}elseif(!empty($request->store) && empty($request->brand)){
			$stores = $request->store;
		}elseif(empty($request->store) && !empty($request->brand)){
			$stores = $request->brand;
		}

		if(!empty($stores)){
			$product_query->whereIn('store_id', $stores);
		}


		# Price
		$price_max ="" ;
		$price_min = "";
		$price_filter = "";

		if($request->price_range && !empty($request->price_range) ){

			if($request->price_range == "1000+"){
				$price_filter = 1000;
			}else{
				$arr_range = explode("-", $request->price_range);
				$price_max = $arr_range[1];
				$price_min = $arr_range[0];
			}
		}elseif($request->min_price && !empty($request->min_price) && $request->max_price && !empty($request->max_price)){
			
			$price_max = $request->max_price;
			$price_min = $request->min_price;
		}

		if($price_max !="" && $price_min !=""){

			$product_query->where(function($query) use ($price_min)
	        {
	        	$query->where('sale_price','>=',$price_min);
				$query->orWhere(function($query) use ($price_min)
				{
					$query->where('price','>=',$price_min);
					$query->whereNull('sale_price');
				});
	        });

			$product_query->where(function($query) use ($price_max)
	        {
	        	$query->where('sale_price','<=',$price_max);
				$query->orWhere(function($query) use ($price_max)
				{
					$query->where('price','<=',$price_max);
					$query->whereNull('sale_price');
				});
	        });
		}elseif($price_filter !=""){

			$product_query->where('sale_price','>=',$price_filter);
			$product_query->orWhere(function($query) use ($price_filter)
			{
				$query->where('price','>=',$price_filter);
				$query->whereNull('sale_price');
			});
		}

		# Filter by Dress Style
		if($request->dress_style && !empty($request->dress_style)){

			$product_query->whereHas('dress_styles', function($q) use($request) {
			    $q->whereIn('id', $request->dress_style);
			});
		}

		# Filter by Color
		if($request->color && !empty($request->color)){

			$product_query->whereHas('color_maps', function($q) use($request) {
			    $q->whereIn('id', $request->color);
			});
		}

		# Filter by Size
		if($request->size && !empty($request->size) && !isset($request->size_type)){

			$product_query->whereHas('size_maps', function($q) use($request) {
			    $q->whereIn('id', $request->size);
			});

		}elseif($request->size && !empty($request->size) && isset($request->size_type)){

			$product_query->whereHas('size_maps', function($q) use($request) {
			    $q->whereIn('id', $request->size);
			    $q->orWhere('size_type', $request->size_type);
			});

		}elseif(!isset($request->size) && $request->size_type && !empty($request->size_type)){

			$product_query->whereHas('size_maps', function($q) use($request) {
			    $q->where('size_type', $request->size_type);
			});

		}



		# Filter by Dress Length
		if($request->dress_length && !empty($request->dress_length)){

			$product_query->whereHas('dress_lengths', function($q) use($request) {
			    $q->whereIn('id', $request->dress_length);
			});
		}

		# Filter by Pattern
		if($request->pattern && !empty($request->pattern)){

			$product_query->whereHas('patterns', function($q) use($request) {
			    $q->whereIn('id', $request->pattern);
			});
		}

		# Filter by Pattern
		if($request->pattern && !empty($request->pattern)){

			$product_query->whereHas('patterns', function($q) use($request) {
			    $q->whereIn('id', $request->pattern);
			});
		}

		# Filter by Neckline
		if($request->neckline && !empty($request->neckline)){

			$product_query->whereHas('necklines', function($q) use($request) {
			    $q->whereIn('id', $request->neckline);
			});
		}

		# Filter by Sleeve Type
		if($request->sleeve_type && !empty($request->sleeve_type)){

			$product_query->whereHas('sleeve_types', function($q) use($request) {
			    $q->whereIn('id', $request->sleeve_type);
			});
		}

		# Filter by Embellishment
		if($request->embellishment && !empty($request->embellishment)){

			$product_query->whereHas('embellishments', function($q) use($request) {
			    $q->whereIn('id', $request->embellishment);
			});
		}


		# Filter by Material
		if($request->material && !empty($request->material)){

			$product_query->whereHas('materials', function($q) use($request) {
			    $q->whereIn('id', $request->material);
			});
		}


		# Filter by Sleeve Length
		if($request->sleeve_length && !empty($request->sleeve_length)){

			$product_query->whereHas('sleeve_lengths', function($q) use($request) {
			    $q->whereIn('id', $request->sleeve_length);
			});
		}


		# Filter by Fabric Type
		if($request->fabric_type && !empty($request->fabric_type)){

			$product_query->whereHas('fabric_types', function($q) use($request) {
			    $q->whereIn('id', $request->fabric_type);
			});
		}

		# Filter by Feature
		if($request->feature && !empty($request->feature)){

			$product_query->whereHas('features', function($q) use($request) {
			    $q->whereIn('id', $request->feature);
			});
		}


		# Filter by Feature
		if($request->feature && !empty($request->feature)){

			$product_query->whereHas('features', function($q) use($request) {
			    $q->whereIn('id', $request->feature);
			});
		}

		# Filter By Fit Type
		if($request->fit_type && !empty($request->fit_type)){

			$product_query->whereHas('fit_types', function($q) use($request) {
			    $q->whereIn('id', $request->fit_type);
			});
		}
		
		# Filter By Garment Care
		if($request->garment_care && !empty($request->garment_care)){

			$product_query->whereHas('garment_cares', function($q) use($request) {
			    $q->whereIn('id', $request->garment_care);
			});
		}

		# Filter By Garment Care
		if($request->garment_care && !empty($request->garment_care)){

			$product_query->whereHas('garment_cares', function($q) use($request) {
			    $q->whereIn('id', $request->garment_care);
			});
		}

		# Filter By Occasion		
		if($request->occasion && !empty($request->occasion)){

			$product_query->whereHas('occasions', function($q) use($request) {
			    $q->whereIn('id', $request->occasion);
			});
		}

		# Filter By Season		
		if($request->season && !empty($request->season)){

			$product_query->whereHas('seasons', function($q) use($request) {
			    $q->whereIn('id', $request->season);
			});
		}

		# Filter By Theme		
		if($request->theme && !empty($request->theme)){

			$product_query->whereHas('themes', function($q) use($request) {
			    $q->whereIn('id', $request->theme);
			});
		}

		# Filter By Offer Type
		if($request->offer_type && !empty($request->offer_type)){

			$product_query->whereHas('offer_type', function($q) use($request) {
			    $q->whereIn('id', $request->offer_type);
			});
		}

		// $product_query->where('name2','like','%dress%')->whereNotNull('image');

		if($request->sort && $request->sort !=""){
		
			$sort_arr = explode('-',$request->sort);
			if($sort_arr[0] == "price"){
 
				$product_query->orderByRaw("CASE WHEN sale_price is null THEN price ELSE sale_price END ".$sort_arr[1]);
			}
		}else{
			// $product_query = $product_query->inRandomOrder();
		}
		
		$limit = $request->limit ? $request->limit : 10;

		$products= $product_query->paginate($limit);
		 

		$all_counts = $all_count_query->where('total_count','>',0)->orderBy('total_count','DESC')->get()->groupBy('count_type');

		$other_counts = AllCount::where('total_count','>',0)->whereNull('parent_category_slug')->orderBy('total_count','DESC')->get()->groupBy('count_type');
		

		

		$our_category = AllCount::where('count_type','parent_category')->where('count_slug',$parent_category_slug)->first();

		$our_categories = OurCategory::select('id')->where('parent_category_id',$our_category->count_id)->get()->toArray();

			
		$allowed_stores  = StoreCategory::select('store_id')->orWhereIn('our_category_id',$our_categories)->groupBy('store_id')->get()->toArray();
		
	


		return view('products.category_products', 
			[ 
				"our_category"=> $our_category, 
				"total_num_filters" => $total_filters,
				"products" => $products, 
				"sub_categories" => $sub_categories, 
				"selected"=>$selected, 
				"selected_id" => $selected_id,
				"nature" => $nature,
				"all_counts" => $all_counts,
				"other_counts" => $other_counts,
				"show_filters" => $show_filters,
				"selected_sub1" => $selected_sub1,
				"page_title" => $title,
				"breadcrumbs" => $breadcrumbs,
				"allowed_stores" => $allowed_stores,
				"request_data" => (Object)$request_data,
				"form_url" => $form_url,
				"selected_parent_category" => $selected_parent_category,
				"selected_our_category" => $selected_our_category
			]
		);
	}


	public function redirect_to(Request $request){

        $product = Product::with('store')->find($request->product_id);
        
        if(isset($product) && isset($product->id)){

            return view('redirect_to',['product' => $product,'link'=> $request->link]);
        }else{

            redirect('/home');
        }
    }

    public function  get_product_details_modal_content(Request $request){

        $product  = Product::with('store','parent_category','our_category')->find($request->id);

        $url = "detail";

        if($product && $product->parent_category && $product->parent_category!=""){
            $url.= "/".$product->parent_category->parent_category_slug;
        }

        if($product && $product->our_category && $product->our_category!=""){
            $url.= "/".$product->our_category->category_slug;
        }

        $url.="/".$product->product_slug.'-'.$product->id;

        return $html = view('contents.product_detail_content', ['url' => $url, 'product' => $product])->render();
    }


    public function  product_detail(Request $request){

       
        $id = "";
        $title = "";
        $breadcrumb = [];

        if($request->product_slug && $request->product_slug !="" && $request->parent_category_slug){

            $url = "/shop";
            $url2 = "";

            $arr = explode("-", $request->product_slug);
            isset($arr) && isset($arr[count($arr)-1]) ?
            $id = $arr[count($arr)-1] : "";

            if($id != ""){

                $product  = Product::with('store','parent_category','our_category')->find($id);

                if($request->parent_category_slug){
                    
                    $url .="/".$request->parent_category_slug;

                    $breadcrumb[$url] = $product->parent_category->parent_category_name;                 
                }


                if($request->our_category_slug){

                    $url .="/".$request->our_category_slug;
                    $breadcrumb[$url] = $product->our_category->category_name;
                }

                if($request->product_slug){
                  
                    $url2 =$_SERVER['PATH_INFO'];
                    $breadcrumb[$url2] = $product->name;
                    
                }

                $title = $product->name." at Dresses Ads";

                return view('products.detail', [ 
                    'title' => $title, 
                    'breadcrumbs' => $breadcrumb,
                    'product' => $product,
                    'url' => $_SERVER['REQUEST_URI']
                ]);

            }else{

                redirect_to('/shop/'.$url);
            }
        

        }else{

            redirect_to('/shop/men');
        }

    }


    public function get_product_comparison_modal_content(Request $request){

    	$product = Product::find($request->id);
    	
    	$products = Product::where('parent_category_id',$product->parent_category_id)->where('our_category_id',$product->our_category_id)->limit(100)->get();
    	
    	return $html = view('contents.product_comparison_content', [ 'products' => $products ])->render();
    }


    public function get_price_history_content(Request $request){

    	if($request->product_id){

    		$product_history = PriceHistory::where('product_id', $request->product_id)->orderBy('id','DESC')->limit(14)->get();
    		$product_name = Product::select('name')->find($request->product_id);
    		$lowest = [];
    		$highest = [];

    		$data = [];
    		$categories = [];
    		$highest = 0;
    		$highest_date = "";
    		$lowest = 0;
    		$lowest_date = "";
    		$price_today = "";

    		foreach($product_history as $history){

    			$price = $history->sale_price && $history->sale_price !="" && $history->sale_price > 0 ? $history->sale_price : $history->price;
    			
    			$date = isset($history->updated_at) && $history->updated_at !="" ? 
    				date('M d', strtotime($history->updated_at)) 
    			: 
    				date('M d', strtotime($history->created_at));


    			if($price_today == "" ){
    				$price_today = $price;
    			}

    			if($highest != 0 && $price >= $highest){

    				$highest = $price;
    				$highest_date = $date;
    			}else if($highest  == 0){
    				$highest = $price;
    				$highest_date = $date;
    			}

    			if($lowest != 0 && $price <= $lowest){
    				$lowest = $price;
    				$lowest_date = $date;
    			}else if($lowest == 0){
    				$lowest = $price;
    				$lowest_date = $date;
    			}

    			$categories[] = $date;
 
    			$data['price'][] = $history->price;

    			$data['sale_price'][] = $price;
    		}

    		$data['highest_price'] = $highest;
    		$data['highest_date'] = $highest_date;
    		$data['price_today'] = $price_today;
    		$data['lowest_date'] = $lowest_date;
    		$data['lowest_price'] = $lowest;
    		
    		return $html = view('contents.product_price_history_content', [ 'categories' => array_reverse($categories), 'data' => $data, "product_name" => $product_name,  ])->render();

    	}
    }
   

   	public function advance_search(Request $request){

   		$breadcrumbs = [];
   		$products = [];

   		$parent_categories = ParentCategory::get();

   		return view('products.advance_search',[

   			"products" => $products,
   			"parent_categories" => $parent_categories
   		]);
   	}


   	public function get_gender_filters(Request $request){

   		$all_count_query = AllCount::query();
   		
   		if($request->parent_category_id){

   			$all_count_query->whereNotNull('parent_category_slug')->where('parent_category_slug',$request->parent_category_id);
			
   		}


		$other_counts = AllCount::whereNull('parent_category_slug')->orderBy('total_count','DESC')->get()->groupBy('count_type');
   		

   		$all_counts = $all_count_query->where('total_count','>',0)->orderBy('total_count','DESC')->get()->groupBy('count_type');

   		if($all_counts){

   			return view('contents.advance_search_fields_content',[
   				"all_counts" => $all_counts,
   				"other_counts" => $other_counts
   			]);
   		}else{
   			return ("");
   		}
   	}

}