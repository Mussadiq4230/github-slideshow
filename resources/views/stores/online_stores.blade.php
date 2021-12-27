@extends('layouts.app')

@section('content')

	<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('online_stores')}}">Online Sores</a></li>
      </ul>
      <!-- Breadcrumb End-->

      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
        <h1 class="title">Find Your Favorite Online Store</h1>

            <p class="brand-index"><strong>Store Index:</strong>
                @foreach($online_stores as $key=>$value)
                    <a href="#{{$key}}">{{$key}}</a>
                @endforeach
                </p>
              
            <div class="manufacturer-info">

            @foreach($online_stores as $key=>$value)
              <h4 id="{{$key}}" class="manufacturer-title">{{$key}}</h4>
              <div class="row">
              
                @foreach($value as $item)
                    <div class="col-sm-2 col-xs-6 manufacturer">
                    	<a href="/shop/{{$item->count_slug}}" class="thumbnail">
                            <img alt="{{$item->count_name}}" title="{{$item->count_name}}" src="logos/{{$item->image}}" width="120">
                        </a>
                        <a href="/shop/{{$item->count_slug}}">{{$item->count_name}} 
                          @if($item->total_count>0)
                            ({{$item->total_count}})
                          @endif</a>
                    </div>
                @endforeach
                                
              </div>
            @endforeach
              
            
            </div>
               
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>

@endsection