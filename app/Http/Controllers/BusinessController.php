<?php

namespace App\Http\Controllers;

use App\Models\ServiceStore;
use App\Models\StoreServiceReview;

use DB;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;

class BusinessController extends BaseController
{

    public function  businesses(Request $request){

        $title = "Business Nearby ";
        $request_data = [];

        if($request->search_address || $request->search_business){

            $request_data = $request->all();

            $query_search = ServiceStore::query();

          
            if($request->latitude && $request->latitude !="" && $request->longitude && $request->longitude !=""){

                $query_search->selectRaw("(
                   ST_Distance_Sphere(
                        point(longitude, latitude),
                        point(?, ?)
                    ) * .000621371192) as distance, service_stores.*
                ", [
                    $request->longitude,
                    $request->latitude,
                ]);

                $query_search->whereRaw("
                   ST_Distance_Sphere(
                        point(longitude, latitude),
                        point(?, ?)
                    ) * .000621371192 
                ", [
                    $request->longitude,
                    $request->latitude,
                ]);
            }

            if($request->search_business && $request->search_business !=""){
                
                $title = $request->search_business;
                $query_search->where(function ($query) use ($request){
                    $query->where('name','like', $request->search_business.'%');
                    $query->orWhere('categories','like', $request->search_business.'%');
                });
            }

            if($request->search_address && $request->search_address !="" && $request->search_address != "Using Current Location"){
                $title .= $request->search_address;
                $addresss= $request->search_address;
                
                if(strpos($addresss, ",")){
                    
                    $address = explode(',', $addresss);

                    $query_search->where('city','like',''.$address[0].'%');

                    $query_search->where('state','like',''.$address[1].'%');

                }else{

                     $query_search->where(function($query) use ($addresss){
                        $query->where('zip_code',$addresss)->orWhere('state',$addresss)->orWhere('city','like','%'.$addresss.'%')->orWhere('street_address','like','%'.$addresss.'%');
                      
                    });
                }

               
            }

            if($request->latitude && $request->latitude !="" && $request->longitude && $request->longitude !=""){

                $query_search->orderBy('distance',"DESC");
            }

           $businesses = $query_search->paginate(10);


            return view('businesses.businesses', [
                "page_title" => $title." | Ads Network",
                "businesses" => $businesses,
                "request_data" => (object)$request_data
            ]);

        }else{


            $businesses = ServiceStore::inRandomOrder()->paginate(10);

            
            return view('businesses.businesses', [
                "page_title" => $title." | Ads Network",
                "businesses" => $businesses,
                 "request_data" => (object)$request_data
            ]);

        }

    }


    public function ac_business_search(Request $request){


        $data = $request->all();
        
        if($data && isset($data['query']) && $data['query'] !=""){

            $results = ServiceStore::selectRaw('CONCAT(name)')->where('name','LIKE',$data['query'].'%')->limit(7)->get();

              $results = ServiceStore::select(DB::raw('(CASE WHEN name like "'.$data['query'].'%" 
            THEN name 
            WHEN categories like "'.$data['query'].'%" 
            THEN categories 
             
            ELSE "" END) AS 
            search_business'))->where('name','like',$data['query'].'%')->orWhere('categories','like',$data['query'].'%')->groupBy('search_business')->limit(20)->get();

            $results = $results->toArray();
           
            $data = [];
            foreach($results as $item) 
            {
                $data[] = $item['search_business'];
            }
             return response()->json($data);

        }elseif($data && isset($data['query_address']) && $data['query_address'] !=""){

            $results = ServiceStore::select(DB::raw('(CASE WHEN zip_code = "'.$data['query_address'].'" 
            THEN zip_code 
            WHEN state like "'.$data['query_address'].'%" 
            THEN state 
            WHEN city like "'.$data['query_address'].'%"
            THEN CONCAT(city,",",state) 
            WHEN street_address like "'.$data['query_address'].'%" 
            THEN street_address 
             
            ELSE "" END) AS 
            address'))->where('zip_code',$data['query_address'])->orWhere('state',$data['query_address'])->orWhere('city','like','%'.$data['query_address'].'%')->orWhere('street_address','like','%'.$data['query_address'].'%')->groupBy('address')->limit(20)->get();
            // $collection = collect($results);
            // $result = $collection->unique()->values()->all();
            $results = $results->toArray();
           
            $data = [];
            foreach($results as $res) 
            {
                $data[] = $res['address'];
            }
             return response()->json($data);
        }

    }

    public function save_review(Request $request){

        $validator = Validator::make($request->all(),[
           
            'user_rating' => 'required',
            'review_text' => 'required|min:10|max:500',
            'review_title' => 'required|min:3|max:40',
            
        ]);


        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator)->withInput();
        }

        if(!Session::has('user')){
            
            Session::flash('warning','Please <a href="/login"><b>Login</b></a> to post a review.');
            return redirect()->back()->withInput();

        }else{

            $already = StoreServiceReview::where('user_id',Session::get('user')->id)->where('service_store_id', $request->business_id)->count();

            if($already){

                Session::flash('main_warning','You have already reviewed this business.');
                return redirect()->back();
            }
        }

        $service_store_review = new StoreServiceReview();

        $service_store_review->rating = $request->user_rating;
        $service_store_review->user_id = Session::get('user')->id;
        $service_store_review->review_title = $request->review_title;
        $service_store_review->review_text = $request->review_text;
        $service_store_review->service_store_id = $request->business_id;

        switch ($request->user_rating) {

            case 1:
                $service_store_review->rating_text = "Terrible";
                break;
            case 2:
                $service_store_review->rating_text = "Poor";
                break;
            case 3:
                $service_store_review->rating_text = "Average";
                break;
            case 4:
                $service_store_review->rating_text = "Very Good";
                break;
            case 5:
                $service_store_review->rating_text = "Excellent";
                break;
        }   

        if($service_store_review->save()){

            $service_store = ServiceStore::find($request->business_id);

            $sum = StoreServiceReview::where('service_store_id', $request->business_id)->sum('rating');
            $total = StoreServiceReview::where('service_store_id', $request->business_id)->count();
            
            $avg = $sum/$total;
            $service_store->rating = round($avg, 1);
            $service_store->save();

            Session::flash('main_success','Review Saved!');
            return redirect()->back();
        }else{

            Session::flash('error','Unable to save review!');
            return redirect()->back();
        }     
    }


    public function business_details(Request $request)
    {   
        
        $page_title = "";
        if($request->business_id && $request->business_id !=""){

            $business = ServiceStore::with('store_service_reviews','store_service_reviews.replies','store_service_reviews.user')->where("service_store_slug",$request->business_id)->get();

            $reviews_counts = StoreServiceReview::selectRaw('rating_text,count(rating) as rating_count,avg(rating) as rating_avg')->where('service_store_id',$business[0]->id)->groupBy('rating_text')->get()->groupBy('rating_text');
           
            if($business && count($business->toArray())){

                $page_title = $business[0]->name.' '.$business[0]->street_address.', '.$business[0]->city.' '.$business[0]->zip_code.', '.$business[0]->state;

                return view('businesses.business_details',[
                    "page_title" => "Dress ".$page_title." | Ads Network",
                    'business' => $business,
                    'reviews_counts' => $reviews_counts
                ]);

            }else{
                return redirect('/businesses');
            }
        }else{
            return redirect('/businesses');
        }

        
    }

}