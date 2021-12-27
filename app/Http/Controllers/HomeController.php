<?php

namespace App\Http\Controllers;

use App\Models\OurCategory;
use App\Models\ParentCategory;
use App\Models\ColorMap;
use App\Models\SizeMap;
use App\Models\DressStyle;
use App\Models\FitType;
use App\Models\DressLength;
use App\Models\AllCount;
use App\Models\OfferType;
use App\Models\Neckline;
use App\Models\SleeveType;
use App\Models\Theme;
use App\Models\Feature;
use App\Models\Pattern;
use App\Models\FabricType;
use App\Models\Material;
use App\Models\Embellishment;
use App\Models\SleeveLength;
use App\Models\GarmentCare;
use App\Models\Occasion;
use App\Models\Season;
use App\Models\ServiceStore;

use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{

    public function test(Request $request){

        $service_stores = ServiceStore::whereNull('rating')->orWhere('rating','0')->limit(100)->get();
       
        $total = 0;
        // $payment_methods= [
        //     "Cash","Mastercard","VISA","American Express"
        // ];

        // $opening_closing = array(
        //     [
        //         "title" => "Monday",
        //         "duration" => "10:00am-6:00pm",
        //     ],
        //     [
        //         "title" => "Tuesday",
        //         "duration" => "10:00am-6:00pm",
        //     ],
        //     [
        //         "title" => "Wednesday",
        //         "duration" => "10:00am-6:00pm",
        //     ],
        //     [
        //         "title" => "Thursday",
        //         "duration" => "10:00am-6:00pm",
        //     ],
        //     [
        //         "title" => "Friday",
        //         "duration" => "10:00am-6:00pm",
        //     ],
        //     [
        //         "title" => "Saturday",
        //         "duration" => "10:00am-6:00pm",
        //     ],
        //     [
        //         "title" => "Sunday",
        //         "duration" => "10:00am-6:00pm",
        //     ]
        // );

        // $social_links = array(
        //     [
        //         "facebook" => "https://www.facebook.com" 
        //     ],
        //     [
        //         "twitter" => "https://www.twitter.com" 
        //     ]
        // );

        // $other_information = "
        //     Price Range : Average ";

       

        // $products_and_services = "Dresses For All Genders";

        foreach($service_stores as $service_store){

            //  $description = "Established ".($service_store->years_in_business == 0 ? "less than an year": $service_store->years_in_business."  years")." ago. ".$service_store->name." is a premium outdoor lifestyle brand that unites the best of cabin and city. Designed to inspire the world to experience everyday adventures with comfort and style, Roots product portfolio includes: clothing for women, men, kids, toddlers and babies including Roots world famous sweatpants; leather goods such as leather jackets, leather bags and leather wallets; as well as footwear and accessories. ";

            // $service_store->payment_methods = $payment_methods;
            // $service_store->opening_closing = $opening_closing;
            // $service_store->social_links = $social_links;
            // $service_store->other_information = $other_information;
            // $service_store->description = $description;
            // $service_store->products_and_services = $products_and_services;
            $service_store->rating = rand(1,5);
            $service_store->save();

            $total++;

        }

        echo "Total Slug Created: ".$total;
    }

    public function  home(Request $request){

        // $for_you_products = [];
        // $products_listings = [];

        // $for_you_query = Product::query();

        // $for_you_query->where("name", "LIKE", "%trouser%");
        // $for_you_products = $for_you_query->limit(10)->get();

       

        // $parent_categories = ParentCategory::whereNULL('main_category_id')->get();

        // foreach($parent_categories as $parent_category){

        //     $p_cat_data = [];

        //      $p_cat_data['parent_category'] = (object)$parent_category;    
            
            
        //     //Top Five Our Categories with Products
            
        //     $our_categories = OurCategory::where('parent_category_id',$parent_category->id)->limit(5)->get();
        //     $our_cat_data = [];

        //     foreach($our_categories as $category){

        //         $data_for_our_category = (object)$category;
        //         $product_our_category = Product::query();

        //         $product_our_category->where("name", "LIKE", "%trouser%");
        //         $our_category_products = $product_our_category->inRandomOrder()->limit(10)->get();

        //         $data_for_our_category['products'] =  (object)$our_category_products;

        //         $our_cat_data[] =  (object)$data_for_our_category;
        //     }

        //     $p_cat_data['our_categories'] =  (object)$our_cat_data;

        //     $products_listings[] =  (object)$p_cat_data;
        // }


        // //Top Brands 
        // $top_brands = Store::where('nature','Brand')->limit(25)->get();

        // return view('welcome',['for_you_products' => $for_you_products, 'products_listings' => (object)$products_listings, "top_brands" => $top_brands]);

        $all_counts = AllCount::get()->groupBy('count_type')->toArray();


        
        return view('welcome',['all_counts'=>$all_counts]);
    }
    
 	public function get_our_categories(Request $request){

    	$query = OurCategory::query();

    	if($request->parent_category && $request->parent_category !="all"){

    		$query->where('parent_category_name', $request->parent_category);
    	}

    	$categories = $query->get();
        $html = "";
    	foreach($categories as $category){

    		$html .= "<option value='$category->category_name'>$category->category_name</option>";
    	}
        $html .=  "<option value='all'>All</option>";
        
    	return $html;
    }


    public function get_colors(Request $request){

        $colors = ColorMap::query();
        
        if($request->store_id && $request->store_id !=""){

            $colors->where('store_id', $request->store_id);
        }

        $all_colors = $colors->get();

         $html = "";
        foreach($all_colors as $color){

            if($html == ""){ $html = "<div class='row'>";}
            $html.='<div class="col-md-4" style="min-width:max-content"><input type="checkbox" name="selected_colors[]" value="'.$color->id.'" ><span style="margin-left:2px">'.$color->color_name.'</span> </div> ';
        }

        if($html == ""){

            $html = "NOCOLOR";
        }else{
            $html.="</div>";
        }
        return $html;
    }

    
    public function get_sizes(Request $request){

        $sizes = SizeMap::query();
        
        if($request->store_id && $request->store_id !=""){

            $sizes->where('store_id', $request->store_id);
        }

        $all_sizes = $sizes->get();

         $html = "";

        foreach($all_sizes as $size){
            if($html == ""){ $html = "<div class='row'>";}
            $html.='<div class="col-md-4" style="min-width:max-content"><input type="checkbox" name="selected_sizes[]" value="'.$size->id.'" ><span style="margin-left:2px">'.$size->size_name.'</span> </div>';
       
        }

        if($html == ""){
            $html = "NOSIZE";
        }else{
            $html.="</div>";
        }
        return $html;

    }


    public function  create_lists(){

       $parent_categories = ParentCategory::with('our_categories', 'our_categories.sub_categories')->with('sub_parent_categories', 'sub_parent_categories.our_categories', 'sub_parent_categories.our_categories.sub_categories')->whereNULL('main_category_id')->get()->toArray();

       echo " <pre>";
         print_r(json_encode($parent_categories));
       echo "</pre>";


       exit;
    }


    public function create_slugs(){


        echo "Slug Creation<br/>";
        echo "=============<br/>";
            
         # Our Stores Slugs
        $total_stores = 0;

        $all_stores = Store::get();
        foreach($all_stores as $store){

            $store->store_slug = Str::slug($store->store_name);

            if( $store->save()){
                $total_stores++;
            }
        }

        echo "OfferType :".$total_stores."<br/>";

        // # Our Categories Slugs
        // $total_our_categories = 0;

        // $all_our_categories = OurCategory::get();
        // foreach($all_our_categories as $cat){

        //     $cat->category_slug = Str::slug($cat->category_name);

        //    if( $cat->save()){

        //     $total_our_categories++;
        //    }
        // }


       

        // #Parent Categories Slug
        // $total_parent_categories = 0;

        // $all_parent_categories = ParentCategory::get();
        // foreach($all_parent_categories as $cat){

        //     $cat->parent_category_slug = Str::slug($cat->parent_category_name);

        //    if( $cat->save()){

        //     $total_parent_categories++;
        //    }
        // }


        // echo "Parent Category :".$total_parent_categories."<br/>";


        // #Product Slug
        // $total_products = 0;

        // $all_products = Product::get();
        // foreach($all_products as $product){

        //     $product->product_slug = Str::slug($product->name);

        //    if( $product->save()){

        //     $total_products++;
        //    }
        // }


        // echo "Product Category :".$total_products."<br/>";
        


          # Our Categories Slugs
        // $total_offer_types = 0;

        // $all_offer_types = OfferType::get();
        // foreach($all_offer_types as $offer){

        //     $offer->offer_type_slug = Str::slug($offer->offer_type_name);

        //    if( $offer->save()){

        //     $total_offer_types++;
        //    }
        // }


        // echo "OfferType :".$total_offer_types."<br/>";

        exit;

    }

    public function create_filter_modal_content(Request $request){



        $show_filters = false;

        $all_count_query = AllCount::query();

      
        $request_data = $request->request_data;

        if(isset($request_data['parent_category_slug']) && $request_data['parent_category_slug'] !=""){

            $show_filters =true;
            $all_count_query->whereNotNull('parent_category_slug')->where('parent_category_slug',$request_data['parent_category_slug']);

        }

  
        $all_counts = $all_count_query->orderBy('total_count','DESC')->get()->groupBy('count_type');

        $other_counts = AllCount::whereNull('parent_category_slug')->orderBy('total_count','DESC')->get()->groupBy('count_type');


       
        $html = ' <div class="tab-content" id="tab-content" >';
        $html_tabs = '<ul class="nav nav-tabs">';

        $active = false;
                
                // 
             


        
        if(!empty($other_counts['brand'])){
            
                      
           $html_tabs.='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-brands">Brands</a></li>';

            $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-brands">';

              $active = true;

            foreach($other_counts['brand'] as $brand){
                
                $checked = isset($request_data['brand']) &&   in_array($brand->count_id, $request_data['brand']) ? 'checked="checked"' : "";
                
                $disabled = $brand->total_count <1 ? "disabled" : "";

                $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                            <input '.$disabled.' name="brand[]"  type="checkbox" id="checkboxSuccess" value="'.$brand->count_id.'" '.$checked.'>
                            '.$brand->count_name.' ('.$brand->total_count.') </label>';
            }

            $html .='</div>';
        }

        

       if(!empty($other_counts['store'])){
            
             $html_tabs.='  <li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-online-stores">Online Stores</a></li>';
            
            $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-online-stores">';
            
            $active =true;

            foreach($other_counts['store'] as $store){
                
                $checked = isset($request_data['store']) &&  in_array($store->count_id, $request_data['store']) ? 'checked="checked"' : "";

                $disabled = $store->total_count <1 ? "disabled" : "";

                $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                            <input '.$disabled.' type="checkbox" name="store[]" id="checkboxSuccess" value="'.$store->count_id.'" '.$checked.'>
                            '.$store->count_name.' ('.$store->total_count.') </label>';
                    
            }
            $html.='</div>';
        }

        if(!empty($other_counts['color_map'])){

            $html_tabs.=' <li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-colors">Color</a></li>';

            $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-colors">';

            $active = true;
            foreach($other_counts['color_map'] as $color){

                $checked = isset($request_data['color']) &&  ((is_array($request_data['color']) && in_array($color->count_id, $request_data['color'])) || $request_data['color'] == $color->count_name ) ? 'checked="checked"' : "";

                $disabled = $color->total_count <1 ? "disabled" : "";

                $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                            <input name="color[]" '.$disabled.' type="checkbox" id="checkboxSuccess" value="'.$color->count_id.'" '.$checked.'>
                            '.$color->count_name.' ('.$color->total_count.') </label>';
                    
            }
            $html.='</div>';
        }

        if(!empty($other_counts['size_map'])){

            $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-sizes">';
            $html_tabs.='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-sizes">Size</a></li>';
            
            $active = true;

            foreach($other_counts['size_map'] as $size){
                
                $checked = isset($request_data['size']) && (( is_array($request_data['size']) &&  in_array($size->count_name, $request_data['size'])) || $request_data['size'] == $size->count_name) ? 'checked="checked"' : "";

                $disabled = $size->total_count <1 ? "disabled" : "";

                $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                            <input name="size[]" '.$disabled.' type="checkbox" id="checkboxSuccess" value="'.$size->count_id.'" '.$checked.'>
                            '.$size->count_name.' ('.$size->total_count.') </label>';
                    
            }
            $html.='</div>';
        }

         if(!empty($other_counts['offer_type'])){

            
            $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-offer_type">';
            $html_tabs.='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-offer_type">Special Offers</a></li>';
            
            $active = true;

            foreach($other_counts['offer_type'] as $offer_type){
                
                $checked = isset($request_data['offer_type']) && (( is_array($request_data['offer_type']) &&  in_array($offer_type->count_id, $request_data['offer_type'])) || $request_data['offer_type'] == $offer_type->count_id) ? 'checked="checked"' : "";

                $disabled = $offer_type->total_count <1 ? "disabled" : "";

                $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                            <input name="offer_type[]" '.$disabled.' type="checkbox" id="checkboxSuccess" value="'.$offer_type->count_id.'" '.$checked.'>
                            '.$offer_type->count_name.' ('.$offer_type->total_count.') </label>';
                    
            }
            $html.='</div>';
        }


        if($show_filters){

            if(!empty($all_counts['material'])){
            
                $html_tabs .='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-materials">Material</a></li>';

                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-materials">';

                $active = true;

                foreach($all_counts['material'] as $material){
                   
                    $checked = isset($request_data['material']) &&  in_array($material->count_id, $request_data['material']) ? 'checked="checked"' : "";

                    $disabled = $material->total_count <1 ? "disabled" : "";
                    
                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;"> <input '.$disabled.' name="material[]" type="checkbox" id="checkboxSuccess" value="'.$material->count_id.'" '.$checked.'> '.$material->count_name.' ('.$material->total_count.') </label>';
                        
                }
                $html.='</div>';
            }


            if(!empty($all_counts['pattern'])){

                $html_tabs.='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-pattern">Pattern</a></li>';

                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-pattern">';

                $active = true;

                foreach($all_counts['pattern'] as $pattern){

                    $checked = isset($request_data['pattern']) &&  in_array($pattern->count_id, $request_data['pattern']) ? 'checked="checked"' : "";
                    
                    $disabled = $pattern->total_count <1 ? "disabled" : "";

                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">  <input '.$disabled.' name="pattern[]" type="checkbox" id="checkboxSuccess" value="'.$pattern->count_id.'" '.$checked.'>  '.$pattern->count_name.' ('.$pattern->total_count.') </label>';
                        
                }
                $html.='</div>';
            }

            if(!empty($all_counts['dress_length'])){

                $html_tabs .='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-dress-length">Dress Length</a></li>';

                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-dress-length">';

                $active = true;

                foreach($all_counts['dress_length'] as $dress_length){
                    
                    $checked = isset($request_data['dress_length']) &&  in_array($dress_length->count_id, $request_data['dress_length']) ? 'checked="checked"' : "";
                    
                    $disabled = $dress_length->total_count <1 ? "disabled" : "";

                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;"> <input '.$disabled.' name="dress_length[]" type="checkbox" id="checkboxSuccess" value="'.$dress_length->count_id.'" '.$checked.'> '.$dress_length->count_name.' ('.$dress_length->total_count.') </label>';
                }
                $html.='</div>';
            }


            if(!empty($all_counts['dress_style'])){

                $html_tabs .='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-dress-style">Dress Style</a></li>';

                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-dress-style">';

                $active = true;

                foreach($all_counts['dress_style'] as $dress_style){
                    
                    $checked = isset($request_data['dress_style']) &&  in_array($dress_style->count_id, $request_data['dress_style']) ? 'checked="checked"' : "";
                    
                    $disabled = $dress_style->total_count <1 ? "disabled" : "";

                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;"> <input '.$disabled.' name="dress_style[]" type="checkbox" id="checkboxSuccess" value="'.$dress_style->count_id.'" '.$checked.'> '.$dress_style->count_name.' ('.$dress_style->total_count.') </label>';
                }
                $html.='</div>';
            }


            if(!empty($all_counts['sleeve_length'])){

                $html_tabs .='  <li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-sleeve-length">Sleeve Length</a></li>';
                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-sleeve-length">';
                
                $active = true;
                foreach($all_counts['sleeve_length'] as $sleeve_length){
                    
                    $checked = isset($request_data['sleeve_length']) &&  in_array($sleeve_length->count_id, $request_data['sleeve_length']) ? 'checked="checked"' : "";
                    
                    $disabled = $sleeve_length->total_count <1 ? "disabled" : "";

                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;"> <input '.$disabled.' name="sleeve_length[]" type="checkbox" id="checkboxSuccess" value="'.$sleeve_length->count_id.'" '.$checked.'> '.$sleeve_length->count_name.' ('.$sleeve_length->total_count.') </label>';
                }
                $html.='</div>';
            }

            if(!empty($all_counts['sleeve_type'])){

                $html_tabs .='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-sleeve-type">Sleeve Type</a></li>';
                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-sleeve-type">';
                $active =true;
                foreach($all_counts['sleeve_type'] as $sleeve_type){
                    
                    $checked = isset($request_data['sleeve_type']) &&  in_array($sleeve_type->count_id, $request_data['sleeve_type']) ? 'checked="checked"' : "";

                    $disabled = $sleeve_type->total_count <1 ? "disabled" : "";
                    
                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;"> <input '.$disabled.' name="sleeve_type[]" type="checkbox" id="checkboxSuccess" value="'.$sleeve_type->count_id.'" '.$checked.'> '.$sleeve_type->count_name.' ('.$sleeve_type->total_count.') </label>';
                        
                }
                $html.='</div>';
            }

            if(!empty($all_counts['fabric_type'])){

                $html_tabs.='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-fabric-type">Fabric Type</a></li>';
                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-fabric-type">';

                $active = true;
                foreach($all_counts['fabric_type'] as $fabric_type){
                    
                    $checked = isset($request_data['fabric_type']) &&  in_array($fabric_type->count_id, $request_data['fabric_type']) ? 'checked="checked"' : "";
                    
                    $disabled = $fabric_type->total_count <1 ? "disabled" : "";

                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">  <input '.$disabled.' name="fabric_type[]" type="checkbox" id="checkboxSuccess" value="'.$fabric_type->count_id.'" '.$checked.'> '.$fabric_type->count_name.' ('.$fabric_type->total_count.') </label>';
                        
                }
                $html.='</div>';
            }

            if(!empty($all_counts['feature'])){

                $html_tabs .='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-feature">Feature</a></li>';
                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-feature">';
                $active  = true;
                foreach($all_counts['feature'] as $feature){
                    
                    $checked = isset($request_data['feature']) &&  in_array($feature->count_id, $request_data['feature']) ? 'checked="checked"' : "";
                    
                    $disabled = $feature->total_count <1 ? "disabled" : "";

                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;"> <input '.$disabled.' type="checkbox" name="feature[]" id="checkboxSuccess" value="'.$feature->count_id.'" '.$checked.'> '.$feature->count_name.' ('.$feature->total_count.') </label>';
                        
                }
                $html.='</div>';
            }


            if(!empty($all_counts['fit_type'])){

                $html_tabs.='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-fit-type">Fit Type</a></li>';

                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-fit-type">';
                $active = true;
                foreach($all_counts['fit_type'] as $fit_type){

                    $checked = isset($request_data['fit_type']) &&  in_array($fit_type->count_id, $request_data['fit_type']) ? 'checked="checked"' : "";
                    
                    $disabled = $fit_type->total_count <1 ? "disabled" : "";
                    
                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;"> <input '.$disabled.' name="fit_type[]" type="checkbox" id="checkboxSuccess" value="'.$fit_type->count_id.'"'.$checked.'> '.$fit_type->count_name.' ('.$fit_type->total_count.') </label>';
                        
                }
                $html.='</div>';
            }


       
            if(!empty($all_counts['neckline'])){

                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-neckline">';
                $html_tabs .=' <li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-neckline">Neckline</a></li>';
                $active =true;
                foreach($all_counts['neckline'] as $neckline){
                    
                    $checked = isset($request_data['neckline']) &&  in_array($neckline->count_id, $request_data['neckline']) ? 'checked="checked"' : "";

                    $disabled = $neckline->total_count <1 ? "disabled" : "";
                   
                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                                <input '.$disabled.' name="neckline[]" type="checkbox" id="checkboxSuccess" value="'.$neckline->count_id.'" '.$checked.'>
                                '.$neckline->count_name.' ('.$neckline->total_count.') </label>';
                        
                }
                $html.='</div>';
            }

            if(!empty($all_counts['occasion'])){

                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-occasion">';
                $html_tabs .='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-occasion">Occasion</a></li>';
                $active = true;
                foreach($all_counts['occasion'] as $occasion){
                    
                    $checked = isset($request_data['occasion']) &&  in_array($occasion->count_id, $request_data['occasion']) ? 'checked="checked"' : "";

                    $disabled = $occasion->total_count <1 ? "disabled" : "";
                   
                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                                <input name="occasion[]" '.$disabled.' type="checkbox" id="checkboxSuccess" value="'.$occasion->count_id.'"  '.$checked.'>
                                '.$occasion->count_name.' ('.$occasion->total_count.') </label>';
                        
                }
                $html.='</div>';
            }

          
            if(!empty($all_counts['theme'])){
                
                $html_tabs .='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-themes">Themes</a></li>';
                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-themes">';
                $active =true;
                foreach($all_counts['theme'] as $theme){
                    
                    $checked = isset($request_data['theme']) &&  in_array($theme->count_id, $request_data['theme']) ? 'checked="checked"' : "";

                    $disabled = $theme->total_count <1 ? "disabled" : "";
                   
                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                                <input name="theme[]" '.$disabled.' type="checkbox" id="checkboxSuccess" value="'.$theme->count_id.'" '.$checked.'>
                                '.$theme->count_name.' ('.$theme->total_count.') </label>';
                        
                }
                $html.='</div>';
            }

            if(!empty($all_counts['character'])){
                
                $html_tabs .='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-characters">Character</a></li>';
                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-characters">';
                $active =true;
                foreach($all_counts['character'] as $character){
                    
                    $checked = isset($request_data['character']) &&  in_array($character->count_id, $request_data['character']) ? 'checked="checked"' : "";

                    $disabled = $character->total_count <1 ? "disabled" : "";
                   
                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                                <input name="character[]" '.$disabled.' type="checkbox" id="checkboxSuccess" value="'.$character->count_id.'" '.$checked.'>
                                '.$character->count_name.' ('.$character->total_count.') </label>';
                        
                }
                $html.='</div>';
            }

            // $offer_types = OfferType::get();

            if(!empty($all_counts['offer_type'])){
                
                $html_tabs .='<li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-specail-offers">Special Offers</a></li>';
                $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-specail-offers">';
                $active = true;

                foreach($all_counts['offer_type'] as $offer_type){
                    
                    $checked = isset($request_data['offer_type']) &&  in_array($offer_type->count_id, $request_data['offer_type']) ? "checked='checked'" : "";

                    $disabled = $offer_type->total_count <1 ? "disabled" : "";
                   
                    $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                        <input '.$disabled.' name="offer_type[]" type="checkbox" id="checkboxSuccess" value="'.$offer_type->count_name.'" '.$checked.'>'.$offer_type->count_name.' ('.$offer_type->total_count.')   </label>';
                }

                $html.='</div>';
            }

           

        }

         if(!empty($other_counts['season'])){

            $html_tabs.=' <li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-season">Season</a></li>';

            $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-season">';

            $active = true;
            foreach($other_counts['season'] as $season){

                $checked = isset($request_data['season']) &&  ((is_array($request_data['season']) && in_array($season->count_id, $request_data['season'])) || $request_data['season'] == $season->count_name ) ? 'checked="checked"' : "";

                $disabled = $season->total_count <1 ? "disabled" : "";

                $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                            <input name="season[]" '.$disabled.' type="checkbox" id="checkboxSuccess" value="'.$season->count_id.'" '.$checked.'>
                            '.$season->count_name.' ('.$season->total_count.') </label>';
                    
            }
            $html.='</div>';
        }

         if(!empty($other_counts['garment_care'])){

            $html_tabs.=' <li class="'.(!$active ? 'active':'').'"><a data-toggle="tab" href="#tab-garment_care">Garment Care</a></li>';

            $html .='<div class="tab-pane '.(!$active ? 'active':'').' row" id="tab-garment_care">';

            $active = true;
            foreach($other_counts['garment_care'] as $garment_care){

                $checked = isset($request_data['garment_care']) &&  ((is_array($request_data['garment_care']) && in_array($garment_care->count_id, $request_data['garment_care'])) || $request_data['garment_care'] == $garment_care->count_name ) ? 'checked="checked"' : "";

                $disabled = $garment_care->total_count <1 ? "disabled" : "";

                $html.='<label class="checkbox-inline col-md-2" style="margin-left: 10px;">
                            <input name="garment_care[]" '.$disabled.' type="checkbox" id="checkboxSuccess" value="'.$garment_care->count_id.'" '.$checked.'>
                            '.$garment_care->count_name.' ('.$garment_care->total_count.') </label>';
                    
            }
            $html.='</div>';
        }
        
        $html.=' </div>';

        $html_tabs.=" </ul>";
        
        $html = $html_tabs.$html;
   
        return $html;
    }


    public function site_map(Request $request)
    {

        $categories_counts = [];
        $categories_counts= AllCount::whereNotNull('parent_category_slug')->where('count_type','our_category')->get()->groupBy('parent_category_slug')->toArray();
       
        return view('site_map',['categories_counts' => $categories_counts]);
    }
    

    
}