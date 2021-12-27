@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/category_products.css')}}">
<script type="text/javascript" src="{{asset('js/categoryProduct.js')}}"></script>

<div id="container">
    <div class="container-fluid">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i></a></li>
        @foreach($breadcrumbs as $key=>$value)
          <li><a href="{{$key}}">{{$value}}</a></li>
        @endforeach
      </ul>
      <!-- Breadcrumb End-->
      <form action="{{$_SERVER['PATH_INFO']}}" action="get" id="main_form"> 

        <div class="row">
        
          <!--Left Part Start -->

          <!-- <aside id="column-left" class="col-sm-3 hidden-xs">
                     <h5 >Categories <a href="{{$_SERVER['PATH_INFO']}}" style="float: right">Clear All</a></h5>
            <div class="box-category border_bottom" >
              <ul id="cat_accordion">
                <li><a href="/shop" style="font-weight: <?php echo "All Categories" == $selected ? "bold": "normal"; ?>">All Categories</a></li>
                @foreach($pc_categories as $cat)

                <li>
                  <a href="<?php if($cat->parent_category_name == 'Kids') { echo '#'; }else{ echo '/shop/'.$cat->parent_category_slug; }?>"
                    style="font-weight: <?php echo $cat->parent_category_name == $selected || $cat->parent_category_name == ucfirst($selected_sub1) ? "bold": "normal"; ?>"
                  >
                  {{$cat->parent_category_name}}</a> <span class="down"></span>
                  <ul id="{{$cat->parent_category_slug}}" class="<?php if($cat->parent_category_name !='Kids') {echo 'term-list';} ?>">
                    @if($cat->sub_parent_categories)

                      @foreach($cat->sub_parent_categories as $sub_parent_category)

                        <li ><a  href="/shop/{{$sub_parent_category->parent_category_slug}}"
                          style="font-weight: <?php echo $sub_parent_category->parent_category_name == $selected || $sub_parent_category->parent_category_name == ucfirst($selected_sub1) ? "bold": "normal"; ?>"
                          >
                          {{$sub_parent_category->parent_category_name}}
                        </a>
                          <span class="down" ></span>
                          <ul id="{{$sub_parent_category->parent_category_slug}}" class="term-list">
                            @foreach($sub_parent_category->our_categories as $category)
                              <li class="term-item" >
                                <a 
                                style="font-weight: <?php echo $category->category_name == $selected ? "bold": "normal"; ?>"
                                href="/shop/{{$sub_parent_category->parent_category_slug}}/{{$category->category_slug}}">{{$category->category_name}}</a> 
                                @if(!empty($category->sub_categories))<span class="down"></span> @endif
                                <ul id="{{$category->category_slug}}">
                                  @if(isset($category->sub_categories))
                                    @foreach($category->sub_categories as $sub_cat)
                                      <li><a href="/shop/{{$sub_parent_category->parent_category_slug}}/{{$category->category_slug}}/{{$sub_cat->category_slug}}">{{$sub_cat->category_name}} </a></li>
                                    @endforeach
                                  @endif
                                </ul>
                              </li>
                            @endforeach
                          </ul>
                        </li>
                      @endforeach

                    @else
                      @foreach($cat->our_categories as $category)
                          <li class="term-item"><a
                              style="font-weight: <?php echo $category->category_name == $selected ? "bold": "normal"; ?>"
                          href="/shop/{{$cat->parent_category_slug}}/{{$category->category_slug}}">{{$category->category_name}}</a> 
                            @if(!empty($category->sub_categories))<span class="down"></span> @endif
                            <ul>
                              @foreach($category->sub_categories as $sub_cat)
                              <li><a 
                                href="/shop/{{$cat->parent_category_slug}}/{{$category->category_slug}}/{{$sub_cat->category_slug}}">{{$sub_cat->category_name}} </a></li>
                              @endforeach
                            </ul>
                          </li>
                        @endforeach
                    @endif
                  
                  </ul>
                </li>
                @endforeach
               
              </ul>
            </div>
            @if(isset($other_counts['brand']))
              <h5 >Brand  <a style="float:right;" href="#" data-loading-text="Loading..."  onclick="loadTabData()" ><small style="font-size:12px">View All</small></a></h5>
              <div class="side-item border_bottom term-list">
                
                @foreach($other_counts['brand'] as $brand)
                  
                  @if(!in_array($brand->count_id,$allowed_stores))

                  <?php  
                  // continue;
                   ?>
                  @endif
                
                  <div class="checkbox term-item">
                      <label>
                        <input
                        <?php if(isset($request_data->brand) && in_array($brand->count_id, $request_data->brand) ){ ?> checked='checked' <?php }?>  
                         type="checkbox" name="brand[]" name="brand_id"  onchange="submitForm()"  id="checkboxSuccess" value="{{$brand->count_id}}">
                        {{$brand->count_name}} ({{$brand->total_count}}) </label>
                    </div>
                @endforeach
              </div>
            @endif

            @if(isset($other_counts['store']))
              <h5 >Online Stores  <a style="float:right;" href="#" data-loading-text="Loading..."  onclick="loadTabData()" ><small style="font-size:12px">View All</small></a></h5>
              <div class="side-item border_bottom term-list">

                @foreach($other_counts['store'] as $store)
                
                @if(!in_array($store->count_id,$allowed_stores))
                    <?php  

                    // continue;
                    ?>
                    @endif
                  <div class="checkbox term-item">
                      <label>
                        <input
                        <?php if(isset($request_data->store) && in_array($store->count_id, $request_data->store)){ ?> checked='checked' <?php }?>  
                        type="checkbox" name="store[]" name="store_id" onchange="submitForm()" id="checkboxSuccess" value="{{$store->count_id}}">
                        {{$store->count_name}} ({{$store->total_count}}) </label>
                    </div>
                @endforeach
              </div>

            @endif

            <h5>By Price </h5>
            <div class="side-item border_bottom">
              <div  class="form-inline row" style="margin-left: 1px">

                <div class="form-group   input-group col-md-4" >
                 
                  <input type="number" id="min_price"  value="{{isset($request_data->min_price) && $request_data->min_price ? $request_data->min_price: ''}}"  class="form-control" min="0" name="min_price" placeholder="Min" >
                </div>
                <span>-</span>
                <div class="form-group  input-group col-md-4"  >
                  <input type="number"  value="{{isset($request_data->max_price) && $request_data->max_price ? $request_data->max_price: ''}}" id="max_price"  class="form-control" min="0" name="max_price" placeholder="Max" >
                </div>
                <div class="form-group col-md-2" style="float: right;margin-right: 2.5rem;">
                    <button type="button" class=" btn btn-xs btn-info" onclick="submitForm('price')" style="height: 33px"><i class="fa fa-search"></i></button>
                </div>
              </div>
               <div class="container" style="padding-left: 2rem">
                <label class="radio">
                  <input type="radio" class="radio" 
                  <?php if(isset($request_data->price_range) && $request_data->price_range == '0-100'){ ?> checked='checked' <?php }?>  
                  onchange="submitForm('price_range')" id="price_range" name="price_range" value="0-100"  > <span>$0 - $100</span>
                 </label>
                  <label class="radio">
                    <input
                    <?php if(isset($request_data->price_range) && $request_data->price_range == '100-200'){ ?> checked='checked' <?php }?>  
                     type="radio" class="radio" onchange="submitForm('price_range')" name="price_range" id="price_range" value="100-200"> <span>$100 - $200</span>
                  </label>
                  <label class="radio">
                    <input
                     <?php if(isset($request_data->price_range) && $request_data->price_range == '200-500'){ ?> checked='checked' <?php }?> 
                     type="radio" class="radio" onchange="submitForm('price_range')" name="price_range" id="price_range" value="200-500" /> <span>$200 - $500</span>
                  </label>
                  <label class="radio">
                    <input
                    <?php if(isset($request_data->price_range) && $request_data->price_range == '500-1000'){ ?> checked='checked' <?php }?> 
                     type="radio" class="radio" onchange="submitForm('price_range')" name="price_range" id="price_range" value="500-1000"/> <span>$500 - $1000</span>
                  </label>
                  <label class="radio">
                    <input
                    <?php if(isset($request_data->price_range) && $request_data->price_range == '1000+'){ ?> checked='checked' <?php }?> 
                     type="radio" class="radio" onchange="submitForm('price_range')" name="price_range" id="price_range" value="1000+"> <span>$1000+</span>
                  </label>
              </div>
            </div>

            @if($show_filters)

                    <h5>Special Offers <a style="float:right;"href="#" data-loading-text="Loading..."  onclick="loadTabData()"><small style="font-size:12px">View All</small></a></h5>
                <div class="side-item  border_bottom">
              
                  @foreach($other_counts['offer_type'] as $offer_type)
                    <span class="badge "     title ="{{$offer_type->count_name}}" style="color:inherit;margin-bottom:3px;background:<?php if(isset($request_data->offer_type) && in_array($offer_type->count_id, $request_data->offer_type)){ echo '#9e9e9e'; }else{ echo 'lightgrey'; }?>; ">
                      <input
                      <?php if(isset($request_data->offer_type) && in_array($offer_type->count_id, $request_data->offer_type)){ ?> checked='checked' <?php }?> 
                      type="checkbox" onchange="submitForm()" name="offer_type[]" id="checkboxSuccess" value="{{$offer_type->count_id}}">
                    {{$offer_type->count_name}} ({{$offer_type->total_count}})
                  </span>
                  @endforeach
                
                </div>

            <?php 
              if(isset($all_counts['dress_style']) &&  !(isset($all_counts['dress_style'][0])  && count($all_counts['dress_style']) == 1   && $all_counts['dress_style'][0]->count_name == "Unspecified" && $all_counts['dress_style'][0]->total_count <1)){
                  ?>

                <h5>Dress Style  <a style="float:right;"href="#" data-loading-text="Loading..."  onclick="loadTabData()"><small style="font-size:12px">View All</small></a></h5>
                <div class="side-item border_bottom">
                  <?php $i=0; ?>
                  @foreach($all_counts['dress_style'] as $dstyle)
                  
                    @if($i >5)
                      <?php  break; ?>
                    @endif
                    <?php $i++;?>
                    <div class="checkbox">
                        <label>
                          <input
                          <?php if(isset($request_data->dress_style) && in_array($dstyle->count_id, $request_data->dress_style)){ ?> checked='checked' <?php }?> 
                          type="checkbox"  onchange="submitForm()" id="checkboxSuccess" name="dress_style[]" value="{{$dstyle->count_id}}">
                          {{$dstyle->count_name}} ({{$dstyle->total_count}}) </label>
                      </div>
                  @endforeach
                </div>

              <?php 

              } ?>

            <?php 
              if(isset($all_counts['dress_length']) &&  !(isset($all_counts['dress_length'][0]) && count($all_counts['dress_length']) == 1  && $all_counts['dress_length'][0]->count_name == "Unspecified" && $all_counts['dress_length'][0]->total_count <1)){
                  ?>


                <h5>Length  <a style="float:right;"href="#" data-loading-text="Loading..."  onclick="loadTabData()"><small style="font-size:12px">View All</small></a></h5>
                <div class="border_bottom">
                  <?php $i=0; ?>
                  @foreach($all_counts['dress_length'] as $dress_length)
                  
                    @if($i >5)
                      <?php  break; ?>
                    @endif
                    <?php $i++;?>
                    <div class="checkbox">
                        <label>
                          <input
                          <?php if(isset($request_data->dress_length) && in_array($dress_length->count_id, $request_data->dress_length)){ ?> checked='checked' <?php }?> 
                          type="checkbox" onchange="submitForm()" name="dress_length[]" id="checkboxSuccess" value="{{$dress_length->count_id}}">
                          {{$dress_length->count_name}} ({{$dress_length->total_count}}) </label>
                      </div>
                  @endforeach
                  
                </div>

                <?php 
                }
                ?>

                <?php 
              if(isset($all_counts['pattern']) && !(isset($all_counts['pattern'][0]) && count($all_counts['pattern']) == 1  && $all_counts['pattern'][0]->count_name == "Unspecified" && $all_counts['pattern'][0]->total_count <1)){
                  ?>

                  <h5>Pattern  <a style="float:right;"href="#" data-loading-text="Loading..."  onclick="loadTabData()"><small style="font-size:12px">View All</small></a></h5>
                  <div class="side-item border_bottom">
                    <?php $i=0; ?>
                    @foreach($all_counts['pattern'] as $pattern)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                      <div class="checkbox">
                          <label>
                            <input
                            <?php if(isset($request_data->pattern) && in_array($pattern->count_id, $request_data->pattern) ){ ?> checked='checked' <?php }?> 
                            type="checkbox" onchange="submitForm()" id="checkboxSuccess" name="pattern[]" value="{{$pattern->count_id}}">
                            {{$pattern->count_name}} ({{$pattern->total_count}}) </label>
                        </div>
                    @endforeach
                    
                  </div>
                <?php 
                }
                ?>

                <?php 
              if(isset($all_counts['neckline']) &&  !(isset($all_counts['neckline'][0]) && count($all_counts['neckline']) == 1 &&  $all_counts['neckline'][0]->count_name == "Unspecified" && $all_counts['neckline'][0]->total_count <1)){
                  ?>

                  <h5>Neckline  <a style="float:right;"href="#" data-loading-text="Loading..."  onclick="loadTabData()"><small style="font-size:12px">View All</small></a></h5>
                <div class="side-item border_bottom">
                  <?php $i=0;?>
                  @foreach($all_counts['neckline'] as $neckline)
                  
                    @if($i >5)
                      <?php  break; ?>
                    @endif
                    <?php $i++;?>
                    <div class="checkbox">
                        <label>
                          <input
                          <?php if(isset($request_data->neckline) && in_array($neckline->count_id, $request_data->neckline)){ ?> checked='checked' <?php }?> 
                          type="checkbox" onchange="submitForm()" id="checkboxSuccess" name="neckline[]" value="{{$neckline->count_id}}">
                          {{$neckline->count_name}} ({{$neckline->total_count}}) </label>
                      </div>
                  @endforeach
                  
                </div>
                <?php 
                }
                ?>


                <?php 
              if(isset($all_counts['sleeve_type']) &&  !(isset($all_counts['sleeve_type'][0])  && count($all_counts['sleeve_type']) == 1 && $all_counts['sleeve_type'][0]->count_name == "Unspecified" && $all_counts['sleeve_type'][0]->total_count <1)){
                  ?>


                  <h5>Sleeve Type  <a style="float:right;"href="#" data-loading-text="Loading..."  onclick="loadTabData()"><small style="font-size:12px">View All</small></a></h5>
                <div class="side-item border_bottom">
                  <?php $i=0;?>
                  @foreach($all_counts['sleeve_type'] as $sleeve_type)
                  
                    @if($i >5)
                      <?php  break; ?>
                    @endif
                    <?php $i++;?>
                    <div class="checkbox">
                        <label>
                          <input
                          <?php if(isset($request_data->sleeve_type) && in_array($sleeve_type->count_id, $request_data->sleeve_type)){ ?> checked='checked' <?php }?> 
                          type="checkbox" onchange="submitForm()" id="checkboxSuccess" name="sleeve_type[]" value="{{$sleeve_type->count_id}}">
                          {{$sleeve_type->count_name}} ({{$sleeve_type->total_count}}) </label>
                      </div>
                  @endforeach
                  
                </div>
                <?php 
                }
                ?>
                
                
                <?php 
              if(isset($all_counts['embellishment']) &&  !(isset($all_counts['embellishment'][0]) && count($all_counts['embellishment']) == 1 &&  $all_counts['embellishment'][0]->count_name == "Unspecified" && $all_counts['embellishment'][0]->total_count <1)){
                  ?>

                  <h5>Embellishment  <a style="float:right;"href="#" data-loading-text="Loading..."  onclick="loadTabData()"><small style="font-size:12px">View All</small></a></h5>
                  <div class="side-item border_bottom">
                    <?php  $i=0;?>
                    @foreach($all_counts['embellishment'] as $embellishment)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                      <div class="checkbox">
                          <label>
                            <input 
                              <?php if(isset($request_data->embellishment) && in_array($embellishment->count_id, $request_data->embellishment)){ ?> checked='checked' <?php }?> 
                            type="checkbox" onchange="submitForm()" name="embellishment[]" id="checkboxSuccess" value="{{$embellishment->count_id}}">
                            {{$embellishment->count_name}} ({{$embellishment->total_count}}) </label>
                        </div>
                    @endforeach
                
                  </div>
                <?php 
                }
                ?>
                  
                <?php 
                if(isset($all_counts['material']) &&  !(isset($all_counts['material'][0]) && count($all_counts['material']) == 1 && $all_counts['material'][0]->count_name == "Unspecified" && $all_counts['material'][0]->total_count <1)){
                  ?>
                    <h5>Material  <a style="float:right;" href="#" data-loading-text="Loading..."  onclick="loadTabData()" ><small style="font-size:12px">View All</small></a></h5>
                    <div class="side-item border_bottom">
                    <?php $i=0; ?>
                    @foreach($all_counts['material'] as $material)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                      <div class="checkbox">
                          <label>
                            <input
                            <?php if(isset($request_data->material) && in_array($material->count_id, $request_data->material)){ ?> checked='checked' <?php }?> 
                            type="checkbox" onchange="submitForm()" name="material[]" id="checkboxSuccess" value="{{$material->count_id}}">
                            {{$material->count_name}} ({{$material->total_count}}) </label>
                        </div>
                    @endforeach
                    
                  </div>
                <?php 
                }
              ?>

                          <?php 
                if(isset($all_counts['character']) &&  !(isset($all_counts['character'][0]) && count($all_counts['character']) == 1 && $all_counts['character'][0]->count_name == "Unspecified" && $all_counts['character'][0]->total_count <1)){
                  ?>
                    <h5>Character  <a style="float:right;" href="#" data-loading-text="Loading..."  onclick="loadTabData()" ><small style="font-size:12px">View All</small></a></h5>
                    <div class="side-item border_bottom">
                    <?php $i=0; ?>
                    @foreach($all_counts['character'] as $character)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                      <div class="checkbox">
                          <label>
                            <input
                            <?php if(isset($request_data->character) && in_array($character->count_id, $request_data->character)){ ?> checked='checked' <?php }?> 
                            type="checkbox" onchange="submitForm()" name="character[]" id="checkboxSuccess" value="{{$character->count_id}}">
                            {{$character->count_name}} ({{$character->total_count}}) </label>
                        </div>
                    @endforeach
                    
                  </div>
                <?php 
                }
              ?>

              <?php 
                if(isset($all_counts['closure']) &&  !(isset($all_counts['closure'][0]) && count($all_counts['closure']) == 1 && $all_counts['closure'][0]->count_name == "Unspecified" && $all_counts['closure'][0]->total_count <1)){
                  ?>
                    <h5>Closure  <a style="float:right;" href="#" data-loading-text="Loading..."  onclick="loadTabData()" ><small style="font-size:12px">View All</small></a></h5>
                    <div class="side-item border_bottom">
                    <?php $i=0; ?>
                    @foreach($all_counts['closure'] as $closure)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                      <div class="checkbox">
                          <label>
                            <input
                            <?php if(isset($request_data->closure) && in_array($closure->count_id, $request_data->closure)){ ?> checked='checked' <?php }?> 
                            type="checkbox" onchange="submitForm()" name="closure[]" id="checkboxSuccess" value="{{$closure->count_id}}">
                            {{$closure->count_name}} ({{$closure->total_count}}) </label>
                        </div>
                    @endforeach
                    
                  </div>
                <?php 
                }
              ?>

              <?php 
                if(isset($all_counts['fabric_type']) &&  !(isset($all_counts['fabric_type'][0]) && count($all_counts['fabric_type']) == 1 && $all_counts['fabric_type'][0]->count_name == "Unspecified" && $all_counts['fabric_type'][0]->total_count <1)){
                  ?>
                    <h5>Fabric Type  <a style="float:right;" href="#" data-loading-text="Loading..."  onclick="loadTabData()" ><small style="font-size:12px">View All</small></a></h5>
                    <div class="side-item border_bottom">
                    <?php $i=0; ?>
                    @foreach($all_counts['fabric_type'] as $fabric_type)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                      <div class="checkbox">
                          <label>
                            <input
                            <?php if(isset($request_data->fabric_type) && in_array($fabric_type->count_id, $request_data->fabric_type)){ ?> checked='checked' <?php }?> 
                            type="checkbox" onchange="submitForm()" name="fabric_type[]" id="checkboxSuccess" value="{{$fabric_type->count_id}}">
                            {{$fabric_type->count_name}} ({{$fabric_type->total_count}}) </label>
                        </div>
                    @endforeach
                    
                  </div>
                <?php 
                }
              ?>

                <?php 
                if(isset($all_counts['feature']) &&  !(isset($all_counts['feature'][0]) && count($all_counts['feature']) == 1 && $all_counts['feature'][0]->count_name == "Unspecified" && $all_counts['feature'][0]->total_count <1)){
                  ?>
                    <h5>Feature  <a style="float:right;" href="#" data-loading-text="Loading..."  onclick="loadTabData()" ><small style="font-size:12px">View All</small></a></h5>
                    <div class="side-item border_bottom">
                    <?php $i=0; ?>
                    @foreach($all_counts['feature'] as $feature)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                      <div class="checkbox">
                          <label>
                            <input
                            <?php if(isset($request_data->feature) && in_array($feature->count_id, $request_data->feature)){ ?> checked='checked' <?php }?> 
                            type="checkbox" onchange="submitForm()" name="feature[]" id="checkboxSuccess" value="{{$feature->count_id}}">
                            {{$feature->count_name}} ({{$feature->total_count}}) </label>
                        </div>
                    @endforeach
                    
                  </div>
                <?php 
                }
              ?>
            
                <?php 
                if(isset($all_counts['fit_type']) &&  !(isset($all_counts['fit_type'][0]) && count($all_counts['fit_type']) == 1 && $all_counts['fit_type'][0]->count_name == "Unspecified" && $all_counts['fit_type'][0]->total_count <1)){
                  ?>
                    <h5>Fit Type  <a style="float:right;" href="#" data-loading-text="Loading..."  onclick="loadTabData()" ><small style="font-size:12px">View All</small></a></h5>
                    <div class="side-item border_bottom">
                    <?php $i=0; ?>
                    @foreach($all_counts['fit_type'] as $fit_type)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                      <div class="checkbox">
                          <label>
                            <input
                            <?php if(isset($request_data->fit_type) && in_array($fit_type->count_id, $request_data->fit_type)){ ?> checked='checked' <?php }?> 
                            type="checkbox" onchange="submitForm()" name="fit_type[]" id="checkboxSuccess" value="{{$fit_type->count_id}}">
                            {{$fit_type->count_name}} ({{$fit_type->total_count}}) </label>
                        </div>
                    @endforeach
                    
                  </div>
                <?php 
                }
              ?>
                <?php 
                if(isset($all_counts['occasion']) &&  !(isset($all_counts['occasion'][0]) && count($all_counts['occasion']) == 1 && $all_counts['occasion'][0]->count_name == "Unspecified" && $all_counts['occasion'][0]->total_count <1)){
                  ?>
                    <h5>Occasion  <a style="float:right;" href="#" data-loading-text="Loading..."  onclick="loadTabData()" ><small style="font-size:12px">View All</small></a></h5>
                    <div class="side-item border_bottom">
                    <?php $i=0; ?>
                    @foreach($all_counts['occasion'] as $occasion)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                      <div class="checkbox">
                          <label>
                            <input
                            <?php if(isset($request_data->occasion) && in_array($occasion->count_id, $request_data->occasion)){ ?> checked='checked' <?php }?> 
                            type="checkbox" onchange="submitForm()" name="occasion[]" id="checkboxSuccess" value="{{$occasion->count_id}}">
                            {{$occasion->count_name}} ({{$occasion->total_count}}) </label>
                        </div>
                    @endforeach
                    
                  </div>
                <?php 
                }
              ?>

              @endif

            @if(isset($colors))
             <h5>Colors </h5>     
            <div class="side-item ">
              <?php  $i=0;?>
              @foreach($colors as $color)
             
                @if($i >5)
                  <?php  break; ?>
                @endif
                <?php $i++;?>

                <button type="button" class="btn btn-circle"  title ="{{$color->color_name}}" style="height: 30px; width: 30px;margin-bottom:3px; border:  <?php if(isset($request_data->color)  && in_array($color->id, $request_data->color)){ echo '2px solid black';  }else{ echo '1px solid lightgray'; }?> ;padding: 5px;border-radius: 100%;margin-right:2px;background:{{$color->color_code}}">
              
                    <input
                         <?php if(isset($request_data->color) && in_array($color->id, $request_data->color)){ ?> checked='checked' <?php }?> 
                        type="checkbox" onchange="submitForm()" name="color[]" id="checkboxSuccess" value="{{$color->id}}">
                  </button>
              @endforeach
              
            </div>
            <br/>
            @endif

            @if(isset($other_counts['size_map']))
                <h5>Sizes <a style="float:right;"href="#" data-loading-text="Loading..."  onclick="loadTabData()"><small style="font-size:12px">View All</small></a></h5>
            <div class="side-item ">
              <?php  $i=0; ?>
              @foreach($other_counts['size_map'] as $size)
              
                @if($i >5)
                <?php break; ?>
                @endif
                <?php $i++;?> 
                <button type="button" class="btn btn-circle"   title ="{{$size->count_name}}" style="margin-bottom:3px; border:   <?php if(isset($request_data->size) && in_array($size->count_id, $request_data->size)){ echo '2px double black'; }else{ echo '1px solid lightgray'; }?>; margin-right:2px;">
                  <input
                   <?php if(isset($request_data->size) && in_array($size->count_id, $request_data->size)){ ?> checked='checked' <?php }?> 
                  type="checkbox" onchange="submitForm()" name="size[]" id="checkboxSuccess" value="{{$size->count_id}}">
                {{$size->count_name}}
              </button>
              @endforeach
            
            </div>
           
            <br/>
            @endif

            @if(isset($other_counts['garment_care']))
            <h5>Garment Care <a style="float:right;"href="#" data-loading-text="Loading..."  onclick="loadTabData()"><small style="font-size:12px">View All</small></a></h5>
            <div class="side-item ">
              <?php  $i=0; ?>
              @foreach($other_counts['garment_care'] as $garment_care)
                @if($i >5)
                <?php break; ?>
                @endif
                <?php $i++;?> 
                   <label class="label " style="background: transparent;color:inherit; font-size:12px;font-weight:normal;padding: 10px">
                    <input
                     <?php if(isset($request_data->garment_care) && in_array($garment_care->count_id, $request_data->garment_care)){ ?> checked='checked' <?php }?> 
                    type="checkbox" onchange="submitForm()" name="garment_care[]" id="checkboxSuccess" value="{{$garment_care->count_id}}">
                  {{$garment_care->count_name}} ({{$garment_care->total_count}})
                  </label>
              @endforeach
            
            </div>
          
              <br/>

            @endif


            @if($other_counts['season'])
                <h5>Season <a style="float:right;"href="#" data-loading-text="Loading..."  onclick="loadTabData()"><small style="font-size:12px">View All</small></a></h5>
            <div class="side-item ">
              <?php  $i=0; ?>
              @foreach($other_counts['season'] as $season)
              
                @if($i >5)
                <?php break; ?>
                @endif
                <?php $i++;?> 
                  <label class="label " style="background: transparent;color:inherit; font-size:12px;font-weight:normal;padding: 10px">
                    <input
                     <?php if(isset($request_data->season) && in_array($season->count_id, $request_data->season)){ ?> checked='checked' <?php }?> 
                    type="checkbox" onchange="submitForm()" name="season[]" id="checkboxSuccess" value="{{$season->count_id}}">
                    {{$season->count_name}} ({{$season->total_count}})
                  </label>
              @endforeach
            
            </div>
            @endif
          </aside> -->

          <!--Left Part End -->

          <!--Middle Part Start-->
          <div id="content" class="col-sm-12">
            <h1 class="title">
              {{$selected}}

              @if($selected_id && $selected_id !="")
                <button class="btn btn-primary" type="button" style="float: right !important" onclick="setCategoryAlert('{{$selected_id}}','{{$nature}}')">
                  <i class="fa fa-bell"></i> Set Alert For {{$selected}}
                </button>
              @endif

            </h1>
           

            <!-- ///////////top options start //////// -->
            <div class="searchRefineSection d-flex flex-wrap mx-auto justify-content-center align-items-center">
                              <!-- option#01 -->
                <div class="topOptions  d-flex justify-content-center align-items-center mr-2 mt-2">
                  <p class="px-3 py-2 my-auto">Evening Dresses</p>
                </div>               
                              <!-- option#02 -->
                <button class="topOptions  d-flex justify-content-center align-items-center mr-2 mt-2">
                  <p class="px-3 py-2 my-auto">Evening Dresses</p>
                </button>
                              <!-- option#03 -->
                <button class="topOptions  d-flex justify-content-center align-items-center mr-2 mt-2">
                  <p class="px-3 py-2 my-auto">Evening Dresses</p>
                </button>
                              <!-- option#04 -->
                <button class="topOptions  d-flex justify-content-center align-items-center mr-2 mt-2">
                  <p class="px-3 py-2 my-auto">Evening Dresses</p>
                </button>
                              <!-- option#05 -->
                <button class="topOptions  d-flex justify-content-center align-items-center mr-2 mt-2">
                  <p class="px-3 py-2 my-auto">Evening Dresses</p>
                </button>
                              <!-- option#06 -->
                <button class="topOptions  d-flex justify-content-center align-items-center mr-2 mt-2">
                  <p class="px-3 py-2 my-auto">Evening Dresses</p>
                </button>
                              <!-- option#07 -->
                <button class="topOptions  d-flex justify-content-center align-items-center mr-2 mt-2">
                  <p class="px-3 py-2 my-auto">Evening Dresses</p>
                </button>

            </div>

            <!--  filter for large screen start -->
            <div class="row">

                <div id="filters-panel" class="filters-panel row hidden--mobile loaded mx-2" data-filters-panel="">
                    <div class="filters-panel__container " data-filters-panel-holder="">
                                                      <!-- Size  -->
                      <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Size" data-filter-options-name-fs="Size">
                        <div class="filter-option__title" data-filter-options-title="">Size </div>
                        
                        <div class="filter-option__container" data-filter-options-container="">
                          <ul class="filter-option__items" data-filter-options-items="">
                            
                      
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="xs"   data-option-value="XS" data-available="256">
                                    <!-- <div class="newfilter-checkbox__field"></div> -->
                                    <!-- <div class="newfilter-checkbox__check"> -->
                                      <!--?xml version="1.0" encoding="UTF-8"?-->
                                      <!-- <svg width="9px" height="10px" viewBox="0 0 9 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Check Icon</title><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-63.000000, -1482.000000)" fill="#333333"><g transform="translate(41.000000, 527.000000)"><g transform="translate(18.000000, 894.000000)"><g transform="translate(0.000000, 58.000000)"><path d="M7.14038771,12.2801496 C6.8652819,12.2801496 6.6050945,12.1451888 6.43783118,11.9137137 L4.17870166,8.78535345 C3.8848846,8.37848234 3.96137312,7.79913181 4.34937852,7.49089611 C4.73801606,7.18252785 5.2901241,7.26326571 5.58406758,7.66987168 L7.06984128,9.72716264 L10.806906,3.43544241 C11.0641856,3.00258669 11.6074437,2.87014478 12.0211138,3.13953614 C12.4342783,3.40919266 12.5604527,3.97926297 12.3030467,4.41251641 L7.88871093,11.8446424 C7.73535461,12.1030301 7.47061583,12.2655664 7.18071802,12.2793542 C7.16706387,12.2798845 7.15378901,12.2801496 7.14038771,12.2801496 L7.14038771,12.2801496 Z"></path></g></g></g></g></g></svg></div> -->
                                    <!-- <span class="newfilter-checkbox__label">XS</span> -->
                                    <input type="checkbox"id="XS"value="XS" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                    <label for="XS"class="px-2 size-label">XS</label>
                                </div>
                              </li>
                    
                      
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="s" data-option-value="S" data-available="256">
                                  <!-- <div class="newfilter-checkbox__field"></div>
                                  <div class="newfilter-checkbox__check"> -->
                                      <!--?xml version="1.0" encoding="UTF-8"?-->
                                    <!-- <svg width="9px" height="10px" viewBox="0 0 9 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Check Icon</title><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-63.000000, -1482.000000)" fill="#333333"><g transform="translate(41.000000, 527.000000)"><g transform="translate(18.000000, 894.000000)"><g transform="translate(0.000000, 58.000000)"><path d="M7.14038771,12.2801496 C6.8652819,12.2801496 6.6050945,12.1451888 6.43783118,11.9137137 L4.17870166,8.78535345 C3.8848846,8.37848234 3.96137312,7.79913181 4.34937852,7.49089611 C4.73801606,7.18252785 5.2901241,7.26326571 5.58406758,7.66987168 L7.06984128,9.72716264 L10.806906,3.43544241 C11.0641856,3.00258669 11.6074437,2.87014478 12.0211138,3.13953614 C12.4342783,3.40919266 12.5604527,3.97926297 12.3030467,4.41251641 L7.88871093,11.8446424 C7.73535461,12.1030301 7.47061583,12.2655664 7.18071802,12.2793542 C7.16706387,12.2798845 7.15378901,12.2801496 7.14038771,12.2801496 L7.14038771,12.2801496 Z"></path></g></g></g></g></g></svg></div>
                                  <span class="newfilter-checkbox__label">S</span> -->

                                    <input type="checkbox"id="S"value="S" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                    <label for="S"class="px-2 size-label">S</label>
                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="m" data-option-value="M" data-available="256">
                                  <!-- <div class="newfilter-checkbox__field"></div>
                                  <div class="newfilter-checkbox__check"> -->
                                    <!--?xml version="1.0" encoding="UTF-8"?-->
                                    <!-- <svg width="9px" height="10px" viewBox="0 0 9 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Check Icon</title><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-63.000000, -1482.000000)" fill="#333333"><g transform="translate(41.000000, 527.000000)"><g transform="translate(18.000000, 894.000000)"><g transform="translate(0.000000, 58.000000)"><path d="M7.14038771,12.2801496 C6.8652819,12.2801496 6.6050945,12.1451888 6.43783118,11.9137137 L4.17870166,8.78535345 C3.8848846,8.37848234 3.96137312,7.79913181 4.34937852,7.49089611 C4.73801606,7.18252785 5.2901241,7.26326571 5.58406758,7.66987168 L7.06984128,9.72716264 L10.806906,3.43544241 C11.0641856,3.00258669 11.6074437,2.87014478 12.0211138,3.13953614 C12.4342783,3.40919266 12.5604527,3.97926297 12.3030467,4.41251641 L7.88871093,11.8446424 C7.73535461,12.1030301 7.47061583,12.2655664 7.18071802,12.2793542 C7.16706387,12.2798845 7.15378901,12.2801496 7.14038771,12.2801496 L7.14038771,12.2801496 Z"></path></g></g></g></g></g></svg></div> -->
                                  <!-- <span class="newfilter-checkbox__label">M</span> -->
                                  
                                  <input type="checkbox"id="M"value="M" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                    <label for="M"class="px-2 size-label">M</label>
                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="l" data-option-value="L" data-available="256">
                                  <!-- <div class="newfilter-checkbox__field"></div> -->
                                  <!-- <div class="newfilter-checkbox__check"> -->
                                    <!--?xml version="1.0" encoding="UTF-8"?-->
                                    <!-- <svg width="9px" height="10px" viewBox="0 0 9 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Check Icon</title><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-63.000000, -1482.000000)" fill="#333333"><g transform="translate(41.000000, 527.000000)"><g transform="translate(18.000000, 894.000000)"><g transform="translate(0.000000, 58.000000)"><path d="M7.14038771,12.2801496 C6.8652819,12.2801496 6.6050945,12.1451888 6.43783118,11.9137137 L4.17870166,8.78535345 C3.8848846,8.37848234 3.96137312,7.79913181 4.34937852,7.49089611 C4.73801606,7.18252785 5.2901241,7.26326571 5.58406758,7.66987168 L7.06984128,9.72716264 L10.806906,3.43544241 C11.0641856,3.00258669 11.6074437,2.87014478 12.0211138,3.13953614 C12.4342783,3.40919266 12.5604527,3.97926297 12.3030467,4.41251641 L7.88871093,11.8446424 C7.73535461,12.1030301 7.47061583,12.2655664 7.18071802,12.2793542 C7.16706387,12.2798845 7.15378901,12.2801496 7.14038771,12.2801496 L7.14038771,12.2801496 Z"></path></g></g></g></g></g></svg></div> -->
                                  <!-- <span class="newfilter-checkbox__label">L</span> -->

                                  <input type="checkbox"id="L"value="L" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                    <label for="L"class="px-2 size-label">L</label>
                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="xl" data-option-value="XL" data-available="254">
                                  <!-- <div class="newfilter-checkbox__field"></div> -->
                                  <!-- <div class="newfilter-checkbox__check"> -->
                                    <!--?xml version="1.0" encoding="UTF-8"?-->
                                    <!-- <svg width="9px" height="10px" viewBox="0 0 9 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Check Icon</title><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-63.000000, -1482.000000)" fill="#333333"><g transform="translate(41.000000, 527.000000)"><g transform="translate(18.000000, 894.000000)"><g transform="translate(0.000000, 58.000000)"><path d="M7.14038771,12.2801496 C6.8652819,12.2801496 6.6050945,12.1451888 6.43783118,11.9137137 L4.17870166,8.78535345 C3.8848846,8.37848234 3.96137312,7.79913181 4.34937852,7.49089611 C4.73801606,7.18252785 5.2901241,7.26326571 5.58406758,7.66987168 L7.06984128,9.72716264 L10.806906,3.43544241 C11.0641856,3.00258669 11.6074437,2.87014478 12.0211138,3.13953614 C12.4342783,3.40919266 12.5604527,3.97926297 12.3030467,4.41251641 L7.88871093,11.8446424 C7.73535461,12.1030301 7.47061583,12.2655664 7.18071802,12.2793542 C7.16706387,12.2798845 7.15378901,12.2801496 7.14038771,12.2801496 L7.14038771,12.2801496 Z"></path></g></g></g></g></g></svg></div> -->
                                  <!-- <span class="newfilter-checkbox__label">XL</span> -->

                                  <input type="checkbox"id="XL"value="XL" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                    <label for="XL"class="px-2 size-label">XL</label>
                                </div>
                              </li>
                    
                          </ul>
                        </div>
                      </div>
                                                            <!-- Color -->
                      <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="isp-color-family" data-filter-options-type-fs="Isp-color-family" data-filter-options-name-fs="Color Family">
                        <div class="filter-option__title" data-filter-options-title="">Color</div>
                        <div class="filter-option__container" data-filter-options-container="">
                          <ul class="filter-option__items" data-filter-options-items="">
                            
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="print" data-option-value="Print" data-available="68">
                                  
                                    <!-- <div class="newfilter-checkbox__field" style="background-color: #ffffff;"></div> -->
                                    <!-- <div class="newfilter-checkbox__check"> -->
                                      <!--?xml version="1.0" encoding="UTF-8"?-->
                                      <!-- <svg width="9px" height="10px" viewBox="0 0 9 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Check Icon</title><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-63.000000, -1482.000000)" fill="#333333"><g transform="translate(41.000000, 527.000000)"><g transform="translate(18.000000, 894.000000)"><g transform="translate(0.000000, 58.000000)"><path d="M7.14038771,12.2801496 C6.8652819,12.2801496 6.6050945,12.1451888 6.43783118,11.9137137 L4.17870166,8.78535345 C3.8848846,8.37848234 3.96137312,7.79913181 4.34937852,7.49089611 C4.73801606,7.18252785 5.2901241,7.26326571 5.58406758,7.66987168 L7.06984128,9.72716264 L10.806906,3.43544241 C11.0641856,3.00258669 11.6074437,2.87014478 12.0211138,3.13953614 C12.4342783,3.40919266 12.5604527,3.97926297 12.3030467,4.41251641 L7.88871093,11.8446424 C7.73535461,12.1030301 7.47061583,12.2655664 7.18071802,12.2793542 C7.16706387,12.2798845 7.15378901,12.2801496 7.14038771,12.2801496 L7.14038771,12.2801496 Z"></path></g></g></g></g></g></svg></div> -->
                                    <!-- <span class="newfilter-checkbox__label">Print</span> -->

                                    

                                  <div class="color-options">
                                    <label class="color-custom-check-box d-flex justify-content-start align-items-center"style=" font-size:1.3rem;">Print
                                      <input type="checkbox"name="color-option" id="Print"onClick="addSizeItemToList(this.id)" class="filterInput">
                                      <span class="checkmark1 "style="background-color:Print;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check d-flex" data-clickable-option="" data-option-short-value="pink" data-option-value="Pink" data-available="45">
                                
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Pink
                                      <input type="checkbox"name="color-option" id="Pink"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark "style="background-color:Pink;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="black" data-option-value="Black" data-available="42">
                                    
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Black
                                      <input type="checkbox"name="color-option" id="Black" onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:black;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="blue" data-option-value="Blue" data-available="27">
                                  
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Blue
                                      <input type="checkbox"name="color-option" id="Blue"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:Blue;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="white" data-option-value="White" data-available="25">
                         
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">White
                                      <input type="checkbox"name="color-option" id="White"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 "style="border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="brown" data-option-value="Brown" data-available="23">
                              
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Brown
                                      <input type="checkbox"name="color-option" id="Brown"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:Brown;border:1px solid black;"></span>
                                    </label>
                                  </div>


                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="green" data-option-value="Green" data-available="20">
                           
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Green
                                      <input type="checkbox"name="color-option" id="Green"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:Green;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="beige" data-option-value="Beige" data-available="18">
                                  
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Beige
                                      <input type="checkbox"name="color-option" id="Beige"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 type1"style="background-color:Beige;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="purple" data-option-value="Purple" data-available="16">
                            
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Purple
                                      <input type="checkbox"name="color-option" id="Purple"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:Purple;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="red" data-option-value="Red" data-available="14">
                              
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Red
                                      <input type="checkbox"name="color-option" id="Red"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:Red;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="gray" data-option-value="Gray" data-available="12">
                                 
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Gray
                                      <input type="checkbox"name="color-option" id="Gray"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 type1"style="background-color:Gray;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="yellow" data-option-value="Yellow" data-available="10">
                          
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Yellow
                                      <input type="checkbox"name="color-option" id="Yellow"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 type1"style="background-color:Yellow;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="orange" data-option-value="Orange" data-available="5">
                                 
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Orange
                                      <input type="checkbox"name="color-option" id="Orange"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 type1"style="background-color:Orange;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="gold" data-option-value="Gold" data-available="3">
                               
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Gold
                                      <input type="checkbox"name="color-option" id="Gold"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 type1"style="background-color:Gold;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                    
                          </ul>
                        </div>
                      </div>
                                                          <!-- Price -->
                      <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="price" data-filter-options-type-fs="Price" data-filter-options-name-fs="Price">
                        <div class="filter-option__title" data-filter-options-title="">Price</div>
                        <div class="filter-option__container" data-filter-options-container="">
                          <ul class="filter-option__items" data-filter-options-items="">
                            
                      
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="30-50" data-option-value="USD:30-USD:50" data-available="15">
                                  <input name="price" type="checkbox"id="$30-$50"value="$30-$50" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="$30-$50"class="px-2 size-label" class="">$30-$50</label>
                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="50-100" data-option-value="USD:50-USD:100" data-available="154">
                              
                                <input name="price" type="checkbox"id="$50-$100"value="$50-$100" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="$50-$100"class="px-2 size-label" class="">$50-$100</label>
                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="100-150" data-option-value="USD:100-USD:150" data-available="79">
                          
                                <input name="price" type="checkbox"id="$100-$150"value="$100-$150" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="$100-$150"class="px-2 size-label" class="">$100-$150</label>

                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="150-200" data-option-value="USD:150-USD:200" data-available="8">
                           
                                <input name="price" type="checkbox"id="$150-$200"value="$150-$200" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="$150-$200"class="px-2 size-label" class="">$150-$200</label>
                                
                              </div>
                            </li>
                    
                          </ul>
                        </div>
                      </div>
                                                      <!-- Dress Length -->
                      <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="dress-length" data-filter-options-type-fs="tag_filter_0.777" data-filter-options-name-fs="Dress Length">
                        <div class="filter-option__title" data-filter-options-title="">Dress Length</div>
                        <div class="filter-option__container" data-filter-options-container="">
                          <ul class="filter-option__items" data-filter-options-items="">
                            
                      
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="midi" data-option-value="vt::Dresses::Dress Length::Midi" data-available="148">
                                
                                  <input name="DressLength" type="checkbox"id="Midi"value="Midi" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Midi"class="px-2 size-label" class="">Midi</label>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="mini" data-option-value="vt::Dresses::Dress Length::Mini" data-available="90">
                                
                                  <input name="DressLength" type="checkbox"id="Mini"value="Mini" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Mini"class="px-2 size-label" class="">Mini</label>
                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="maxi" data-option-value="vt::Dresses::Dress Length::Maxi" data-available="18">
                                 
                                  <input name="DressLength" type="checkbox"id="Maxi"value="Maxi" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Maxi"class="px-2 size-label" class="">Maxi</label>

                                </div>
                              </li>
                    
                          </ul>
                        </div>
                      </div>
                                               <!-- Sleeve Length -->
                      <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="sleeve-length" data-filter-options-type-fs="tag_filter_0.603" data-filter-options-name-fs="Sleeve Length">
                        <div class="filter-option__title" data-filter-options-title="">Sleeve Length</div>
                        <div class="filter-option__container" data-filter-options-container="">
                          <ul class="filter-option__items" data-filter-options-items="">
                            
                      
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="sleeveless" data-option-value="vt::Dresses::Sleeve Length::Sleeveless" data-available="112">
                                

                                  <input name="SleeveLength" type="checkbox"id="Sleeveless"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Sleeveless"class="px-2 size-label" class="">Sleeveless</label>
                                </div>
                              </li>
                                                          
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="long-sleeve" data-option-value="vt::Dresses::Sleeve Length::Long Sleeve" data-available="87">
                                
                                  <input name="SleeveLength" type="checkbox"id="Long Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Long Sleeve"class="px-2 size-label" class="">Long Sleeve</label>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="short-sleeve" data-option-value="vt::Dresses::Sleeve Length::Short Sleeve" data-available="47">
                                 
                                  <input name="SleeveLength" type="checkbox"id="Short Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Short Sleeve"class="px-2 size-label" class="">Short Sleeve</label>
                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="3-4th-sleeve" data-option-value="vt::Dresses::Sleeve Length::3-4th Sleeve" data-available="9">
                                                                   
                                  <input name="SleeveLength" type="checkbox"id="3-4th Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="3-4th Sleeve"class="px-2 size-label" class="">3-4th Sleeve</label>
                                </div>
                              </li>
                    
                          </ul>
                        </div>
                      </div>
                                                        <!-- Neckline -->
                      <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="neckline" data-filter-options-type-fs="tag_filter_0.579" data-filter-options-name-fs="Neckline">
                        <div class="filter-option__title" data-filter-options-title="">Neckline</div>
                        <div class="filter-option__container" data-filter-options-container="">
                          <ul class="filter-option__items" data-filter-options-items="">
                            
                      
                              <li data-clickable-option-li="">


                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                  <input name="Neckline" type="checkbox"id="Sweetheart Neck"value="Sweetheart Neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Sweetheart Neck"class="px-2 size-label" class="">Sweetheart Neck</label>
                                </div>
                                
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                
                                
                                <div class="rowTypeOptions d-flex w-100">
                                  <input name="Neckline" type="checkbox"id="Cowl"value="Cowl" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Cowl"class="px-2 size-label" class="">Cowl</label>
                                </div>

                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                                               <div class="rowTypeOptions d-flex w-100">
                                  <input name="Neckline" type="checkbox"id="Square Neck"value="Cowl" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Square Neck"class="px-2 size-label" class="">Square Neck</label>
                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                
                                <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                  <input name="Neckline" type="checkbox"id="V Neck"value="V Neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="V Neck"class="px-2 size-label" class="">V Neck</label>
                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                

                                <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                  <input name="Neckline" type="checkbox"id="Crewneck"value="Crewneck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Crewneck"class="px-2 size-label" class="">Crewneck</label>
                                </div>
                                
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                
                                  <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                  <input name="Neckline" type="checkbox"id="Scoop Nec"value="Scoop Nec" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Scoop Nec"class="px-2 size-label" class="">Scoop Nec</label>
                                  </div>

                                
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                
                                <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                  <input name="Neckline" type="checkbox"id="Highneck"value="Highneck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Highneck"class="px-2 size-label" class="">Highneck</label>
                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                               

                                <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                  <input name="Neckline" type="checkbox"id="Off Shoulder"value="Off Shoulder" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Off Shoulder"class="px-2 size-label" class="">Off Shoulder</label>
                                </div>
                                
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                

                                <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                  <input name="Neckline" type="checkbox"id="One Shoulder"value="One Shoulderr" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="One Shoulder"class="px-2 size-label" class="">One Shoulder</label>
                                </div>

                              </li>
                            
                              
                              <li data-clickable-option-li="">

                               

                                <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                  <input name="Neckline" type="checkbox"id="Plunge Neckr"value="Plunge Neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Plunge Neckr"class="px-2 size-label" class="">Plunge Neck</label>
                                </div>
                                
                              </li>
                            
                              
                              <li data-clickable-option-li="">

                                
                                
                                <div class="rowTypeOptions d-flex w-100">
                                  <input name="Neckline" type="checkbox"id="Collared"value="Collared" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Collared"class="px-2 size-label" class="">Collared</label>
                                </div>

                              </li>
                    
                          </ul>
                        </div>
                      </div>
                                                        <!-- Pattern -->
                      <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="pattern" data-filter-options-type-fs="tag_filter_0.911" data-filter-options-name-fs="Pattern">
                        <div class="filter-option__title" data-filter-options-title="">Pattern</div>
                          <div class="filter-option__container" data-filter-options-container="">
                            <ul class="filter-option__items" data-filter-options-items="">
                              
                        
                                <li data-clickable-option-li="">
                                  <div class="newfilter-checkbox" data-clickable-option="" data-option-short-value="solid" data-option-value="vt::Dresses::Pattern::Solid" data-available="149">
                                    
                               

                                    <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Solid"value="Solid" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                      <label for="Solid"class="px-2 size-label" class="">Solid</label>
                                    </div>
                                </li>
                              
                                
                                <li data-clickable-option-li="">
                                 

                                    <div class="rowTypeOptions d-flex justify-content-start w-100">
                                        <input name="Pattern" type="checkbox"id="Floral"value="Floral" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Floral"class="px-2 size-label" class="">Floral</label>
                                    </div>

                                </li>
                              
                                
                                <li data-clickable-option-li="">
                                  

                                    <div class="rowTypeOptions d-flex justify-content-start w-100">
                                        <input name="Pattern" type="checkbox"id="Floral Small"value="Floral Small" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Floral Small"class="px-2 size-label" class="">Floral Small</label>
                                    </div>
                                  
                                </li>
                              
                                
                                <li data-clickable-option-li="">
                                  

                                    <div class="rowTypeOptions d-flex justify-content-start w-100">
                                        <input name="Pattern" type="checkbox"id="Lace"value="Lace" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                        <label for="Lace"class="px-2 size-label" class="">Lace</label>
                                    </div>
                                </li>
                              
                                
                                <li data-clickable-option-li="">
                                  

                                    <div class="rowTypeOptions d-flex justify-content-start w-100">
                                        <input name="Pattern" type="checkbox"id="Sequin"value="Sequin" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                        <label for="Sequin"class="px-2 size-label" class="">Sequin</label>
                                    </div>
                                  
                                </li>
                              
                                
                                <li data-clickable-option-li="">
                                  

                                  <div class="rowTypeOptions d-flex justify-content-start w-100">
                                        <input name="Pattern" type="checkbox"id="Texture"value="Texture" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Texture"class="px-2 size-label" class="">Texture</label>
                                  </div>
                                  
                                </li>
                              
                                
                                <li data-clickable-option-li="">
                                  

                                  <div class="rowTypeOptions d-flex justify-content-start w-100">
                                        <input name="Pattern" type="checkbox"id="Animal Print"value="Animal Print" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Animal Print"class="px-2 size-label" class="">Animal Print</label>
                                  </div>

                                </li>
                              
                                
                                <li data-clickable-option-li="">

                                  

                                  <div class="rowTypeOptions d-flex justify-content-start w-100">
                                        <input name="Pattern" type="checkbox"id="Stripe"value="Stripe" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                        <label for="Stripe"class="px-2 size-label" class="">Stripe</label>
                                  </div>
                                  
                                </li>
                              
                            </ul>
                          </div>
                        </div>
                      </div>
                                                              <!-- Sort by -->
                      <div class="filters-panel__sorting filter-sorting" data-filter-sorting="">
                        <div class="filter-sorting__title">Sort by</div>
                        <div class="filter-sorting__container">
                          <ul class="filter-sorting__items" data-sort-by="" aria-label="Sort by">
                            <li data-value="manual">
                              <label class="custom-radio">Featured
                                <input class="bySortRadios  filterInput" type="radio"id="Featured" name="sortby" value="manual"onClick="SortByFun(this.id)" >
                                <span class="checkmark"></span>
                              </label>
                            </li>
                            <li data-value="popularity">
                              <label class="custom-radio">Popularity
                                <input class="bySortRadios filterInput" type="radio" name="sortby"id="Popularity" value="popularity"onClick="SortByFun(this.id)">
                                <span class="checkmark"></span>
                              </label>
                            </li>
                            <li data-value="price-ascending">
                              <label class="custom-radio">Price: Low to High
                                <input class="bySortRadios filterInput" type="radio" name="sortby"id="Price: Low to High" value="price-ascending"onClick="SortByFun(this.id)">
                                <span class="checkmark"></span>
                              </label>
                            </li>
                            <li data-value="price-descending">
                              <label class="custom-radio">Price: High to Low
                                <input class="bySortRadios filterInput" type="radio" name="sortby"id="Price: High to Low" value="price-descending"onClick="SortByFun(this.id)">
                                <span class="checkmark"></span>
                              </label>
                            </li>
                            <li data-value="created-ascending">
                              <label class="custom-radio">Oldest to Newest
                                <input class="bySortRadios filterInput" type="radio" name="sortby"id="Oldest to Newest" value="created-ascending"onClick="SortByFun(this.id)">
                                <span class="checkmark"></span>
                              </label>
                            </li>
                            <li data-value="created-descending">
                              <label class="custom-radio ">Newest to Oldest
                                <input type="radio" name="sortby"id="Newest to Oldest" value="created-descending"onClick="SortByFun(this.id)"class="bySortRadios filterInput">
                                <span class="checkmark"></span>
                              </label>
                            </li>
                            <li data-value="title-ascending">
                              <label class="custom-radio">A-Z
                                <input class="bySortRadios filterInput" type="radio" name="sortby"id="A-Z" value="title-ascending"onClick="SortByFun(this.id)">
                                <span class="checkmark"></span>
                              </label>
                            </li>
                            <li data-value="title-descending">
                              <label class="custom-radio">Z-A
                                <input  class="bySortRadios filterInput" type="radio" name="sortby" id="Z-A" value="title-descending"onClick="SortByFun(this.id)">
                                <span class="checkmark"></span>
                              </label>
                            </li>
                          </ul>
                        </div>
                      </div>

                  
                  </div>
            </div>
            </div>

                <!-- Medium and Mobile screen filter options start -->
            <div class="row cat-mobile-filter-nav mx-2 mb-2">

                <div class="cat-mobile-filter-nav__container">

                    <div class="cat-mob-filte-top d-flex justify-content-start align-items-center" id="mobFilter" >
                      <p class="cat-mob-filter-main-title m-0 pr-2 cat-mob-filter-toggle">Filter</p>
                      <div class="filter-logo-img cat-mob-filter-toggle" onclick="showFilter()" id="filterIconShowHide">
                          <img src="{{asset('image/icons/filter-icon.png')}}" alt="FilteR Icon" style="width:100%;height:100%">
                      </div>
                    </div>

                    <div class="cat-mobile-filter-nav__options d-flex " >

                      <div class="mobCatOption w-100" id="mobFilterOptions">

                        <div class="filter-back-option"onclick="closeFilter()">
                          <i class="fas fa-2x fa-angle-right" ></i>
                        </div>

                        <div class="cat-filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Size" data-filter-options-name-fs="Size">
                                    <!-- mobile size filter -->
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-size" aria-expanded="false" aria-controls="mob-cat-size">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>SIZE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-size">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start  align-items-center" data-filter-options-items="">
                                    <li data-clickable-option-li="" class="m-2 px-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="xs"   data-option-value="XS" data-available="256">
                                          <input type="checkbox"id="XS"value="XS" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="XS"class="px-2 size-label">XS</label>
                                      </div>
                                    </li>
                          
                                    <li data-clickable-option-li="" class="m-2 px-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="s" data-option-value="S" data-available="256">

                                          <input type="checkbox"id="S"value="S" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="S"class="px-2 size-label">S</label>
                                      </div>
                                    </li>
            
                                    <li data-clickable-option-li="" class="m-2 px-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="m" data-option-value="M" data-available="256">

                                          <input type="checkbox"id="M"value="M" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="M"class="px-2 size-label">M</label>
                                      </div>
                                    </li>
                                  
                                    <li data-clickable-option-li="" class="m-2 px-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="l" data-option-value="L" data-available="256">

                                          <input type="checkbox"id="L"value="L" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="L"class="px-2 size-label">L</label>
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="xl" data-option-value="XL" data-available="254">
                                    

                                          <input type="checkbox"id="XL"value="XL" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="XL"class="px-2 size-label">XL</label>
                                      </div>
                                    </li>
                          
                                  </ul>

                                </div>
                              </div>
                            </div>
                                    <!-- mobile color filter -->
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-color" aria-expanded="false" aria-controls="mob-cat-color">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>COLOR</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-color">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="print" data-option-value="Print" data-available="68">
                                        <div class="color-options">
                                          <label class="color-custom-check-box d-flex justify-content-start align-items-center"style=" font-size:1.3rem;">Print
                                            <input type="checkbox"name="color-option" id="Print"onClick="addSizeItemToList(this.id)" class="filterInput">
                                            <span class="checkmark1 "style="background-color:Print;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex dark-check d-flex" data-clickable-option="" data-option-short-value="pink" data-option-value="Pink" data-available="45">
                                      
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Pink
                                            <input type="checkbox"name="color-option" id="Pink"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark "style="background-color:Pink;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>                               
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="black" data-option-value="Black" data-available="42">
                                          
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Black
                                            <input type="checkbox"name="color-option" id="Black" onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark type1"style="background-color:black;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="blue" data-option-value="Blue" data-available="27">
                                        
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Blue
                                            <input type="checkbox"name="color-option" id="Blue"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark type1"style="background-color:Blue;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="white" data-option-value="White" data-available="25">
                               
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">White
                                            <input type="checkbox"name="color-option" id="White"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark1 "style="border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="brown" data-option-value="Brown" data-available="23">
                                    
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Brown
                                            <input type="checkbox"name="color-option" id="Brown"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark type1"style="background-color:Brown;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="green" data-option-value="Green" data-available="20">
                                 
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Green
                                            <input type="checkbox"name="color-option" id="Green"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark type1"style="background-color:Green;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="beige" data-option-value="Beige" data-available="18">
                                        
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Beige
                                            <input type="checkbox"name="color-option" id="Beige"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark1 type1"style="background-color:Beige;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="purple" data-option-value="Purple" data-available="16">
                                  
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Purple
                                            <input type="checkbox"name="color-option" id="Purple"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark type1"style="background-color:Purple;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="red" data-option-value="Red" data-available="14">
                                    
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Red
                                            <input type="checkbox"name="color-option" id="Red"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark type1"style="background-color:Red;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="gray" data-option-value="Gray" data-available="12">
                                       
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Gray
                                            <input type="checkbox"name="color-option" id="Gray"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark1 type1"style="background-color:Gray;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="yellow" data-option-value="Yellow" data-available="10">
                                
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Yellow
                                            <input type="checkbox"name="color-option" id="Yellow"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark1 type1"style="background-color:Yellow;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="orange" data-option-value="Orange" data-available="5">
                                       
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Orange
                                            <input type="checkbox"name="color-option" id="Orange"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark1 type1"style="background-color:Orange;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="gold" data-option-value="Gold" data-available="3">
                                     
                                        <div class="color-options">
                                          <label class="color-custom-check-box"style=" font-size:1.3rem;">Gold
                                            <input type="checkbox"name="color-option" id="Gold"onClick="addSizeItemToList(this.id)"class="filterInput">
                                            <span class="checkmark1 type1"style="background-color:Gold;border:1px solid black;"></span>
                                          </label>
                                        </div>
      
                                      </div>
                                    </li>
                          
                                  </ul>

                                </div>
                              </div>
                            </div>
                                    <!-- mobile price filter -->
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-price" aria-expanded="false" aria-controls="mob-cat-price">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>PRICE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-price">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                            
                      
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="30-50" data-option-value="USD:30-USD:50" data-available="15">
                                            <input name="price" type="checkbox"id="$30-$50"value="$30-$50" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                            <label for="$30-$50"class="px-2 size-label" class="">$30-$50</label>
                                        </div>
                                      </li>
                                                                          
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="50-100" data-option-value="USD:50-USD:100" data-available="154">
                                        
                                          <input name="price" type="checkbox"id="$50-$100"value="$50-$100" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                            <label for="$50-$100"class="px-2 size-label" class="">$50-$100</label>
                                        </div>
                                      </li>
                                                                          
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="100-150" data-option-value="USD:100-USD:150" data-available="79">
                                    
                                          <input name="price" type="checkbox"id="$100-$150"value="$100-$150" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="$100-$150"class="px-2 size-label" class="">$100-$150</label>
          
                                        </div>
                                      </li>
                                                                          
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="150-200" data-option-value="USD:150-USD:200" data-available="8">
                                     
                                          <input name="price" type="checkbox"id="$150-$200"value="$150-$200" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="$150-$200"class="px-2 size-label" class="">$150-$200</label>
                                          
                                        </div>
                                      </li>
                              
                                  </ul>
                                  
                                </div>
                              </div>
                            </div>
                                  <!-- mobile dress length filter -->
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-length" aria-expanded="false" aria-controls="mob-cat-length">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>DRESS LENGTH</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-length">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                            
                                                                          
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="midi" data-option-value="vt::Dresses::Dress Length::Midi" data-available="148">
                                        
                                          <input name="DressLength" type="checkbox"id="Midi"value="Midi" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Midi"class="px-2 size-label" class="">Midi</label>

                                        </div>
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="mini" data-option-value="vt::Dresses::Dress Length::Mini" data-available="90">
                                        
                                          <input name="DressLength" type="checkbox"id="Mini"value="Mini" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Mini"class="px-2 size-label" class="">Mini</label>
                                        </div>
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="maxi" data-option-value="vt::Dresses::Dress Length::Maxi" data-available="18">
                                        
                                          <input name="DressLength" type="checkbox"id="Maxi"value="Maxi" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Maxi"class="px-2 size-label" class="">Maxi</label>

                                        </div>
                                      </li>
                              
                                  </ul>

                                </div>
                              </div>
                            </div>
                                    <!-- mobile Sleeve Length filter -->
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-sleeveeLength" aria-expanded="false" aria-controls="mob-cat-sleeveeLength">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>SLEEVE LENGTH</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-sleeveeLength">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                      
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="sleeveless" data-option-value="vt::Dresses::Sleeve Length::Sleeveless" data-available="112">
                                        
        
                                          <input name="SleeveLength" type="checkbox"id="Sleeveless"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Sleeveless"class="px-2 size-label" class="">Sleeveless</label>
                                        </div>
                                      </li>
                                                                  
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="long-sleeve" data-option-value="vt::Dresses::Sleeve Length::Long Sleeve" data-available="87">
                                        
                                          <input name="SleeveLength" type="checkbox"id="Long Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Long Sleeve"class="px-2 size-label" class="">Long Sleeve</label>
        
                                        </div>
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="short-sleeve" data-option-value="vt::Dresses::Sleeve Length::Short Sleeve" data-available="47">
                                         
                                          <input name="SleeveLength" type="checkbox"id="Short Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Short Sleeve"class="px-2 size-label" class="">Short Sleeve</label>
                                        </div>
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="3-4th-sleeve" data-option-value="vt::Dresses::Sleeve Length::3-4th Sleeve" data-available="9">
                                                                           
                                          <input name="SleeveLength" type="checkbox"id="3-4th Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="3-4th Sleeve"class="px-2 size-label" class="">3-4th Sleeve</label>
                                        </div>
                                      </li>
                              
                                  </ul>

                                </div>
                              </div>
                            </div>
                                    <!-- mobile nekline filter -->
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-neckline" aria-expanded="false" aria-controls="mob-cat-neckline">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>NECKLINE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-neckline">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start  align-items-center" data-filter-options-items="">                                                              

                                                                  
                                      <li data-clickable-option-li=""class="m2 p-4">


                                        <div class="rowTypeOptions d-flex justify-content-start w-100">
                                          <input name="Neckline" type="checkbox"id="Sweetheart Neck"value="Sweetheart Neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Sweetheart Neck"class="px-2 size-label" class="">Sweetheart Neck</label>
                                        </div>
                                        
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        
                                        
                                        <div class="rowTypeOptions d-flex w-100">
                                          <input name="Neckline" type="checkbox"id="Cowl"value="Cowl" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Cowl"class="px-2 size-label" class="">Cowl</label>
                                        </div>
        
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                                                       <div class="rowTypeOptions d-flex w-100">
                                          <input name="Neckline" type="checkbox"id="Square Neck"value="Cowl" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Square Neck"class="px-2 size-label" class="">Square Neck</label>
                                        </div>
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        
                                        <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                          <input name="Neckline" type="checkbox"id="V Neck"value="V Neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="V Neck"class="px-2 size-label" class="">V Neck</label>
                                        </div>
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        
        
                                        <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                          <input name="Neckline" type="checkbox"id="Crewneck"value="Crewneck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Crewneck"class="px-2 size-label" class="">Crewneck</label>
                                        </div>
                                        
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        
                                          <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                          <input name="Neckline" type="checkbox"id="Scoop Nec"value="Scoop Nec" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Scoop Nec"class="px-2 size-label" class="">Scoop Nec</label>
                                          </div>
        
                                        
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        
                                        <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                          <input name="Neckline" type="checkbox"id="Highneck"value="Highneck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Highneck"class="px-2 size-label" class="">Highneck</label>
                                        </div>
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                       
        
                                        <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                          <input name="Neckline" type="checkbox"id="Off Shoulder"value="Off Shoulder" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Off Shoulder"class="px-2 size-label" class="">Off Shoulder</label>
                                        </div>
                                        
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        
        
                                        <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                          <input name="Neckline" type="checkbox"id="One Shoulder"value="One Shoulderr" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="One Shoulder"class="px-2 size-label" class="">One Shoulder</label>
                                        </div>
        
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
        
                                       
        
                                        <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                          <input name="Neckline" type="checkbox"id="Plunge Neckr"value="Plunge Neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Plunge Neckr"class="px-2 size-label" class="">Plunge Neck</label>
                                        </div>
                                        
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
        
                                        
                                        
                                        <div class="rowTypeOptions d-flex w-100">
                                          <input name="Neckline" type="checkbox"id="Collared"value="Collared" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Collared"class="px-2 size-label" class="">Collared</label>
                                        </div>
        
                                      </li>
                              
                                  </ul>

                                </div>
                              </div>
                              
                            </div>
                                    <!-- mobile nekline filter -->
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-pattern" aria-expanded="false" aria-controls="mob-cat-pattern">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>PATTERN</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-pattern">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              

                                    
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        <div class="newfilter-checkbox" data-clickable-option="" data-option-short-value="solid" data-option-value="vt::Dresses::Pattern::Solid" data-available="149">
                                          
                                     
      
                                          <div class="rowTypeOptions d-flex justify-content-start w-100">
                                            <input name="Pattern" type="checkbox"id="Solid"value="Solid" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                            <label for="Solid"class="px-2 size-label" class="">Solid</label>
                                          </div>
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                       
      
                                          <div class="rowTypeOptions d-flex justify-content-start w-100">
                                              <input name="Pattern" type="checkbox"id="Floral"value="Floral" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                              <label for="Floral"class="px-2 size-label" class="">Floral</label>
                                          </div>
      
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        
      
                                          <div class="rowTypeOptions d-flex justify-content-start w-100">
                                              <input name="Pattern" type="checkbox"id="Floral Small"value="Floral Small" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                              <label for="Floral Small"class="px-2 size-label" class="">Floral Small</label>
                                          </div>
                                        
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        
      
                                          <div class="rowTypeOptions d-flex justify-content-start w-100">
                                              <input name="Pattern" type="checkbox"id="Lace"value="Lace" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                              <label for="Lace"class="px-2 size-label" class="">Lace</label>
                                          </div>
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        
      
                                          <div class="rowTypeOptions d-flex justify-content-start w-100">
                                              <input name="Pattern" type="checkbox"id="Sequin"value="Sequin" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                              <label for="Sequin"class="px-2 size-label" class="">Sequin</label>
                                          </div>
                                        
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        
      
                                        <div class="rowTypeOptions d-flex justify-content-start w-100">
                                              <input name="Pattern" type="checkbox"id="Texture"value="Texture" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                              <label for="Texture"class="px-2 size-label" class="">Texture</label>
                                        </div>
                                        
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">
                                        
                                        <div class="rowTypeOptions d-flex justify-content-start w-100">
                                              <input name="Pattern" type="checkbox"id="Animal Print"value="Animal Print" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                              <label for="Animal Print"class="px-2 size-label" class="">Animal Print</label>
                                        </div>
      
                                      </li>
                                    
                                      
                                      <li data-clickable-option-li=""class="m2 p-4">

                                        <div class="rowTypeOptions d-flex justify-content-start w-100">
                                              <input name="Pattern" type="checkbox"id="Stripe"value="Stripe" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                              <label for="Stripe"class="px-2 size-label" class="">Stripe</label>
                                        </div>
                                        
                                      </li>
                              
                                  </ul>

                                </div>
                              </div>

                            </div>
                                    <!-- mobile nekline filter -->
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-sortby" aria-expanded="false" aria-controls="mob-cat-sortby">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>SORT BY</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-sortby">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">   

                                      <li data-value="manual"class="m2 p-4">
                                        <label class="custom-radio">Featured
                                          <input class="bySortRadios  filterInput" type="radio"id="Featured" name="sortby" value="manual"onClick="SortByFun(this.id)" >
                                          <span class="checkmark"></span>
                                        </label>
                                      </li>
                                      <li data-value="popularity"class="m2 p-4">
                                        <label class="custom-radio">Popularity
                                          <input class="bySortRadios filterInput" type="radio" name="sortby"id="Popularity" value="popularity"onClick="SortByFun(this.id)">
                                          <span class="checkmark"></span>
                                        </label>
                                      </li>
                                      <li data-value="price-ascending"class="m2 p-4">
                                        <label class="custom-radio">Price: Low to High
                                          <input class="bySortRadios filterInput" type="radio" name="sortby"id="Price: Low to High" value="price-ascending"onClick="SortByFun(this.id)">
                                          <span class="checkmark"></span>
                                        </label>
                                      </li>
                                      <li data-value="price-descending"class="m2 p-4">
                                        <label class="custom-radio">Price: High to Low
                                          <input class="bySortRadios filterInput" type="radio" name="sortby"id="Price: High to Low" value="price-descending"onClick="SortByFun(this.id)">
                                          <span class="checkmark"></span>
                                        </label>
                                      </li>
                                      <li data-value="created-ascending"class="m2 p-4">
                                        <label class="custom-radio">Oldest to Newest
                                          <input class="bySortRadios filterInput" type="radio" name="sortby"id="Oldest to Newest" value="created-ascending"onClick="SortByFun(this.id)">
                                          <span class="checkmark"></span>
                                        </label>
                                      </li>
                                      <li data-value="created-descending"class="m2 p-4">
                                        <label class="custom-radio ">Newest to Oldest
                                          <input type="radio" name="sortby"id="Newest to Oldest" value="created-descending"onClick="SortByFun(this.id)"class="bySortRadios filterInput">
                                          <span class="checkmark"></span>
                                        </label>
                                      </li>
                                      <li data-value="title-ascending"class="m2 p-4">
                                        <label class="custom-radio">A-Z
                                          <input class="bySortRadios filterInput" type="radio" name="sortby"id="A-Z" value="title-ascending"onClick="SortByFun(this.id)">
                                          <span class="checkmark"></span>
                                        </label>
                                      </li>
                                      <li data-value="title-descending"class="m2 p-4">
                                        <label class="custom-radio">Z-A
                                          <input  class="bySortRadios filterInput" type="radio" name="sortby" id="Z-A" value="title-descending"onClick="SortByFun(this.id)">
                                          <span class="checkmark"></span>
                                        </label>
                                      </li>
                              
                                  </ul>

                                </div>
                              </div>

                            </div>
                            
                        </div>

                      </div>

                    </div>

                </div>
            </div>
            
                    <!-- Selected Filter section  -->
            <div class=" SelectedFilterArea mx-2">

              <div class=" selectedFilterSection d-flex justify-content-start align-items-center flex-wrap
               mx-auto my-0" id="selectedFilterSection">
                <!-- selected filtering items will be shown here -->
              </div>

            </div>

            <div id="clearAllButton" class="mx-2 my-auto d-none">
              <p onClick="clearAll()" class="m-0" style="pointer: coursor;">ClearAll</p>
            </div>


                <!-- ###########################################old section ############################-->

            
            @if($products && $products->total() >0 )

              <div class="category-list-thumb row px-3 mx-auto">
              </div>

              <div class="product-filter d-none">
                        <!-- //////////////this code is keep to maintain  grid-view start  ///////////////// -->
                <div class="row">
                  
                  <div class="col-md-4 col-sm-5">
                    <div class="btn-group">
                    <!--  <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button> -->
                      <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                    </div>
                    <a href="#" id="compare-total">Product Compare (0)</a> </div>
                  <div class="col-sm-2 text-right">
                    <label class="control-label" for="input-sort">Sort By:</label>
                  </div>
                  
                  <div class="col-md-3 col-sm-2 text-right">
                    <select id="input-sort" value="{{isset($request_data->sort) ? $request_data->sort :''}}" name="sort" onchange="submitForm()" class="form-control col-sm-3">
                      <option value="">Default</option>
                      <option 
                    {{isset($request_data->sort) && $request_data->sort == 'name-asc'? 'selected' :''}}
                      value="name-asc"
                      >Name (A - Z)</option>
                      <option 
                      {{isset($request_data->sort) && $request_data->sort == 'name-desc'? 'selected' :''}}
                      value="name-desc"
                      >Name (Z - A)</option>
                      <option 
                      {{isset($request_data->sort) && $request_data->sort == 'price-asc'? 'selected' :''}}
                      value="price-asc"
                      >Price (Low &gt; High)</option>
                      <option 
                    {{isset($request_data->sort) && $request_data->sort == 'price-desc'? 'selected' :''}}
                      value="price-desc"
                      >Price (High &gt; Low)</option>
                    </select>
                  </div>

                  <div class="col-sm-1 text-right">
                    <label class="control-label" for="input-limit">Show:</label>
                  </div>
                
                  <div class="col-sm-2 text-right">
                    <select id="input-limit"  name="limit" onchange="submitForm()" class="form-control">
                        <option 
                      value="10" 
                    {{isset($request_data->limit) && $request_data->limit == 10? 'selected' :''}}
                      >10</option>
                      <option 
                      value="20" 
                    {{isset($request_data->limit) && $request_data->limit == 20? 'selected' :''}}
                      >20</option>
                      <option 
                      {{isset($request_data->limit) && $request_data->limit == '25'? 'selected' :''}}
                      value="25"
                      >25</option>
                      <option 
                    {{isset($request_data->limit) && $request_data->limit == '50'? 'selected' :''}}
                      value="50"
                      >50</option>
                      <option 
                      {{isset($request_data->limit) && $request_data->limit == '75'? 'selected' :''}}
                      value="75"
                      >75</option>
                      <option 
                      {{isset($request_data->limit) && $request_data->limit == '100'? 'selected' :''}}
                      value="100"
                      >100</option>
                    </select>
                  </div>

                </div>

                      <!-- //////////////this code is keep to maintain  grid-view start  ///////////////// -->
              </div>
            
              <!-- <br /> -->

            <div class="row products-category px-3 mx-3 w-100"style="">
                 <?php 
              $i=1;
              ?>
              @foreach($products as $product)
                   <?php 
               $product_image = "";

               if(strpos($product->image,',')!==false){
                  $product_image = explode(",", $product->image)[0];
               }else{
                  $product_image = $product->image;
               }
               ?>
              <div class="product-layout-cat product-list col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="product-thumb">
                  <div class="image"><a href="#" onclick="redirectProduct('{{$product->id}}','yes')"><img src="{{$product->image}}" alt="{{$product->name}}" title="{{$product->name}}" class="img-responsive" /></a></div>
                  <div>

                    <div class="caption">
                      <h4><a href="#" onclick="redirectProduct('{{$product->id}}','no')">{{$product->name}}</a></h4>
                            @if($product->sale_price && $product->sale_price !="")
                           <p class="price"> <span class="price-new">${{$product->sale_price}}</span> <span class="price-old">${{$product->price}}</span>
                            @if($product->price>0)
                              <?php 

                              $saving = ($product->sale_price*100)/ $product->price;
                              $saving = 100-(int)$saving;
                              ?>
                              <span class="saving">-{{$saving}}%</span> </p>
                            @endif
                        @else
                        <p class="price"> ${{$product->price}} </p>
                        @endif
                    </div>
                    
                    <div class="caption row attributes" >
                      <div class="col-md-6 " style="line-break:anywhere;text-align: left"><?php echo $product->color; ?></div>
                      <div class="col-md-6 " style="line-break:anywhere;text-align: right"><?php echo $product->size; ?></div>
                    </div>
                   
                    <div class="caption row attributes" >
                      <div class="col-md-6 " style="line-break:anywhere;text-align: left"><?php echo str_replace("|",",",$product->material); ?></div>
                      <div class="col-md-6 " style="line-break:anywhere;text-align: right"><?php echo str_replace("|",",",$product->fit_type); ?></div>
                    </div>

                    <div class="caption row attributes" >
                      <div class="col-md-6 " style="line-break:anywhere;text-align: left"><?php echo str_replace("|",",",$product->dress_length); ?></div>
                      <div class="col-md-6 " style="line-break:anywhere;text-align: right"><?php echo str_replace("|",",",$product->characters); ?></div>
                    </div>
                    <br/>
                 
                      <p><a href="{{$product->store_url}}">{{$product->store_name}}</a></p>
                 
                       <div class="button-group">
                    
                     <!-- <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Set Product Alert" onClick=""><i class="fa fa-bell"></i></button>
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                    </div> -->

                    <div class="add-to-links" style="visibility: visible;">
                      <button type="button" data-toggle="tooltip" title="Set Product Alert" onclick="setProductAlert('{{$product->id}}')"><i class=" fa fa-bell"></i></button>
                      <button type="button" class="icon-{{$product->id}}" data-toggle="tooltip" 

                      @if(isset($product->favourite_ads[0]) && isset($product->favourite_ads[0]->id))
                          title="Remove from favourite" 
                          style="color:red"
                          onclick="removeFavourite('{{$product->id}}')"
                        @else
                          title="Add to favourite" 
                          onclick="addFavourite('{{$product->id}}')"
                        @endif

                      ><i class=" fa fa-heart"></i></button>
                     
                      <button type="button" class="wishlist" onclick="compareProduct('{{$product->id}}')"><i class="fas fa-exchange-alt"></i> Compare this Product</button>
                    </div>

                  </div>
                  </div>
                </div>
              </div>

                <?php 
                $i++;
                ?>
            @endforeach
            </div>
             <div class="row">
                <div class="col-sm-6 text-left">
                 {{$products && $products->total() >0 ? $products->withQueryString()->links('pagination::bootstrap-4') : ""}}
                </div>
             
                  <div class="col-sm-6 text-right">Showing {{count($products->items())}} out of {{$products->total()}} items </div>
     
              </div>
            @else
            <h6>Products not found.</h6>
            @endif
            


          </div>
          <!--Middle Part End -->
        </div>
      </form>
    </div>
  </div>
   <div class="modal fade" id="mdoalallvalue" role="document">
      <form action="{{$_SERVER['PATH_INFO']}}" action="get" id="main_form"> 
        <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
          <div class="modal-content">
             
            <div class="modal-body" id="content-div">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary"  onClick="hideModal2()">Close</button>
              <button type="submit" class="btn btn-primary">Apply</button>
            </div>

          </div>

        </div>
      </form>


  </div>
  <script type="text/javascript">
    $('ul.term-list').each(function(){
      
      var LiN = $(this).find('li').length;
      
      if( LiN > 5){    
        $('li', this).eq(4).nextAll().hide().addClass('toggleable');
        $(this).append('<li class="more">Show More...</li>');    
      }
      
    });


    $('ul.term-list').on('click','.more', function(){
      
      if( $(this).hasClass('less') ){    
        $(this).text('Show More...').removeClass('less');    
      }else{
        $(this).text('Show Less...').addClass('less'); 
      }
      
      $(this).siblings('li.toggleable').slideToggle();
        
    }); 

    $('div.term-list').each(function(){
      
      var LiN = $(this).find('div').length;
      
      if( LiN > 5){    
        $('div', this).eq(4).nextAll().hide().addClass('toggleable');
        $(this).append('<div class="more">Show More...</div>');    
      }
      
    });


    $('div.term-list').on('click','.more', function(){
      
      if( $(this).hasClass('less') ){    
        $(this).text('Show More...').removeClass('less');    
      }else{
        $(this).text('Show Less...').addClass('less'); 
      }
      
      $(this).siblings('div.toggleable').slideToggle();
        
    }); 


    function  submitForm(filter="",value=""){

      if(filter == "price_range"){
        $("#min_price").val("");
        $("#max_price").val("");
      }

      if(filter == "price"){
        $("input[name=price_range]").prop("checked",false);
      }

       $("#main_form").submit();
    }
    function hideModal2(){

      $("#mdoalallvalue").modal('hide');
    }

     function loadTabData(){
    
        let _token   = $('meta[name="csrf-token"]').attr('content');

          $.ajax({
        url: "{{route('create_filter_modal_content')}}",
        type:"GET",
        data:{
          _token: _token,  request_data:<?php echo json_encode($request_data); ?>
        },
        success:function(response){
         
          if(response && response !="") {
     
            $("#content-div").html(response);
            $("#mdoalallvalue").modal('show');
          }
        },
       });
     }

  </script>
  @endsection