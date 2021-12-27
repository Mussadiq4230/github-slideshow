@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/homeResponsive.css')}}">


<div class="topSearchBanner mb-3 d-flex justify-content-center align-items-center">
  <div class="innerSearch d-flex justify-content-center align-items-center flex-column w-100">
      <p class="topBHeading  font-weight-bold">BUY & SELL ANYTHING</p>
      <p class="topBSubHeading  font-weight-bold mb-2">SEARCH FROM 
          {{number_format($all_counts['total_products'][0]['total_count'])}} ADS</p>
  
      <div class="bannerCatSec d-flex flex-wrap justify-content-center align-items-center  mt-5">

        <input type="radio" name="tabMale" id="tabMale" class="d-none" checked>
        <label for="tabMale" class="bannerCat  d-flex justify-content-center align-items-center flex-column tbc1 m-0"data-toggle="tooltip" data-placement="top" title="Male">
          <!-- <i class="fas fa-male bannerCatIcon"></i> -->
          <div class="iconDiv " style="">
            <img 
              src="{{asset('image/dressIcons2/maleDressIcon1.png')}}"
              
              alt=""
              style="color:white;width:100%; height:100%;">
          </div>
          <span class="text-center font-weight-bold mt-2">Men</span>
        </label>

        <input type="radio" name="tabMale" id="tabFemale" class="d-none">
        <label for="tabFemale" class="bannerCat  d-flex justify-content-center align-items-center flex-column tbc2 m-0"data-toggle="tooltip" data-placement="top" title="Female">
          <!-- <i class="fas fa-female bannerCatIcon mx-auto text-center"></i> -->

          <div class="iconDiv " style="">
            <img 
              src="{{asset('image/dressIcons2/femaleDressIcon1.png')}}"
              
              alt=""
              style="color:white;width:100%; height:100%;">
          </div>
          <span class="text-center font-weight-bold mt-2">Women</span>
        </label>

        <input type="radio" name="tabMale" id="tabBoy" class="d-none">
        <label for="tabBoy" class="bannerCat  d-flex justify-content-center align-items-center flex-column tbc3 m-0"data-toggle="tooltip" data-placement="top" title="Boy">
          <!-- <i class="fas fa-child bannerCatIcon mx-auto text-center"></i> -->

          <div class="iconDiv " style="">
            <img 
              src="{{asset('image/dressIcons2/boyDressIcon1.png')}}"
              
              alt=""
              style="color:white;width:100%; height:100%;">
          </div>
          <span class="text-center font-weight-bold mt-2">Boy</span>

        </label>

        <input type="radio" name="tabMale" id="tabGirl" class="d-none">
        <label for="tabGirl" class="bannerCat  d-flex justify-content-center align-items-center flex-column tbc4 m-0"data-toggle="tooltip" data-placement="top" title="Girl">
          <!-- <i class="fas fa-female bannerCatIcon mx-auto text-center"></i> -->

          <div class="iconDiv " style="">
            <img 
              src="{{asset('image/dressIcons/grilDressIcon1.svg')}}"
              
              alt=""
              style="color:white;width:100%; height:100%;">
          </div>
          <span class="text-center font-weight-bold mt-2">Girl</span>
        </label>

        <input type="radio" name="tabMale" id="tabBaby" class="d-none">
        <label for="tabBaby" class="bannerCat  d-flex justify-content-center align-items-center flex-column tbc5 m-0"data-toggle="tooltip" data-placement="top" title="Baby">
            <!-- <i class="fas fa-baby bannerCatIcon mx-auto text-center"></i> -->

            <div class="iconDiv " style="">
              <img 
                src="{{asset('image/dressIcons2/babyDressIcon1.png')}}"
               
                alt=""
                style="color:white;width:100%; height:100%;">
          </div>
          <span class="text-center font-weight-bold mt-2">Baby</span>
        </label>



      </div>

      <button class="bannerSearch mx-auto d-flex justify-content-between align-items-center border w-sm-100 w-75">

        <input type="text" placeholder="Search" class="searchInput pl-4 ">
        <div class="searchIconArea">
          <i class="p-4 fas fa-search text-center"></i>
        </div>
        
        
        
      </button>
                    <!-- advanced searched start -->
        <div class=" mx-auto text-center p-2">
              <a href='{{route("advance-search")}}' class="btn btn-primary px-4 advancedSearch h3 m-0 font-weight-bold" style="font-size:11px;height: 35px;width:max-content !important;" data-loading-text="Loading..." 

              >Advance Search</a>
                  <!-- Modal Starts Adv Search -->
                  <div class="modal fade" id="myModal" role="document">
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        
                        <div class="modal-body">
                          <h4>Advance Search</h4>
                          <hr/>
                          <div class="row">
                      
                            <div class="col-lg-3">
                              <div class="form-group">
                                <label class="control-label" for="parent_cateogry" style="font-weight: bold">Please Select</label>
                                <select name="parent_category" id="parent_category" class="form-control search-select" required="">
                                  <!--  @foreach($pc_categories as $p_category)
                                    <option value="{{$p_category->id}}">{{$p_category->parent_category_name}}</option>
                                  @endforeach -->
                                  <option value="1">Women</option>
                                  <option value="2">Men</option>
                                  <option value="3">Kids</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-3" id="sub_category_div">
                              <div class="form-group">
                                <label class="control-label " for="parent_cateogry" style="font-weight: bold">Please Select</label>
                                <select name="parent_category" id="parent_category" class="form-control search-select" required="">
                                    <option value="">Select</option>
                                  <option value="5">Baby</option>
                                  <option value="6">Boy</option>
                                  <option value="7">Girl</option>

                                </select>
                              </div>
                            </div>
                            <div class="col-lg-3" id="category_div">
                              <div class="form-group">
                                <label class="control-label" for="category_name" style="font-weight: bold">Select Category</label>
                                <select name="category_name" id="category_name" class="search-select form-control" required="">
                                  <option value="">Select</option>
                                  @foreach($categories as $category)
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                  @endforeach

                                </select>
                              </div>
                            </div>
                            <div class="col-lg-3" id="store_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold">Select Store</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  <option value="all">All Stores</option>
                                  @foreach($stores as $store)
                                    <option value="{{$store->id}}">{{$store->store_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                              <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold">Select Brand</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  <option value="all">All Brands</option>
                                  @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->store_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="row" id="price_div" style="margin-left:2px">
                            <div class="col-md-12" >
                                    <label class="control-label" for="" style="font-weight: bold">By Price</label>
                            </div>

                            <div class="col-lg-7">
                            
                                <div  class="form-inline">
                                  
                              
                                    <div class="form-group   input-group" >
                                  <label class="control-label input-group-addon" for="min_price">$</label>
                                  <input type="number" class="form-control" min="0" name="min_price" placeholder="Min" >
                                  </div>
                                  <span>-</span>

                            
                                    <div class="form-group  input-group" >
                                  <label class="control-label input-group-addon" for="max_price">$</label>
                                  <input type="number" class="form-control" min="0" name="max_price" placeholder="Max" >
                            
                              </div>
                              
                                </div>
                                    <br/>  
                            </div>
                          <div class="col-lg-3" >
                              <div class="container" style="padding-left: 2rem">
                                <label class="radio">
                                  <input type="radio" class="radio" name="price_range" value="0-100"> <span>$0 - $100</span>
                                  </label>
                                  <label class="radio">
                                    <input type="radio" class="radio" name="price_range" value="100-200"> <span>$100 - $200</span>
                                  </label>
                                  <label class="radio">
                                    <input type="radio" class="radio" name="price_range" value="200-500" /> <span>$200 - $500</span>
                                  </label>
                                  <label class="radio">
                                    <input type="radio" class="radio" name="price_range" value="500-1000"/> <span>$500 - $1000</span>
                                  </label>
                                  <label class="radio">
                                    <input type="radio" class="radio" name="price_range" value="1000+"> <span>$1000+</span>
                                  </label>
                              </div>
                              </div>
                                  <div class="col-lg-2" ></div>
                            </div>

                            <div class="col-lg-12" id="color_div">
                              <div class="form-group">
                                <label class="control-label" for="colors" style="font-weight: bold">By Color</label>
                                  <br/>
                                  <div id='colors'>
                                    <div class="row">
                                      @foreach($colors as $color)
                                        <div class="col-md-2" style="min-width: max-content">
                                          <input type="checkbox" name="selected_colors[]" value={{$color->id}} /> <span style="margin-left:2px">  {{$color->color_name}} </span>
                                        </div>
                                      @endforeach
                                    </div>
                                  </div>
                              </div>
                            </div>
                          
                            <div class="col-lg-12" id="size_div">
                              <div class="form-group">
                                <label class="control-label" for="store_id" style="font-weight: bold">By Size</label>
                                  <br/>
                                  <div id='sizes'>
                                    <div class="row">
                                      @foreach($sizes as $size)
                                        <div class="col-md-2">
                                          <input type="checkbox" name="selected_sizes[]" value={{$size->id}} /> <span style="margin-left:2px">  {{$size->size_name}} </span>
                                        </div>
                                      @endforeach
                                    </div>
                                  </div>
                              </div>
                            </div>
                                <div class="col-lg-12" id="color_div">
                              <div class="form-group">
                                <label class="control-label" for="colors" style="font-weight: bold">Special Offers</label>
                                  <br/>
                                  <div id='colors'>
                                    <div class="row">
                                    
                                      @foreach($offer_types_list as $offer_type)
                                      <?php 
                                      $offer_type  = (object) $offer_type; ?>
                                        <div class="col-md-2" style="min-width: max-content">
                                          <input type="checkbox" name="selected_offer_types[]" value={{$offer_type->id}} /> <span style="margin-left:2px">  {{$offer_type->offer_type_name}} </span>
                                        </div>
                                      @endforeach
                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div class="col-lg-12">
                                  <hr />
                            </div>
                            
                            <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold">Dress  Length</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($dress_lengths as $length)
                                    <option value="{{$length->id}}">{{$length->dress_length_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                                <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold">Dress Style</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($dress_styles as $style)
                                    <option value="{{$style->id}}">{{$style->dress_style_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                                <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Material</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($materials as $material)
                                    <option value="{{$material->id}}">{{$material->material_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                                <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Pattern</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($patterns as $pattern)
                                    <option value="{{$pattern->id}}">{{$pattern->pattern_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                                <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Neckline</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($necklines as $neckline)
                                    <option value="{{$neckline->id}}">{{$neckline->neckline_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                                <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Sleeve Type</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($sleeve_types as $sleeve_type)
                                    <option value="{{$sleeve_type->id}}">{{$sleeve_type->sleeve_type_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                                <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Sleeve Length</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($sleeve_lengths as $sleeve_length)
                                    <option value="{{$sleeve_length->id}}">{{$sleeve_length->sleeve_length_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Fit Type</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($fit_types as $fit_type)
                                    <option value="{{$fit_type->id}}">{{$fit_type->fit_type_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-12">
                                  <hr />
                            </div>

                              <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold">Closure</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($closures as $closure)
                                    <option value="{{$closure->id}}">{{$closure->closure_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Character</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($characters as $character)
                                    <option value="{{$character->id}}">{{$character->character_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Theme</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($themes as $theme)
                                    <option value="{{$theme->id}}">{{$theme->theme_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Features</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($features as $feature)
                                    <option value="{{$feature->id}}">{{$feature->feature_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Fabric Type</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($fabric_types as $fabric_type)
                                    <option value="{{$fabric_type->id}}">{{$fabric_type->fabric_type_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Embellishment</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($embellishments as $embellishment)
                                    <option value="{{$embellishment->id}}">{{$embellishment->embellishment_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Garment Care</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($garment_cares as $garment_care)
                                    <option value="{{$garment_care->id}}">{{$garment_care->garment_care_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-3" id="brand_div">
                              <div class="form-group ">
                                <label class="control-label " for="store_id" style="font-weight: bold"> Occasion</label>
                                <select name="store_id" id="store_id" class=" search-select form-control" required="" >
                                  @foreach($occasions as $occasion)
                                    <option value="{{$occasion->id}}">{{$occasion->occasion_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-12">
                                  <hr />
                            </div>
                          
                            <div class="col-lg-12">
                                <div class="form-group">
                                  <label class="control-label" style="font-weight: bold">Season</label>
                                  <div id="input-option218">
                                    @foreach($seasons as $season)
                                    <label class="checkbox-inline">
                                      <input type="checkbox" value="{{$season->id}}" name="seasons[]">
                                      {{$season->season_name}} </label>
                                  
                                    @endforeach
                                  </div>
                                </div>
                            </div>

                            

                            <div class="col-lg-5">
                                <div class="form-group">
                                  <label class="control-label" style="font-weight: bold">Climate Pledge Friendly</label>
                                  <div id="input-option218">
                                    <label class="">
                                      <input type="radio" value="Yes" name="">
                                      Yes </label>
                                    <label class="" style="margin-left: 2rem">
                                      <input type="radio" value="No" name="">
                                      No </label>
                                    
                                  </div>
                                </div>
                            </div>
                                <div class="col-lg-7">
                                <div class="form-group">
                                  <label class="control-label" style="font-weight: bold">Show Only</label>
                                  <div id="input-option218">
                                    @foreach($show_only as $only)
                                    <label class="checkbox-inline">
                                      <input type="checkbox" value="{{$only}}" name="show_only[]">
                                      {{$only}} </label>
                                  
                                    @endforeach
                                  </div>
                                </div>
                            </div>
                          </div>
                      
                        </div>
                            <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="hideModal()">Close</button>
                          <button type="submit" class="btn btn-primary" onclick="window.location.href='/products/women'">Search</button>
                      </div>
                      </div>
                      
                    </div>
                  </div>
        </div>
          <!-- advanced searched end -->


   

  </div>
</div>

<div id="container">
  <div class="container">
    <div class="row">
      <!-- Feature Box Start-->
      <!--   <div class="container">
        <div class="custom-feature-box row">
          <div class="col-sm-6 col-xs-12">
            <div class="feature-box fbox_1">
              <div class="title">Free Shipping</div>
              <p>Free shipping on order over $1000</p>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="feature-box fbox_2">
              <div class="title">Easy Return</div>
              <p>Easy return in 24 days after purchasing</p>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Feature Box End-->
    </div>
  </div>
  
  <div class="container default-width ">
    <div class="row">
      <!--Middle Part Start-->
      <div id="content" class="col-xs-12">
        <!-- Banner Start -->
        
          <div class="row my-2">

              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-2">

                <div  class="home-product w-100 d-flex justify-content-center align-items-center">

                  <div class="home-product-left w-50">
                    <div class="home-p-img-sec w-100 "style="">

                      <img src="{{asset('image/104.png')}}" 
                        alt="Men Ads" 
                        title="Men Ads" 
                        style="height: 100%; width:100%; object-fit: cover; border-rad"/>

                    </div>
                      
                  </div>

                  <div class="home-product-right w-50 d-flex flex-column align-items-center">
                        <div class="home-pro-title py-5">Men</div>
                        <div class="home-pro-discount text-uppercase py-5">Flat <span>20%</span> off</div>
                        <div 
                         
                          class=" py-5 ">
                            <div class="home-pro-link d-flex align-items-center">
                              <a href="/shop/men" class=" d-flex align-items-center">
                                <span class="text-capitalize mx-2">shop Now</span> 
                                <div class="home-pro-icon d-flex justify-content-center align-items-center p-2">
                                  <i class=" fas  fa-angle-right"></i>
                                </div>
                              </a>
                            
                            </div>

                        </div>
                  </div>
                 
                </div>

              </div>

              <!-- /////////////2nd cards /////////////// -->
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-2">

                <div  class="home-product w-100 d-flex justify-content-end align-items-center">

                  <div class="home-product-left w-50">
                    <div class="home-p-img-sec w-100 "style="">

                      <img src="{{asset('image/102.png')}}" 
                        alt="Men Ads" 
                        title="Men Ads" 
                        style="height: 100%; width:100%; object-fit: cover; border-rad"/>

                    </div>
                      
                  </div>

                  <div class="home-product-right w-50 d-flex flex-column align-items-center">
                        <div class="home-pro-title py-5">Women</div>
                        <div class="home-pro-discount text-uppercase py-5">Flat <span>20%</span> off</div>
                        <div 
                         
                          class=" py-5 ">
                            <div class="home-pro-link d-flex align-items-center">
                              <a href="/shop/women" class=" d-flex align-items-center">
                                <span class="text-capitalize mx-2">shop Now</span> 
                                <div class="home-pro-icon d-flex justify-content-center align-items-center p-2">
                                  <i class=" fas  fa-angle-right"></i>
                                </div>
                              </a>
                            
                            </div>

                        </div>
                  </div>
                 
                </div>

              </div>

              <!-- /////////////////cards for Baby section  //////////// -->
              <!-- ///////////////////use condition if product === baby ///////// -->
            </div>
            <div class="d-flex home-product1 w-100  my-3 mx-auto justify-content-around align-items-center mx-auto">
                                    <!-- card#01 -->
                                    <!-- col-lg-4 col-md-4 col-sm-4 col-xs-12 my-xs-2 -->
              <div class="  d-flex justify-content-center 
                    align-items-center baby-cat-cards b-card1">

                  <div class="home-product-right  d-flex flex-column align-items-center">
                      <div class="home-pro-title py-5">Boy</div>
                      <div class="home-pro-discount text-uppercase py-5 pl-5">Flat <span>20%</span> off</div>
                      <div 
                      
                        class=" py-5 ">
                          <div class="home-pro-link d-flex align-items-center">
                            <a href="/shop/boy" class=" d-flex align-items-center">
                              <span class="text-capitalize mx-2 pl-5">shop Now</span> 
                              <div class="home-pro-icon d-flex justify-content-center align-items-center p-2">
                                <i class=" fas  fa-angle-right"></i>
                              </div>
                            </a>
                          
                          </div>

                      </div>
                  </div>

                  <div class="home-product-left "> 
                    <div class="home-p-img-sec w-100 "style="">

                      <img src="{{asset('image/104.png')}}" 
                        alt="Men Ads" 
                        title="Men Ads" 
                        style="height: 100%; width:100%; object-fit: cover; border-rad"/>

                    </div>   
                  </div>


              </div>
                                        <!-- card#02 -->
              <div class=" my-xs-2  d-flex justify-content-center 
                    align-items-center b-card2 mx-auto">

                    <div class="home-product-right  d-flex flex-column align-items-center">
                        <div class="home-pro-title py-5">Girl</div>
                        <div class="home-pro-discount text-uppercase py-5 pl-5">Flat <span>20%</span> off</div>
                        <div 
                        
                          class=" py-5 ">
                            <div class="home-pro-link d-flex align-items-center">
                              <a href="/shop/girl" class=" d-flex align-items-center">
                                <span class="text-capitalize mx-2 pl-5">shop Now</span> 
                                <div class="home-pro-icon d-flex justify-content-center align-items-center p-2">
                                  <i class=" fas  fa-angle-right"></i>
                                </div>
                              </a>
                            
                            </div>

                        </div>
                  </div>

                  <div class="home-product-left "> 
                    <div class="home-p-img-sec w-100 "style="">

                      <img src="{{asset('image/102.png')}}" 
                        alt="Men Ads" 
                        title="Men Ads" 
                        style="height: 100%; width:100%; object-fit: cover; border-rad"/>

                    </div>   
                  </div>


              </div>

                                        <!-- card#03 -->
              <div class=" my-xs-2  d-flex justify-content-center 
                    align-items-center b-card3">
                  <div class="home-product-right  d-flex flex-column align-items-center">
                        <div class="home-pro-title py-5">Baby</div>
                        <div class="home-pro-discount text-uppercase py-5">Flat <span>20%</span> off</div>
                        <div 
                        
                          class=" py-5 ">
                            <div class="home-pro-link d-flex align-items-center">
                              <a href="/shop/baby" class=" d-flex align-items-center">
                                <span class="text-capitalize mx-2">shop Now</span> 
                                <div class="home-pro-icon d-flex justify-content-center align-items-center p-2">
                                  <i class=" fas  fa-angle-right"></i>
                                </div>
                              </a>
                            
                            </div>

                        </div>
                  </div>

                  <div class="home-product-left "> 
                    <div class="home-p-img-sec w-100 "style="">

                      <img src="{{asset('image/boy1.png')}}" 
                        alt="Men Ads" 
                        title="Men Ads" 
                        style="height: 100%; width:100%; object-fit: cover; border-rad"/>

                    </div>   
                  </div>


              </div>



            </div>
        


        <!-- Banner End -->

        <!-- new top offer section start -->
        <div class="offer-section mt-5">
          <div class="inner-offer-section">
            <h2 class="section-title">Top Offers</h2>
            <hr/>
            <div class="row d-flex justify-content-between align-items-center no-gutter">


              <div class="col-lg-3 col-md-5 mx-auto col-sm-12 d-flex justify-content-center align-items-center home-offer-sider"style="">

                  <div class="h-offer w-100 mx-auto"style="">  

                    <a href="/shop/sale" class="offer-side-card my-2 d-flex flex-column justify-content-center align-items-center"   >

                        <div class="offer-upper-sec"style="background-image: url(../image/111.png);"></div>

                        <div class="offer-side-card-heading d-flex flex-column justify-content-center align-items-center"
                              style="background-color:rgba(121, 187, 81, .7)"
                          >
                          <h3 class="">Sales</h3>
                          <p><?php  $key = array_search('Sale', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                        </div>

                    </a>
                    
                  </div>

              </div>

              <div class="col-lg-6 col-md-8 col-sm-12  offer-cards d-flex flex-wrap mx-auto 
               justify-content-center align-items-center 
              "style="">
                <!-- /////////////////////////middle cards end////////////// -->
                <!-- <div class="offer-cards d-flex flex-wrap mx-auto"> -->

                                <!-- card#01 -->
                  <a href="/shop/deal" class="m-1 offer-single-card d-flex flex-column justify-content-center align-items-center border">

                      <div class="offer-icon d-flex justify-content-center align-items-center" style="background-color: blueviolet;">
                      <i class="fas fa-2x fa-tags"></i>
                      </div>

                      <div class="offer-heading d-flex justify-content-center align-items-center flex-column">
                        <div class="h3">Deals</div>
                        <p class="mx-auto"><?php  $key = array_search('Deal', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                      </div>

                  </a>
                                <!-- card#02 -->
                  <a href ="/shop/coupon" class="m-1 offer-single-card d-flex flex-column justify-content-center align-items-center border">

                      <div class="offer-icon d-flex justify-content-center align-items-center" style="background-color: #767690;">
                      <i class="fas fa-2x fa-percent"></i>
                      </div>

                      <div class="offer-heading d-flex justify-content-center align-items-center flex-column">
                        <div class="h3">Coupons</div>
                        <p class="mx-auto"><?php  $key = array_search('Coupon', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                      </div>

                  </a>
                                <!-- card#03 -->
                  <a  href="/shop/seasonal" class="m-1 offer-single-card d-flex flex-column justify-content-center align-items-center border">

                      <div class="offer-icon d-flex justify-content-center align-items-center" style="background-color: #DB6989;">
                        <i class="fas fa-2x fa-tshirt"></i>
                      </div>

                      <div class="offer-heading d-flex justify-content-center align-items-center flex-column">
                        <div class="h3">Seasonal</div>
                        <p class="mx-auto"><?php  $key = array_search('Seasonal', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                      </div>

                  </a >
                                <!-- card#04 -->
                  <a href="/shop/free-shipping" class="m-1 offer-single-card d-flex flex-column justify-content-center align-items-center border">

                      <div class="offer-icon d-flex justify-content-center align-items-center" style="background-color: #BD967A;">
                      <i class="fas fa-2x fa-shipping-fast"></i>
                      </div>

                      <div class="offer-heading d-flex justify-content-center align-items-center flex-column">
                        <div class="h3">Free Shipping</div>
                        <p class="mx-auto"><?php  $key = array_search('Free Shipping', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                      </div>

                  </a>
                                <!-- card#05 -->
                  <a href="/shop/clearance" class="m-1 offer-single-card d-flex flex-column justify-content-center align-items-center border">

                      <div class="offer-icon d-flex justify-content-center align-items-center" style="background-color: blueviolet;">
                      <i class="fas fa-2x fa-clipboard-check"></i>
                      </div>

                      <div class="offer-heading d-flex justify-content-center align-items-center flex-column">
                        <div class="h3">Clearance</div>
                        <p class="mx-auto"><?php  $key = array_search('Clearance', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                      </div>

                  </a>
                                <!-- card#06 -->
                  <a href="/shop/gift" class="m-1 offer-single-card d-flex flex-column justify-content-center align-items-center border">

                      <div class="offer-icon d-flex justify-content-center align-items-center" style="background-color: #00A8C6;">
                        <i class="fas fa-2x fa-gifts"></i>
                      </div>

                      <div class="offer-heading d-flex justify-content-center align-items-center flex-column">
                        <div class="h3">Gift Cards</div>
                        <p class="mx-auto"><?php  $key = array_search('Gift', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                      </div>

                  </a >
                             


                <!-- </div> -->
                <!-- /////////////////////////middle cards end ////////////// -->

              </div>

              <div class="col-lg-3 col-md-5 mx-auto col-sm-12 d-flex justify-content-center align-items-center home-offer-sider"style="">

                <div class="h-offer w-100 mx-auto"style="">  

                  <a href="/shop/new-arrival" 
                  
                      class="offer-side-card my-2 d-flex flex-column justify-content-center align-items-center"   >

                      <div class="offer-upper-sec"style="background-image: url(../image/112.png);"></div>

                      <div class="offer-side-card-heading d-flex flex-column justify-content-center align-items-center"
                            style="background-color:rgba(121, 187, 81, .7)"
                        >
                        <h3 class="">New Arrival</h3>
                        <p><?php  $key = array_search('New Arrival', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                      </div>

                  </a>
                  
                </div>

              </div>
            



            </div>

          </div>


        </div>


        <!-- new top offer section end -->
 
        <div class="divider">
        </div>
        <div class="section">
            <h2 class="section-title">Top Offers</h2>
            <hr/>
               <div class="container">
                  <div class="custom-feature-box row">
                   
                    <div class="col-sm-3 col-xs-12">
                        <a href="/todays_sales" title="Sales">
                            <div class="feature-box fbox_3">
                                <div class="title">Sales</div>
                                <p>  <?php  $key = array_search('Sale', array_column($all_counts['offer_type'], 'count_name'));?>
                                ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-sm-3 col-xs-12">
                        <a href="/new_arrival" title="New Arrivals">
                          <div class="feature-box fbox_3">
                            <div class="title">New Arrival</div>
                            <p>  <?php  $key = array_search('New Arrival', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                          </div>
                        </a>
                    </div>
                    
                    <div class="col-sm-3 col-xs-12">
                        <a href="/shop/deal" title="Deals">
                          <div class="feature-box fbox_3">
                            <div class="title">Deals</div>
                            <p>  <?php  $key = array_search('Deal', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                          </div>
                        </a>
                    </div>

                    <div class="col-sm-3 col-xs-12">
                        <a href="/shop/coupon" title="Coupons">
                          <div class="feature-box fbox_3">
                            <div class="title">Coupons</div>
                            <p>  <?php  $key = array_search('Coupon', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                          </div>
                        </a>
                    </div>

                    <div class="col-sm-3 col-xs-12">
                        <a href="/shop/clearance" title="Clearance">
                          <div class="feature-box fbox_3">
                            <div class="title">Clearance</div>
                            <p>  <?php  $key = array_search('Clearance', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                          </div>
                        </a>
                    </div>

                    <div class="col-sm-3 col-xs-12">
                        <a href="/shop/seasonal" title="Seasonal">
                          <div class="feature-box fbox_3" >
                            <div class="title">Seasonal</div>
                            <p>  <?php  $key = array_search('Seasonal', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                          </div>
                        </a>
                    </div>

                    <div class="col-sm-3 col-xs-12">
                        <a href="/shop/gift" title="Gift Cards">
                          <div class="feature-box fbox_3">
                            <div class="title">Gift Cards</div>
                            <p>  <?php  $key = array_search('Gift', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                          </div>
                      </a>
                    </div>

                     <div class="col-sm-3 col-xs-12">
                        <a href="/shop/free-shipping" title="Free Shipping">
                          <div class="feature-box fbox_3">
                            <div class="title">Free Shipping</div>
                            <p>  <?php  $key = array_search('Free Shipping', array_column($all_counts['offer_type'], 'count_name'));?>
                            ({{$all_counts['offer_type'][$key]['total_count']}})</p>
                          </div>
                      </a>
                    </div>

                  </div>
                </div>

      </div>
 
      <!-- Product Tab Start -->
    </div>
    <!--Middle Part End-->
  </div>
</div>
</div>
@endsection