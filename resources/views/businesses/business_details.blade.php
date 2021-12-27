@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/business__styles/business__details__styles.css')}}">
<link href="{{asset('bootstrap-star-rating-master/themes/krajee-svg/theme.css')}}" media="all" rel="stylesheet" type="text/css" />
<link href="{{asset('bootstrap-star-rating-master/css/star-rating.min.css')}}" media="all" rel="stylesheet" type="text/css" />


<script src="{{asset('bootstrap-star-rating-master/js/star-rating.min.js')}}" type="text/javascript"></script>
<script src="{{asset('bootstrap-star-rating-master/themes/krajee-svg/theme.js')}}" type="text/javascript"></script>

<style>
.side {
  float: left;
  width: 15%;
  margin-top: 10px;
}

.middle {
  float: left;
  width: 70%;
  margin-top: 10px;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}


/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  /* Hide the right column on small screens */
 
}
</style>

<?php 
    $opening_closing = [];
    if(isset($business[0]->opening_closing) && $business[0]->opening_closing !=""){
        $opening_closing = json_decode($business[0]->opening_closing);
    }
    $date = time();

    $day = date("l",strtotime($date));    
    
    $opening_today = false;
    $closing_today = false;
    foreach($opening_closing as $oc){

        if($oc->title == $day || $oc == "Open"){
            $today_opening_closing = $oc;

            break;
        }
    }
?>
<div class="business__detail_page__body">

    @if(isset($business[0]->name))
    
    <div class="product__detail_top_section">
        @if(Session::has('main_success'))
            <br/>
              <p class="alert alert-success alert-dismissible" role="alert">{!! Session::get('main_success') !!} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button></p>
        @endif
        @if(Session::has('main_warning'))
              <br/>
              <p class="alert alert-warning alert-dismissible" role="alert">{!! Session::get('main_warning') !!} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button></p>
        @endif
        <div class="row pd__r1">
                                                        <!-- Logo -->
            <div class="col-lg-2 col-md-2 col-sm-5 pd__logo__container d-flex justify-content-end align-items-center">
                    <div class="product__logo">
                        <img src="http:{{$business[0]->image_url}}" alt="" style="width:100%; height:100%;">
                    </div>
            </div>

            <div class="col-lg-10 col-md-10 col-sm-7">
                <div class="row">

                    <div class="col-lg-9 col-md-8 col-sm-5 product__detail__col1 ">

                        <div class="product__details__upper_sec">
                            <div class="product__title pb-3">
                                <span>{{$business[0]->name}}</span>
                            </div>

                            <div class="product__store_title">
                                <span>
                                    <a href="{{route('businesses')}}?search_business={{$business[0]->categories}}">
                                    {{$business[0]->categories}}
                                </a>
                                </span>
                            </div>

                            <div class="product__address d-flex justify-content-start align-items-center">
                                <p class="address__info m-0">
                                    {{$business[0]->street_address}},<br/> {{$business[0]->city}}, {{$business[0]->state}} {{$business[0]->zip_code}}
                                    <?php  

                                        $address = $business[0]->name.' '.$business[0]->street_address.', '.$business[0]->city.', '.$business[0]->state.' '.$business[0]->zip_code;
                                        $address = str_replace(" ", "+", $address);

                                        $latitude = $business[0]->latitude ? $business[0]->latitude : "33.56950";
                                        $longitude = $business[0]->longitude ? $business[0]->longitude : "73.1405";

                                        $cords = $latitude.','.$longitude;
                                    ?>
                                </p>
                                @if( $address  &&  $address!="" && $cords && $cords !="")
                                    <a href="https://www.google.es/maps/dir/Current+Location/{{$cords}}/@17.6z" target="_blank" class="product__link ">
                                       <br/> Get Directions >>    
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="product__details__lower d-flex justify-content-start align-items-center flex-wrap">
                            
                            <!-- phone number  -->
                            @if(isset($business[0]->phone))
                                <a href="tel:{{$business[0]->phone}}" class="product__info__btn d-flex justify-content-between align-items-center m-2">
                                    <i class="fas fa-phone px-2"></i>
                                    <span>{{$business[0]->phone}}</span>
                                </a>
                            @endif           

                            <!-- message  -->
                            @if(isset($business[0]->email) && $business[0]->email !="")
                                <a href="mailto:{{$business[0]->email}}" class="product__info__btn d-flex justify-content-between align-items-center m-2">
                                    <i class="fas fa-envelope px-2 "></i>
                                    <span>Message</span>
                                </a>
                            @endif
                            
                            @if( $address  &&  $address!="" && $cords && $cords !="")
                                <!-- direction  -->
                                <a href="https://www.google.com/maps/search/{{$address}}/@{{$cords}}/data=!4m8!1m2!3m1!2s" target="_blank" class="product__info__btn d-flex justify-content-between align-items-center m-2">
                                <i class="fas fa-map-marker-alt px-2 "></i>
                                    <span>Location</span>
                                </a>
                            @endif 
                            
                            @if($business[0]->website && $business[0]->website !="")
                                <!-- website  -->
                                <a href="{{$business[0]->website}}" class="product__info__btn d-flex justify-content-between align-items-center m-2" target="_blank">
                                    <i class="fas fa-link px-2 "></i>
                                    <span>Website</span>
                                </a>
                            @endif

                           
                        </div>


                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-7 product__detail__col2 d-flex justify-content-end align-items-end pb-2">

                        <div class="product__details__shopping d-flex flex-column justify-content-end align-items-end">

                            <div class="rating_section d-flex justify-content-end align-items-center">

                                <input id="star-rating-rtl"  value="{{$business[0]->rating}}" disabled="true" title="{{$business[0]->rating." rating"}}" type="number" class="rating" data-show-clear="false" data-show-caption="false"  min=0 max=5 step=0.1 data-rtl=0 data-container-class='text-right' data-glyphicon=0>


                            </div>
                           
                            <a href="#reviews" class="m-0 read__review">Read All Reviews >></a>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

           

            <!-- details and descriptions section  -->
        <div class="product__description__section my-5">
            <div class="row">
                                    <!-- DESCRIPTION  -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h3 class="pb-2">Details & Description</h3>
                    <p id="description">
                        @if($business[0]->description)
                            {{$business[0]->description}}
                        @endif
                    </p>
                    @if(isset($business[0]->products_and_services) && $business[0]->products_and_services !="")
                    <h5 class="pt-4 ">Products and Services</h5>
                    @endif
                    <div class="w-50"> <hr></div>
                    <p>{{$business[0]->products_and_services}}</p>

                    <h2 class="pt-4">Useful Information</h2>
                    <h4 class="py-2">Opening Hours</h4>
                    <div class="w-50"> <hr></div>

                    <div class="opening__hours__timing " id ="openingTiming" >
                        <table class="table table-striped ">

                            
                            @if(is_array($opening_closing) && count($opening_closing)>0)

                             @if($today_opening_closing)
                                <tbody id="tableBody1">
                                    <tr class=""onclick="showBody2()" style="font-weight: bold">
                                        <th scope="col" class="topDay">
                                            {{$today_opening_closing->title}}
                                        </th>
                                        <td scope="col" >
                                            {{$today_opening_closing->duration}} 
                                        <i class="fas fa-angle-down pl-3"></i></td>
                                    </tr>
                                </tbody>
                            @endif

                                <tbody id ="tableBody2" class="hideBody" >

                                    @foreach($opening_closing as $oc)
                                        <?php $font_weight = "normal"; ?>
                                        @if($oc->title == $today_opening_closing->title)
                                            <?php 
                                            $font_weight = "bold";
                                            ?>
                                        @endif
                                        <tr class="" onclick="showBody2()" >
                                            <th scope="col" class="topDay" 
                                                style="font-weight: {{$font_weight}} !important"
                                            >{{$oc->title}}</th>
                                            <td scope="col"class="topDayTime" 
                                            
                                            style="font-weight: {{$font_weight}} !important"

                                            >{{$oc->duration}} <i class="fas fa-angle-down pl-3"></i></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            @endif

                        </table>
                    </div>

                                <!-- rates and payment method section  -->
                    <div class="row mt-5">
                         
                        <!-- Other Information  -->
                        @if(isset($business[0]->other_information ))
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2>Other Information</h2>
                                <div class="w-100"> <hr></div>
                                <p class="rate__price" id="rates">
                                    {{$business[0]->other_information}}
                                </p>
                            </div>
                        @endif

                        @if(isset($business[0]->payment_methods) && $business[0]->payment_methods !="")
                            <!-- payment method  -->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                           
                                <h2>Methods of Payment:</h2>
                                <div class="w-100"> <hr></div>
                                <div class="d-flex justify-content-start align-items-center">
                                    
                                    <?php
                                        $payment_methods = json_decode($business[0]->payment_methods); 
                                        if(is_array($payment_methods)){
                                            echo implode(', ', $payment_methods);
                                        }else{
                                            echo ($payment_methods);   
                                        }
                                        
                                    ?>
                                </div>

                            </div>
                        @endif
                        
                        <!-- social media  -->
                        @if(isset($business[0]->social_links) && $business[0]->social_links !="")                                                   
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                           
                                <h2>Social Media</h2>
                                <div class="w-100"> <hr></div>
                                <div class="d-flex justify-content-start align-items-center">
                                    
                                    <?php 
                                        $social_links = json_decode($business[0]->social_links);
                                    ?>  
                                    @if(is_array($social_links))
                                        @foreach($social_links as $item)
                                            @foreach($item as $key=>$value)
                                                <div class="payment__icons mr-4" data-toggle="tooltip" data-placement="top" title="{{$key}}">
                                                    <a href="{{$value}}"   target="_blank" style="width:100%;height:100%;">
                                                        <img src="/image/icons/{{$key}}.png" alt="" style="width:100%;height:100%;">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    @endif

                                </div>

                            </div>
                        @endif
                    </div>

                </div>
                                    <!-- LOCATION  -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h2>Location</h2>
                    
                    <div class="googleMap " id ="map1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799160891!2d-74.25987584510595!3d40.69767006338158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1638856968352!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- rating and reviews section  -->
        <div class="lower__section" id="reviews">
            <div class="rating__reviews__section1 d-flex justify-content-center align-items-center flex-wrap">

            </div>
            <div class="rating__reviews__section2">

                <div class="row w-100">

                    <div class="col-lg-9 col-md-8 col-sm-12 business__rating">

                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Ratings & Reviews - {{$business[0]->name}}</h2>
                                <!-- Button trigger modal -->
                           <button 
                                type="button" 
                                class="modal__open" 
                                onclick="reviewModal()">
                                Write A Review
                            </button>

                        </div>

                                <!-- rate it  -->
                        <div class="d-flex flex-column justify-content-center align-items-center rate__it">

                            <h3 id="ratting__title">How would you rate this business?</h3>
                            <div class="w-100"> <hr></div>
                            <div class="d-flex justify-content-center align-items-center rating__stars">
                                  <input id="star-rating-rtl"   type="number" class="rating" data-show-clear="false" data-show-caption="false"  min=0 max=5 step=1 data-rtl=0 data-container-class='text-right' data-glyphicon=0 onchange="reviewModal()">
                            </div>
                        </div>


                        @if($business[0]->store_service_reviews && count($business[0]->store_service_reviews) >0)
                                <!-- rating count  -->
                        <div class="d-flex justify-content-center align-items-center rating__count my-3">
                             {{count($business[0]->store_service_reviews)}} reviews & ratings
                        
                        </div>


                        <div class="w-100"> <hr></div>

                        <div class="d-flex justify-content-center align-items-center rating__values my-3 pb-3">
                            <div class="row w-100">
                                <div class=" col-lg-6 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">

                                    <div class="d-flex justify-content-center align-items-center">
                                        <p class="avg__rate">{{$business[0]->rating ? $business[0]->rating : 0}}</p>
                                        <p class="total__rate">/5</p>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center">
                                        <input id="star-rating-rtl"  value="{{$business[0]->rating}}" disabled="true" title="{{$business[0]->rating." rating"}}" type="number" class="rating" data-show-clear="false" data-show-caption="false"  min=0 max=5 step=1 data-rtl=0 data-container-class='text-right' data-glyphicon=0>

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-start">
                                                    <!-- Excellent -->
                                    <?php 
                                    $reviews_counts = $reviews_counts->toArray();
                                    
                                    $exc_perc = 0;
                                    $v_good_perc = 0;
                                    $avg_perc = 0;
                                    $poor_perc = 0;
                                    $ter_perc  = 0;
                                    $total_rating = count($business[0]->store_service_reviews);
                                    if(isset($reviews_counts['Excellent'][0])){
                                        $exc_perc = ($reviews_counts['Excellent'][0]['rating_count'] / $total_rating) * 100;
                                    }
                                    if(isset($reviews_counts['Very Good'][0])){
                                        $v_good_perc = ($reviews_counts['Very Good'][0]['rating_count'] / $total_rating) * 100;
                                    }
                                    if(isset($reviews_counts['Average'][0])){
                                        $avg_perc = ($reviews_counts['Average'][0]['rating_count'] / $total_rating) * 100;
                                    }
                                    if(isset($reviews_counts['Poor'][0])){
                                        $poor_perc = ($reviews_counts['Poor'][0]['rating_count'] / $total_rating) * 100;
                                    }
                                    if(isset($reviews_counts['Terrible'][0])){
                                        $ter_perc = ($reviews_counts['Terrible'][0]['rating_count'] / $total_rating) * 100;
                                    }
                                    ?>
                                    <div class="row ml-1">
                                      <div class="side">
                                        <div>Excellent</div>
                                      </div>
                                      <div class="middle">
                                        <div class="bar-container  ml-4">
                                          
                                          <div class="bar" style="width: {{$exc_perc}}%; height: 18px; background-color: #fde16d;"></div>
                                        </div>
                                      </div>
                                      <div class="side right">
                                        <div>
                                            @if(isset($reviews_counts['Excellent'][0]))
                                                {{
                                                    $reviews_counts['Excellent'][0]['rating_count'] > 0 ? $reviews_counts['Excellent'][0]['rating_count'] : 0
                                                }}
                                            @endif
                                        </div>
                                      </div>
                                      <div class="side">
                                        <div>Very good</div>
                                      </div>
                                      <div class="middle">
                                        <div class="bar-container  ml-4">
                                          <div class="bar" style="width: {{$v_good_perc}}%; height: 18px; background-color: #fde16d;"></div>
                                        </div>
                                      </div>
                                      <div class="side right">
                                        <div>
                                            @if(isset($reviews_counts['Very Good']))
                                                {{
                                                    $reviews_counts['Very Good'][0]['rating_count'] > 0 ? $reviews_counts['Very Good'][0]['rating_count'] : 0
                                                }}
                                            @endif
                                        </div>
                                      </div>
                                      <div class="side">
                                        <div>Average</div>
                                      </div>
                                      <div class="middle">
                                        <div class="bar-container  ml-4">
                                          <div class="bar" style="width: {{$avg_perc}}%; height: 18px; background-color: #fde16d;"></div>
                                        </div>
                                      </div>
                                      <div class="side right">
                                        <div>  
                                            @if(isset($reviews_counts['Average']))
                                                {{
                                                    $reviews_counts['Average'][0]['rating_count'] > 0 ? $reviews_counts['Average'][0]['rating_count'] : 0
                                                }}
                                            @endif
                                        </div>
                                      </div>
                                      <div class="side">
                                        <div>Poor</div>
                                      </div>
                                      <div class="middle">
                                        <div class="bar-container ml-4">
                                          <div class="bar" style="width: {{$poor_perc}}%; height: 18px; background-color: #fde16d;"></div>
                                        </div>
                                      </div>
                                      <div class="side right">
                                        <div> 
                                            @if(isset($reviews_counts['Poor']))
                                                {{
                                                     $reviews_counts['Poor'][0]['rating_count'] > 0 ? $reviews_counts['Poor'][0]['rating_count'] : 0
                                                }}
                                                
                                            @endif
                                        </div>
                                      </div>
                                      <div class="side">
                                        <div>Terrible</div>
                                      </div>
                                      <div class="middle">
                                        <div class="bar-container  ml-4">
                                          <div class="bar" style="width: {{$ter_perc}}%; height: 18px; background-color: #fde16d;"></div>
                                        </div>
                                      </div>
                                      <div class="side right">
                                        <div>
                                             @if(isset($reviews_counts['Terrible']))
                                                {{
                                                    $reviews_counts['Terrible'][0]['rating_count'] > 0 ? $reviews_counts['Terrible'][0]['rating_count'] : 0
                                                }}
                                            @endif
                                        </div>
                                      </div>
                                    </div>


                                </div>
                            </div>


                        </div>

                        <div class="w-100 py-3"> <hr></div>

                                    <!-- comments section  -->
                        @foreach($business[0]->store_service_reviews as $review)
                        <div class="row w-100">

                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="w-100 d-flex justify-content-center align-items-center">
                                       <p style="height: 70px;width: 70px;border-radius: 50px;border: 3px solid #444242; font-size: 25px; color: #283048;font-weight: bold;padding:20px 10px 10px 15px; background:white ">

                                            <span style="vertical-align: middle;text-align: center;">
                                                {{ucfirst(substr($review->user->first_name,0,1))}}{{ucfirst(substr($review->user->last_name,0,1))}}
                                            </span>
                                        </p>
                                </div>
                            </div>

                            <div class="col-lg-10 col-md-9 col-sm-6">
                                            <!-- commenter Info  -->
                                <div class="w-100 d-flex justify-content-between align-items-center">
                                    <div class="commenter__name__rating d-flex justify-content-start align-items-center">
                                        
                                        <div class="commenter__rating d-flex mr-2 align-items-center">
                                             <input id="star-rating-rtl"  value="{{$review->rating}}" disabled="true" title="{{$review->rating." rating"}}" type="number" class="rating" data-show-clear="false" data-show-caption="false"  min=0 max=5 step=1 data-rtl=0 data-container-class='text-right' data-glyphicon=0>
                                        </div>

                                        <div class="commenter__name d-flex  justify-content-start align-items-center">
                                           <span class="mr-2">By</span> <span class="mr-2 ">{{
                                        $review->user->first_name .' '.$review->user->last_name
                                    }}</span>
                                        </div>


                                    </div>
                                    <div class="commenter__date_time d-flex justify-content-center align-items-center">
                                        <span>{{date('F d, Y', strtotime($review->created_at))}}</span>
                                    </div>
                                </div>
                                 <div class="w-100 py-3" style="font-weight: 600">
                                    {{
                                        $review->review_title
                                    }}
                                 </div>
                                            <!-- comment text  -->
                                <div class="w-100 py-3">
                                    <p>{{
                                        $review->review_text
                                    }}</p>
                                </div>
                                            <!-- other reactions  -->
                                <div class="other__reactions d-flex justify-content-start align-items-center">

                                                        <!-- helpful  -->
                                   <!--  <div class="reaction  mr-3">
                                        <a href="" class="d-flex justify-content-start align-items-center">
                                            <i class="far  mr-2 fa-thumbs-up"></i>
                                            <span class="mr-2 ">Helpful</span>
                                            <span class="mx-2 py-2 px-4 reaction__count">1</span>
                                        </a>

                                    </div> -->
                                                        <!-- report  -->
                                   <!--  <div class="reaction  mr-3" id="report__icon">

                                        <a href="" class="d-flex justify-content-start align-items-center">
                                            <i class="far  fa-flag mr-2"></i>
                                            <span class="mr-2 py-2">Report</span>
                                        </a>

                                    </div> -->

                                </div>
                               
                                
                            </div>
                        </div>

                        @endforeach
                    @endif
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12 pl-2 pl-md-5 mt-md-5">
                        <h4>Related Searches</h4>
                        <div class="w-75"> <hr></div>
                        <a href="">Dresses in North York >></a>
                        <h4>Related Articles to Norma Reed</h4>
                        <div class="w-75"> <hr></div>
                        <a href="">Toronto's best vintage shops for winter gear</a>
                        <a href="">Dresses in North York >></a>
                        <a href="">Toronto's best vintage shops for winter gear</a>
                        <a href="">Dresses in North York >></a>
                    </div>
                </div>
                            <!-- rate it  -->

            </div>

        </div>

        <!-- ######### write a reviews modal start########## -->
                        <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"  aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class=" modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg ">
                    <!-- modal-lg -->
                <div class="modal-content">
                    <div class="modal-header" id="Rating__reviews__modal">
                    <h5 class="modal-title" id="staticBackdropLabel">Ratings and Reviews {{$business[0]->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    
                    @foreach (['danger', 'success','warning'] as $status)
                        @if(Session::has($status))
                            <p class="alert alert-{{$status}} alert-dismissible" role="alert">{!! Session::get($status) !!} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button></p>
                        @endif
                    @endforeach

                    <form action="{{route('save_review')}}" method="post" enctype="multipart/form-data">
                        <div class="modal-body" id ="review__modal">

                            <h4 class="my-2">Overall, how would you describe your experience?</h4>

                                    <!-- rating  -->
                            <div class="mod__rating__title ml-3 d-flex justify-content-start align-items-center">
                                    <p class="m-0" id="mod__rating__title__opt">Choose a rating</p>
                                </div>
                            <div class="d-flex w-100 my-5">
                            
                                <div class="d-flex justify-content-center align-items-center mod__rating">
                                    {!!$errors->first('user_rating', '<p class="text-danger ">:message</p>') !!}
                                   <input id="star-rating-rtl" name="user_rating"  title="{{$business[0]->rating." rating"}}" type="number" class="rating" data-show-clear="false" data-show-caption="false"  min=0 max=5 step=1 data-rtl=0 data-container-class='text-right' data-glyphicon=0 required="" value="{{old('user_rating')}}">

                                </div>

                                

                            </div>
                            <div class="d-flex w-100 mt-3">
                                <h4>Review Title</h4>
                            </div>
                                                    <!-- textarea section  -->
                            <div class="d-flex w-100 my-3 flex-column">
                                {!!$errors->first('review_title', '<p class="text-danger ">:message</p>') !!}
                                <input id="" class="mod__review__text" name="review_title" maxlength="40" required="" value="{{old('review_title')}}" />
                                <div class="d-flex justify-content-end align-items-center">
                                    <p>40</p> 
                                </div>
                            </div>

                            <div class="d-flex w-100 mt-3">
                                <h4>Your Review</h4>
                            </div>

                                                    <!-- textarea section  -->
                            <div class="d-flex w-100 my-3 flex-column">
                                 {!!$errors->first('review_text', '<p class="text-danger ">:message</p>') !!}
                                <textarea id="" class="mod__review__text" name="review_text" rows="4" maxlength="500" required="" value="{{old('review_text')}}">{{old('review_text')}}</textarea>
                                <div class="d-flex justify-content-end align-items-center">
                                    <p>500</p> 
                                </div>
                            </div>
                                                <!-- add a photo  -->
                            <div class="d-flex w-100 my-3">
                                <h4>Add a photo</h4>
                            </div>
                            {!! csrf_field() !!}
                                    <!-- upload a photo  -->
                            <div class="upload__photo pl-3 row">
                              
                                <input type="file" class=" form-control col-sm-7" id ="upload__pic">
                            </div>
                                    <!-- copyright  -->
                            <div class="mod__copyRight d-flex justify-content-start align-items-center my-4">
                                <span class="mx-4 p-0">Submission of photos certifies that you are the owner of these photos and accept</span>
                                <a href=""class="term__of__use">Terms of use</a>.

                            </div>

                        </div>
                        <input type="hidden" name="business_id" value="{{$business[0]->id}}" />
                        <div class="modal-footer">

                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary" value="Submit">

                        </div>
                    </form>
                </div>
                </div>
            </div>


        <!-- ######### write a reviews modal end ########## -->
        @else

            <div class="product__detail_top_section">
                <div class="row pd__r1">
                    <div class="col-md-12">
                        <h4>
                            Business Not Found.
                        </h4>
                    </div>
                </div>
            </div>
        @endif    

    <script>

       

        function reviewModal(){
            @if(Session::has('user'))
                $("#staticBackdrop").modal('show');
            @else
                $("#staticBackdrop").modal('hide');
                    $("#modal_product_message").modal('show');
                    $("#modal_message").html('<h3>Please <a href="/register" style="font-weight:bold">register</a> or <a href="/login" style="font-weight:bold">login </a> to write a review.</h3>');
            @endif
        }


        function showBody2()
        {
            let tBody1 = document.getElementById("tableBody1");
            tBody1.classList.toggle("hideBody");

            let tBody2 = document.getElementById("tableBody2");
            tBody2.classList.toggle("hideBody");

            let tBody = document.getElementById("openingTiming");
            tBody.classList.toggle("tableBorder");
        }


        // functions for map 

        function initMap()
        {
            var location = {lat:-25.363, lag: 131.044};
            var map = new google.maps.Map(document.getElementById("map"),{
                zoom:4,
                center:location
            });

        }
    </script>

    <script>
        $(document).ready(function(){

        @if(Session::has('danger') || Session::has('warning') || $errors->any())
             $("#staticBackdrop").modal('show');
        @endif
            // on hover over 1st star 
        $("#star1").hover(function(){
            $(this).css("color", "gold");
            $('#ratting__title').text("Terrible");

            }, function()
            {
                $(this).css("color", "black");             
                $('#ratting__title').text("How would you rate this business?");
            });

            // on hover over 2nd star 
        $("#star2").hover(function(){
            $("#star1").css("color", "gold");
            $(this).css("color", "gold");
            $('#ratting__title').text("Poor");

            }, function()
            {
                $("#star1").css("color", "black");
                $(this).css("color", "black");             
                $('#ratting__title').text("How would you rate this business?");
            });

            // on hover over 3rd star 
        $("#star3").hover(function(){
            $("#star1").css("color", "gold");
            $("#star2").css("color", "gold");
            $(this).css("color", "gold");
            $('#ratting__title').text("Good");

            }, function()
            {
                $("#star1").css("color", "black");
                $("#star2").css("color", "black");
                $(this).css("color", "black");             
                $('#ratting__title').text("How would you rate this business?");
            });

            // on hover over 4th star 
        $("#star4").hover(function(){
            $("#star1").css("color", "gold");
            $("#star2").css("color", "gold");
            $("#star3").css("color", "gold");
            $(this).css("color", "gold");
            $('#ratting__title').text("Very Good");

            }, function()
            {
                $("#star1").css("color", "black");
                $("#star2").css("color", "black");
                $("#star3").css("color", "black");
                $(this).css("color", "black");             
                $('#ratting__title').text("How would you rate this business?");
            });

            // on hover over 5th star 
        $("#star5").hover(function(){
            $("#star1").css("color", "gold");
            $("#star2").css("color", "gold");
            $("#star3").css("color", "gold");
            $("#star4").css("color", "gold");
            $(this).css("color", "gold");
            $('#ratting__title').text("Excellent");

            }, function()
            {
                $("#star1").css("color", "black");
                $("#star2").css("color", "black");
                $("#star3").css("color", "black");
                $("#star4").css("color", "black");
                $(this).css("color", "black");             
                $('#ratting__title').text("How would you rate this business?");
            });


            // #######################  Modal hover on rating  ###########
                        // on hover over 1st star 
        $("#star__mod__1").hover(function(){
            $(this).css("color", "gold");
            $('#mod__rating__title__opt').text("Terrible");

            }, function()
            {
                $(this).css("color", "black");             
                $('#mod__rating__title__opt').text("How would you rate this business?");
            });

            // on hover over 2nd star 
        $("#star__mod__2").hover(function(){
            $("#star__mod__1").css("color", "gold");
            $(this).css("color", "gold");
            $('#mod__rating__title__opt').text("Poor");

            }, function()
            {
                $("#star__mod__1").css("color", "black");
                $(this).css("color", "black");             
                $('#mod__rating__title__opt').text("How would you rate this business?");
            });

            // on hover over 3rd star 
        $("#star__mod__3").hover(function(){
            $("#star__mod__1").css("color", "gold");
            $("#star__mod__2").css("color", "gold");
            $(this).css("color", "gold");
            $('#mod__rating__title__opt').text("Good");

            }, function()
            {
                $("#star__mod__1").css("color", "black");
                $("#star__mod__2").css("color", "black");
                $(this).css("color", "black");             
                $('#mod__rating__title__opt').text("How would you rate this business?");
            });

            // on hover over 4th star 
        $("#star__mod__4").hover(function(){
            $("#star__mod__1").css("color", "gold");
            $("#star__mod__2").css("color", "gold");
            $("#star__mod__3").css("color", "gold");
            $(this).css("color", "gold");
            $('#mod__rating__title__opt').text("Very Good");

            }, function()
            {
                $("#star__mod__1").css("color", "black");
                $("#star__mod__2").css("color", "black");
                $("#star__mod__3").css("color", "black");
                $(this).css("color", "black");             
                $('#mod__rating__title__opt').text("How would you rate this business?");
            });

            // on hover over 5th star 
        $("#star__mod__5").hover(function(){
            $("#star__mod__1").css("color", "gold");
            $("#star__mod__2").css("color", "gold");
            $("#star__mod__3").css("color", "gold");
            $("#star__mod__4").css("color", "gold");
            $(this).css("color", "gold");
            $('#mod__rating__title__opt').text("Excellent");

            }, function()
            {
                $("#star__mod__1").css("color", "black");
                $("#star__mod__2").css("color", "black");
                $("#star__mod__3").css("color", "black");
                $("#star__mod__4").css("color", "black");
                $(this).css("color", "black");             
                $('#mod__rating__title__opt').text("How would you rate this business?");
            });

            // ###################      To report ###################
            // function to hide and show to report links toReport

           
        $("#report__icon").hover(function(){
            let showLinks = document.getElementById("toReport");
            showLinks.classList.toggle("hideBody");
            

            }, function()
            {
                
            });



        });

    $("#star-rating-rtl").rating();
    </script>

</div>

@endsection