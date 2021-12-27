@extends('layouts.app')

@section('content')

<div id="container">
    <div class="container">
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
      <aside id="column-left" class="col-sm-3 hidden-xs">
          <h5 >Categories <a href="{{$_SERVER['PATH_INFO']}}" style="float: right">Clear All</a></h5>
            <div class="box-category border_bottom" >
              <ul id="cat_accordion">
                <li><a href="/shop{{$store_filter}}" style="font-weight: <?php echo "All Categories" == $selected ? "bold": "normal"; ?>">All Categories</a></li>
                @foreach($pc_categories as $cat)

                <li 
                
                ><a href="<?php if($cat->parent_category_name == 'Kids') { echo '#'; }else{ echo '/shop/'.$cat->parent_category_slug; }?>{{$store_filter}}"
                    style="font-weight: <?php echo $cat->parent_category_name == $selected || $cat->parent_category_name == ucfirst($selected_sub1) ? "bold": "normal"; ?>"
                  >{{$cat->parent_category_name}}</a> <span class="down"></span>
                  <ul id="{{$cat->parent_category_slug}}" class="<?php if($cat->parent_category_name !='Kids') {echo 'term-list';} ?>">
                   @if($cat->sub_parent_categories)

                     @foreach($cat->sub_parent_categories as $sub_parent_category)

                     <li ><a  href="/shop/{{$sub_parent_category->parent_category_slug}}{{$store_filter}}"
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
                            href="/shop/{{$sub_parent_category->parent_category_slug}}/{{$category->category_slug}}{{$store_filter}}">{{$category->category_name}}</a> 
                            @if(!empty($category->sub_categories))<span class="down"></span> @endif
                            <ul id="{{$category->category_slug}}">
                              @if(isset($category->sub_categories))
                                @foreach($category->sub_categories as $sub_cat)
                                  <li><a href="/shop/{{$sub_parent_category->parent_category_slug}}/{{$category->category_slug}}/{{$sub_cat->category_slug}}{{$store_filter}}">{{$sub_cat->category_name}} </a></li>
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
                         href="/shop/{{$cat->parent_category_slug}}/{{$category->category_slug}}{{$store_filter}}">{{$category->category_name}}</a> 
                          @if(!empty($category->sub_categories))<span class="down"></span> @endif
                          <ul>
                            @foreach($category->sub_categories as $sub_cat)
                            <li><a 
                              href="/shop/{{$cat->parent_category_slug}}/{{$category->category_slug}}/{{$sub_cat->category_slug}}{{$store_filter}}">{{$sub_cat->category_name}} </a></li>
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

                <?php $i=0; ?>

                @foreach($other_counts['brand'] as $brand)
               
                  @if($i >5)
                    <?php
                      // break; 
                      ?>
                  @endif
                  <?php $i++;?>
                  <div class="checkbox term-item" >
                      <label>
                        <input
                        <?php if((isset($request_data->store) && in_array($brand->count_id, $request_data->store)) || (isset($request_data->brand)  &&  in_array($brand->count_id, $request_data->brand))){?> checked='checked' <?php }?>  
                         type="checkbox" name="brand[]" name="brand_id"  onchange="submitForm()"  id="checkboxSuccess" value="{{$brand->count_id}}">
                        {{$brand->count_name}} ({{$brand->total_count}}) </label>
                    </div>
                @endforeach
              </div>
            @endif

            @if(isset($other_counts['store']))
              <h5 >Online Stores  <a style="float:right;" href="#" data-loading-text="Loading..."  onclick="loadTabData()" ><small style="font-size:12px">View All</small></a></h5>
              <div class="side-item border_bottom term-list">
                <?php $i=0; ?>
                @foreach($other_counts['store'] as $store)
                
                  @if($i >5)
                    <?php 
                     // break; 
                     ?>
                  @endif
                  <?php $i++;?>
                  <div class="checkbox term-item">
                    <label> 
                      <input
                       <?php if((isset($request_data->store) && in_array($store->count_id, $request_data->store)) || (isset($request_data->brand)  &&  in_array($store->count_id, $request_data->brand))){ ?> checked='checked' <?php }?>  
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
        @if($show_filters)


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
           if(isset($all_counts['dress_length']) && !(isset($all_counts['dress_length'][0]) && count($all_counts['dress_length']) == 1  && $all_counts['dress_length'][0]->count_name == "Unspecified" && $all_counts['dress_length'][0]->total_count <1)){
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
           if(isset($all_counts['neckline']) && !(isset($all_counts['neckline'][0]) && count($all_counts['neckline']) == 1 &&  $all_counts['neckline'][0]->count_name == "Unspecified" && $all_counts['neckline'][0]->total_count <1)){
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
           if(isset($all_counts['sleeve_type']) && !(isset($all_counts['sleeve_type'][0])  && count($all_counts['sleeve_type']) == 1 && $all_counts['sleeve_type'][0]->count_name == "Unspecified" && $all_counts['sleeve_type'][0]->total_count <1)){
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
            if(isset($all_counts['material']) && !(isset($all_counts['material'][0]) && count($all_counts['material']) == 1 && $all_counts['material'][0]->count_name == "Unspecified" && $all_counts['material'][0]->total_count <1)){
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
            if(isset($all_counts['character']) && !(isset($all_counts['character'][0]) && count($all_counts['character']) == 1 && $all_counts['character'][0]->count_name == "Unspecified" && $all_counts['character'][0]->total_count <1)){
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
            if(isset($all_counts['closure']) && !(isset($all_counts['closure'][0]) && count($all_counts['closure']) == 1 && $all_counts['closure'][0]->count_name == "Unspecified" && $all_counts['closure'][0]->total_count <1)){
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
            if(isset($all_counts['fabric_type']) && !(isset($all_counts['fabric_type'][0]) && count($all_counts['fabric_type']) == 1 && $all_counts['fabric_type'][0]->count_name == "Unspecified" && $all_counts['fabric_type'][0]->total_count <1)){
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
            if(isset($all_counts['feature']) && !(isset($all_counts['feature'][0]) && count($all_counts['feature']) == 1 && $all_counts['feature'][0]->count_name == "Unspecified" && $all_counts['feature'][0]->total_count <1)){
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
            if(isset($all_counts['fit_type']) && !(isset($all_counts['fit_type'][0]) && count($all_counts['fit_type']) == 1 && $all_counts['fit_type'][0]->count_name == "Unspecified" && $all_counts['fit_type'][0]->total_count <1)){
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
            if(isset($all_counts['occasion']) && !(isset($all_counts['occasion'][0]) && count($all_counts['occasion']) == 1 && $all_counts['occasion'][0]->count_name == "Unspecified" && $all_counts['occasion'][0]->total_count <1)){
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
                  {{$garment_care->count_name}}
                  </label>
              @endforeach
            
            </div>
              <br/>
          @endif
            @if(isset($other_counts['season']))
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
                    {{$season->count_name}}
                  </label>
              @endforeach
            
            </div>
          @endif
          </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <h1 class="title">{{$selected_store->store_name}}
       
            @if($selected_id && $selected_id !="")
              <button class="btn btn-primary" type="button" style="float: right !important" onclick="setStoreAlert('{{$selected_id}}')">
                <i class="fa fa-bell"></i> Set Alert For {{$selected_store->store_name}}
              </button>
            @endif
            
        </h1>
              @if($products && $products->total()>0)
       <!--    <h3 class="subtitle">Similar Stores</h3>
      
          <div class="category-list-thumb row">

            @foreach($similar as $store)
            
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">  <a href="/online_stores_products/{{$store->store_slug}}">
      <?php   $key = array_search($store->store_name, array_column($other_counts['store']->toArray(), 'count_name'));

      ?>
                            
                {{$store->store_name}}({{$other_counts['store']->toArray()[$key]['total_count']}})</a> </div>
            @endforeach

          </div> -->
          <div class="product-filter">
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
          </div>
          <br />
          <div class="row products-category">
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
              <div class="product-layout product-list col-xs-12">
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
                    
                     <div class="add-to-links" style="visibility: visible;">
                      <button type="button" data-toggle="tooltip" title="Set Product Alert" onclick="setProductAlert('{{$product->id}}')"><i class="fa fa-bell"></i></button>
                      <button type="button" data-toggle="tooltip" class="icon-{{$product->id}}" 
                        @if(isset($product->favourite_ads[0]) && isset($product->favourite_ads[0]->id))
                          title="Remove from favourite" 
                          style="color:red"
                          onclick="removeFavourite('{{$product->id}}')"
                        @else
                          title="Add to favourite" 
                          onclick="addFavourite('{{$product->id}}')"
                        @endif
                        

                        ><i class="fa fa-heart "></i></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compareProduct('{{$product->id}}')" ><i class="fas fa-exchange-alt"></i></button>
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