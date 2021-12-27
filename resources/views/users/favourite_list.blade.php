@extends('layouts.app')

@section('content')

<div id="container">
  <div class="container">
    <!-- Breadcrumb Start-->
    <ul class="breadcrumb">
      <li><a href="/"><i class="fa fa-home"></i></a></li>
      <li><a href="/account">My Favourites</a></li>
    </ul>
    <!-- Breadcrumb End-->
    <div class="row">
      <!--Middle Part Start-->
      <div id="content" class="col-sm-12">
       
        <div class="row">
          <div class="col-sm-3">
           @include('users.my_account_bar')
         </div>
         <div class="col-sm-9">

          @foreach (['danger', 'success','warning'] as $status)
          @if(Session::has($status))
          <p class="alert alert-{{$status}} alert-dismissible" role="alert">{{ Session::get($status) }} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></p>
          @endif
          @endforeach

          <h2 class="subtitle">
            Favourites List 
            @if($favourites->total()>0)
              ({{$favourites->total()}})
            @endif
          </h2>

          <div  class="row">
            <div class="col-md-12 ">
              <div class="table-responsive">

                @if($favourites)
                <table class="table table-stripped" style="    border: 1px solid #dee2e6;!important; ">
                  <thead style="background: #283048;color:white;vertical-align: middle">
                    <tr>
                      <td class="text-center">Image</td>
                      <td class="text-left">Product Name</td>
                      <td class="text-center">Brand/Online Store</td>
                      <td class="text-center">Price</td>
                      <td class="text-center">Size</td>
                      <td class="text-center">Color</td>
                      <td class="text-right">Date Added</td>
                      <td></td>                      
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($favourites as $favourite)
                      <tr>
                        <td class="text-center">
                          <a href="#"  onclick="redirectProduct('{{$favourite->product->id}}','yes')">
                            <img class="img-thumbnail" title="{{$favourite->product->name}}" alt="{{$favourite->product->name}}" src="{{$favourite->product->image}}">
                          </a>
                        </td>
                        
                        <td class="text-left">
                          <a href="#" onclick="redirectProduct('{{$favourite->product->id}}','no')">
                            {{$favourite->product->name}}
                          </a>
                        </td>
                        
                        <td class="text-center">{{$favourite->product->store_name}}</td>
                        
                        <td class="text-center">
                          <span class="price-old">
                            {{$favourite->product->currency}}{{$favourite->product->price}}
                          </span> 
                          
                          <span itemprop="price"> {{$favourite->product->currency}}{{$favourite->product->sale_price}}
                          </span>
                        </td>
                        
                        <td class="text-center">{{$favourite->product->size}}</td>
                        
                        <td class="text-center">{{$favourite->product->color}}</td>

                        <td class="text-right">{{date('F d, Y h:i:sa',strtotime($favourite->created_at))}}</td>
                        <td class="text-center">
                          <a class="btn btn-primary" title="" data-toggle="tooltip" href="#" onclick="redirectProduct('{{$favourite->product->id}}','no')" data-original-title="View">
                            <i class="fa fa-eye"></i>
                          </a>
                        </td>

                        <td class="text-center">
                          <a class="btn btn-danger" title="" data-toggle="tooltip" href="{{route('delete_favourite',['id' => $favourite->id])}}" data-original-title="Remove favourite">
                            <i class="fa fa-remove"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                     
                  </tbody>
                </table>
                
                

                @else
                  <b>
                    No favourites found.
                  </b>
                @endif
              </div>

              @if($favourites && $favourites->total() >0)
                <br/>
                <div class="row">

                  <div class="col-sm-6 ">
                    <b>
                     
                      Showing 
                      @if($favourites->currentPage() == 1)
                        1
                      @else
                        {{($favourites->currentPage()-1) * $favourites->perPage()}}
                      @endif

                       to {{$favourites->currentPage() * $favourites->perPage()}} out of {{$favourites->total()}} items
                    </b> 
                  </div>

                  <div class="col-sm-6 text-right" >
                    {{$favourites && $favourites->total() >0 ? $favourites->withQueryString()->links('pagination::bootstrap-4') : ""}}
                  </div>
             
                  
                </div>
               <br/>
              @endif

            </div>

          </div>

          

        </div>
      </div>

    </div>    
  </div>
</div>
@endsection