@extends('layouts.app')

@section('content')

<style type="text/css">
   #bussiness_search .dropdown-menu>.active>a, .dropdown-menu>.active>a:hover, .dropdown-menu>.active>a:focus {
    color:inherit !important;
    background: #d0d0d1 !important;
  }

  .page-item.active .page-link {
    background: #000 !important;
    border-color: #000 !important;
  }
</style>
	<div id="container">

    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('businesses')}}">Businesses</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->

        <div id="content" class="col-sm-9">
        <h1 class="title">Find Businesses Near You</h1>

        <form id="form_filter_business" action ="{{route('businesses')}}" method="get">
          
          <div class="product-filter" style="padding: 14px 14px;">
            <div class="row" id="bussiness_search">
              
              <div class="col-md-4 col-sm-5">
                <input type="text" value="{{ isset($request_data->search_business) ? $request_data->search_business : ''}}" id="search_business" name="search_business"  placeholder="What? i.e. Formal Dresses" class="form-control" style="height: 34px;" />
                
              </div>
              
              <div class="col-md-4 col-sm-5">
                  <input type="text" id="search_address" name="search_address" value="<?php echo isset($request_data->search_address ) ? $request_data->search_address : ''; ?>" placeholder="Where? i.e. NY" class="form-control" style="height: 34px;" />
                  <b style="cursor: pointer" onclick="checkLocation()">
                    <i class="fas fa-map-marker"></i> 
                    Use my current location?
                  </b>
               </div>
              
               <input type="hidden" name="latitude" value="{{ isset($request_data->latitude ) ? $request_data->latitude : ''}}" id="latitude"/>
               <input type="hidden" name="longitude" value="{{ isset($request_data->longitude ) ? $request_data->longitude : ''}}" id="longitude"/>
               {!! csrf_field() !!}
              <div class="col-sm-1 text-left">
                <button type="submit" name="submit" class="btn btn-primary"  style="height: 34px;font-size: 15px;">
                  <i class="fa fa-search"></i>
                </button>
              </div>

             
               <div class="col-sm-3 text-right " style="font-size: 14px;font-weight: bold">
                <a href="{{route('businesses')}}" >
                <i class="fa fa-filter"></i>   Clear All
                </a>
              </div>

            </div>

          </div>

       
         <div class="row products-category" >

          @if($businesses && $businesses->total() >0 )

            @foreach($businesses as $business)
            
             
                <div class="product-layout product-list col-xs-12" >
                  <div class="product-thumb">
               <!--      <div class="image"><a href="https://www.nastygal.com//get-some-sunflower-floral-mini-dress/AGG44937.html" target="blank"><img src="//media.nastygal.com/i/nastygal/agg44937_black_xl?$product_image_category_page_horizontal_filters_desktop$" alt=" Strategies for Acquiring Your Own Laptop " title=" Strategies for Acquiring Your Own Laptop " class="img-responsive"></a></div> -->
                    <div>
                      <div class="caption">
                        <h4><a href="{{route('business_details',['business_id'=> $business->service_store_slug])}}" target="blank"> {{$business->name}}</a></h4>

                        <p class="description">
                          {{$business->street_address}},<br/> {{$business->city}} {{$business->zip_code}}, {{$business->state}}, {{$business->country}}
                        </p>

                        <p class="description">{{$business->name}} is well known for specializing in formal and casual wear. Casa Orquidea proudly carries a wide variety of..<a href="{{route('business_details',['business_id'=> $business->service_store_slug])}}"><b>Read more</b></a> </p>
                        @if($business->categories !="") 
                              <p> <b>{{$business->categories}}</b></p>
                            @endif
                            @if($business->email !="") 
                              <p><b>Email</b>: {{$business->email}}</p> 
                            @endif
                            @if($business->phone !="") 
                              <p> <b>Phone:</b> {{$business->phone}} </p>
                            @endif
                            @if($business->website !="") 
                              <p> <b>Website:</b><a href="{{$business->website}}">{{$business->website}}</a></p>
                            @endif
                            @if($business->years_in_business !="") 
                              <p> <b>Years in Business:</b>
                              @if($business->years_in_business == 0)
                                about 1 year
                              @else
                                {{$business->years_in_business}} years
                              @endif
                              </p>
                            @endif
                          
                        
                      </div>
                      <div class="button-group">
                        <button class="btn-primary" type="button" href="{{route('business_details',['business_id'=> $business->service_store_slug])}}"><span>View Details</span></button>
                       <!--  <div class="add-to-links">
                          <button type="button" data-toggle="tooltip" title="" onclick="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></button>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>

            @endforeach

          @else
           <div class="row products-category" >
               <div class="product-layout product-list col-xs-12" >
             <h4>No Matching businesses found. <a style="font-weight:bold;" href="{{route('businesses')}}">Clear Selection</a></h4>
           </div>
           </div>
          @endif

            </div> 
            <div class="row">
              <div class="col-sm-12 text-left">
                  <p>
                   {{$businesses && $businesses->total() >0 ? $businesses->withQueryString()->links('pagination::bootstrap-4') : ""}}
                  </p>
              
                  <p>
                    @if($businesses && $businesses->total() >0)
                      Showing {{count($businesses->items())}} out of {{$businesses->total()}} items 
                    @endif</p>
     
              </div>
            </div>
        </form> 
        </div>
          <div id="content" class="col-sm-3" >
            <img src="{{asset('image/add1.jpg')}}" class="col-md-12" style="margin-top: 20%">
            <br>
            <img src="{{asset('image/add2.jpg')}}" class="col-md-12" style="margin-top: 20%"></div>
         </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js" ></script>

<script type="text/javascript">

  function  checkLocation(){
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      alert("Geolocation is not supported by this browser.");
    }

  }

  function showPosition(position){

    if(position.coords){
      $("#latitude").val(position.coords.latitude);
      $("#longitude").val(position.coords.longitude);
      $("#search_address").val('Using Current Location');
      $("#form_filter_business").submit();
    }
  }

   $('#search_business').change(function() {

      $('#form_filter_business').submit();
   });

  var route = "{{ url('ac_business_search') }}";

  $('#search_business').typeahead({
    name:'search_business',

      source: function (query, process) {
         if(query !=""){
          return $.get(route, {
              query: query
          }, function (data) {
              return process(data);
          });
        }
      }
  });

  var route_address = "{{ url('ac_business_search') }}";

   $('#search_address').typeahead({
    name:'search_address',
      source: function (query2, process) {
        if(query2 !=""){
          return $.get(route_address, {
              query_address: query2
          }, function (data) {
              return process(data);
          });
        }
      }
  });
</script>
@endsection