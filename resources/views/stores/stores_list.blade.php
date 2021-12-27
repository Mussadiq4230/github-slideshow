@extends('layouts.app')

@section('content')

	<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i></a></li>
        <li><a href="/site_map">Site Map</a></li>
        <li><a href="">Stores List</a></li>
      </ul>
      <!-- Breadcrumb End-->

      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
        <h1 class="title"> {{$our_category->count_name}} : Stores List</h1>
              
          <div class="manufacturer-info">
             <div class="row">

              @if($stores_list && count($stores_list)>0 )
                @foreach($stores_list as $item)

                    <div class="col-sm-2 col-xs-6 manufacturer">
                      <a href="/shop/{{$item->count_slug}}" class="thumbnail">
                            <img alt="{{$item->count_name}}" title="{{$item->count_name}}" src="/logos/{{$item->image}}" width="120">
                        </a>
                        <a href="/shop/{{$item->count_slug}}">{{$item->count_name}} 
                          @if($item->total_count>0)
                            ({{$item->total_count}})
                          @endif</a>
                    </div>
                @endforeach
              @else
                <div class="col-sm-12">  
                  <h4>Stores not found for this category.</h4>
                </div>
              @endif
                              
            </div>
          </div>
               
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>

@endsection