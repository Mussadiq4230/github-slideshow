@extends('layouts.app')

@section('content')

  <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('site_map')}}">Site Map</a></li>
      </ul>
      <!-- Breadcrumb End-->

      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
        <h1 class="title">Site Map</h1>

            <p class="brand-index"><strong>Category Index:</strong>
              <a href="#Women">Women</a>

              <a href="#Men">Men</a>

              <a href="#Baby">Baby</a>

              <a href="#Girl">Girl</a>

              <a href="#Boy">Boy</a>
            </p>
            <div class="manufacturer-info">
            
                <h4 id="Women" class="manufacturer-title">
                  <a href="/stores/women/all">Women</a>
                </h4>
                <div class="row">
                  @foreach($categories_counts['women'] as $item)
                 
                  <div class="col-sm-2 col-xs-6 manufacturer">
                    <a href="/stores/{{$item['count_id']}}">
                      {{($item['count_name'])}}
                       @if($item['total_count']>0)
                        ({{$item['total_count']}})
                      @endif
                    </a>
                  </div>
                  @endforeach
                </div>

                 <h4 id="Men" class="manufacturer-title">
                  <a href="/stores/men/all">Men</a>
                </h4>
                <div class="row">
                  @foreach($categories_counts['men'] as $item)
                 
                  <div class="col-sm-2 col-xs-6 manufacturer">
                    <a href="/stores/{{$item['count_id']}}">
                      {{($item['count_name'])}}
                       @if($item['total_count']>0)
                        ({{$item['total_count']}})
                      @endif
                    </a>
                  </div>
                  @endforeach
                </div>

                <h4 id="Baby" class="manufacturer-title">
                  <a href="/stores/baby/all">Baby</a>
                </h4>
                <div class="row">
                  @foreach($categories_counts['baby'] as $item)
                 
                  <div class="col-sm-2 col-xs-6 manufacturer">
                    <a href="/stores/{{$item['count_id']}}">
                      {{($item['count_name'])}}
                       @if($item['total_count']>0)
                        ({{$item['total_count']}})
                      @endif
                    </a>
                  </div>
                  @endforeach
                </div>

               
                <h4 id="Girl" class="manufacturer-title">
                  <a href="/stores/girl/all">Girl</a>
                </h4>
                <div class="row">
                  @foreach($categories_counts['girl'] as $item)
                 
                  <div class="col-sm-2 col-xs-6 manufacturer">
                    <a href="/stores/{{$item['count_id']}}">
                      {{($item['count_name'])}} 
                      @if($item['total_count']>0)
                        ({{$item['total_count']}})
                      @endif
                    </a>
                  </div>
                  @endforeach
                </div>

                <h4 id="Boy" class="manufacturer-title">
                  <a href="/stores/boy/all">Boy</a>
                </h4>
                <div class="row">
                  @foreach($categories_counts['boy'] as $item)
                 
                  <div class="col-sm-2 col-xs-6 manufacturer">
                    <a href="/stores/{{$item['count_id']}}">
                      {{($item['count_name'])}}
                       @if($item['total_count']>0)
                        ({{$item['total_count']}})
                      @endif
                    </a>
                  </div>
                  @endforeach
                </div>
            </div>
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>

@endsection