<?php

namespace App\Http\Controllers;

use App\Models\OurCategory;
use App\Models\ColorMap;
use App\Models\SizeMap;
use App\Models\Product;
use App\Models\Store;
use App\Models\StoreCategory;
use App\Models\AllCount;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;

class StoreController extends BaseController
{

	public function online_stores(Request $request){

		$online_stores = [];

		$alphas =  Store::selectRaw("LEFT(store_name, 1) as Alpha")->where('nature','Store')->groupBy('Alpha')->get();

		foreach($alphas as $alpha){
			
			$stores = AllCount::where('count_type','store')->whereRaw("count_name LIKE '".$alpha->Alpha."%'")->get();
			$online_stores[ucfirst($alpha->Alpha)] = $stores;
		}

		

		return view("stores.online_stores", [
			'online_stores' => $online_stores
		]);
	}


	public function  online_brands(Request $request){

		$online_brands = [];

		$alphas = Store::selectRaw("LEFT(store_name, 1) as Alpha")->where('nature','Brand')->groupBy('Alpha')->get();

		foreach($alphas as $alpha){

			$stores = AllCount::where('count_type','store')->whereRaw("count_name LIKE '".$alpha->Alpha."%'")->get();

			$online_brands[ucfirst($alpha->Alpha)] = $stores;
		}

		
		return view("stores.online_brands", ['online_brands' => $online_brands]);
	}


	public function  stores(Request $request){


		$stores = [];
		$our_category = [];

		if($request->parent_category_slug && $request->parent_category_slug !=""){
			
			$our_category = AllCount::where('count_type','parent_category')->where('count_slug',$request->parent_category_slug)->first();

			$our_categories = OurCategory::select('id')->where('parent_category_id',$our_category->count_id)->get()->toArray();

			
			$stores_array  = StoreCategory::select('store_id')->whereIn('our_category_id',$our_categories)->groupBy('store_id')->get()->toArray();

			$stores = AllCount::whereIn('count_id',$stores_array)->whereIn('count_type',['store','brand'])->get();


		}else{

			$our_category = AllCount::where('count_type','our_category')->where('count_id',$request->our_category_id)->first();

			$stores_array  = StoreCategory::select('store_id')->where('our_category_id',$request->our_category_id)->groupBy('store_id')->get()->toArray();


			$stores = AllCount::whereIn('count_id',$stores_array)->whereIn('count_type',['store','brand'])->get();

		}

		return view('stores.stores_list', ['our_category' => $our_category, 'stores_list' => $stores]);
	}

}