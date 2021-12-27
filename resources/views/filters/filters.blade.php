@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/category_products.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/filterPageTextSection.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/women_main_categories.css')}}">
<script type="text/javascript" src="{{asset('js/categoryProduct.js')}}"></script>
<div class="women__main_cat__page__body">

    <div class="w-100">
        <div class="container-fluid">
              <!-- Breadcrumb Start-->
          <ul class="breadcrumb">
            <li><a href="/home"><i class="fa fa-home"></i></a></li>
            @foreach($breadcrumbs as $key=>$value)
              <li><a href="{{$key}}">{{$value}}</a></li>
            @endforeach
          </ul>
    
    
      <!-- Breadcrumb End-->
        </div>
    </div>

    <div  class="container-fluid">
              <h3 class="title pl-2">{{$selected}}</h3>
    </div>
                            <!-- ############### Women categories start  ############-->
                                      <!-- heading  -->
    <div class="d-flex justify-content-center align-items-center my-5 w-100 mx-auto">
        <span class="mx-auto w-cat-main-heading mb-4">Popular Women Categories</span>
    </div>

    <div class="row mx-auto my-3 ">

        <div class="col-lg-4 col-md-4 col-sm-12 pl-0 pr-2">

            <div class="categories-list-general w-100 w-cat-type1 justify-content-end align-items-center mr-2 mt-2">
            <div class="w-category-card-img w-100">
                <img src="{{asset('image/womenCat/casual1.png')}}" alt="" style="width:100%; height:100%; object-fit: contain;">
            </div>
            <div class="w-cat-title d-flex justify-content-center align-items-center">
                <span>Casual</span>
            </div>

            </div>

        </div>

        <div class="col-lg-8 col-md-8 col-sm-12 px-0">
            <div class="d-flex justify-content-start align-items-start flex-wrap">
                                <!-- type 01 card01 -->

                            <!-- type2 card02-->
            <div class="categories-list-general w-cat-type2 justify-content-start align-items-center mr-2 mt-2">

                <div class="w-category-card-img w-100">
                <img src="{{asset('image/womenCat/formal1.png')}}" alt="" style="width:100%; height:100%; object-fit: contain;">
                </div>
                <div class="w-cat-title d-flex justify-content-center align-items-center">
                <span>Formal</span>
                </div>

            </div>
                            <!-- type2 card03-->
            <div class="categories-list-general w-cat-type2 justify-content-start align-items-center mr-2 mt-2">

                    <div class="w-category-card-img w-100">
                    <img src="{{asset('image/womenCat/cocktail1.png')}}" alt="" style="width:100%; height:100%; object-fit: contain;">
                    </div>
                    <div class="w-cat-title d-flex justify-content-center align-items-center">
                    <span>Cocktail</span>
                    </div>

            </div>
                                <!-- type2 card04-->
            <div class="categories-list-general w-cat-type2 justify-content-start align-items-center mr-2 mt-2">

                    <div class="w-category-card-img w-100">
                    <img src="{{asset('image/womenCat/jum1.png')}}" alt="" style="width:100%; height:100%; object-fit: contain;">
                    </div>
                    <div class="w-cat-title d-flex justify-content-center align-items-center">
                    <span>Jumpsuits</span>
                    </div>

            </div>
                                <!-- type2 card05-->
            <div class="categories-list-general w-cat-type2 justify-content-start align-items-center mr-2 mt-2">

                    <div class="w-category-card-img w-100">
                    <img src="{{asset('image/womenCat/jumber1.png')}}" alt="" style="width:100%; height:100%; object-fit: contain;">
                    </div>
                    <div class="w-cat-title d-flex justify-content-center align-items-center">
                    <span>Jumper</span> 
                    </div>

            </div>

            </div>
        </div>

    </div>
                            <!-- ############### text plus image section   ############-->
                                    
    <div class="row my-5 mx-auto">
        <div class="col-sm-12 col-md-6 col-lg-6 my-3 pt-3">

        <div class="d-flex justify-content-start align-items-center my-3 w-100 mx-auto">
            <span class=" w-cat-main-heading text-left">Women’s Coats Buying Guide</span>
        </div>

        <div class="text-section-para w-75">
            <p>They're the clothing you wear the most when it's cold outside, and they're one of the larger apparel investments that you'll make: They're your coats, and when you shop for outerwear, you'll want to know just what to look for. Here are a few things to consider when you're shopping for a coat.</p>
            <p>They're the clothing you wear the most when it's cold outside, and they're one of the larger apparel investments that you'll make: They're your coats, and when you shop for outerwear, you'll want to know just what to look for. Here are a few things to consider when you're shopping for a coat.</p>
        </div>

        <div class="text-section-see-more mt-4">
            <button class="read-more">Read more</button>
        </div>

        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 pr-3 my-3 imgDiv">

        <div class="text-section-img-area w-100 mx-auto " >
            <!-- <img 
            src="{{asset('image/womenCat/coat.jpg')}}" alt="" style="width:100%; height:100%; border-radius:5px; object-fit: contain;"
            > -->
        </div>



        </div>

    </div>

                        <!-- ############### page links  ############-->
                    
    <div class="w-100 mx-auto filter_links">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
        
        <div class="links m-2 my-sm-4 py-3">
            
            <a href="{{route('women_dress_length')}}">
            Dress Length
            </a>                        
        </div>
        
        <div class="links m-2 my-sm-4 py-3">
            <a href="{{route('women_sleeve_type')}}">
            Sleeves Type
            </a>                        
        </div>

        <div class="links m-2 my-sm-4 py-3">
            <a href="{{route('women_slevees_length')}}">
            Slevees Length
            </a>                        
        </div>

        <div class="links m-2 my-sm-4 py-3">
            <a href="{{route('women_features')}}">
            Features
            </a>                        
        </div>

        <div class="links m-2 my-sm-4 py-3">
            <a href="{{route('women_occasions')}}">
            Occasions
            </a>                        
        </div>

        <div class="links m-2 my-sm-4 py-3">
            <a href="{{route('women_dress_style')}}">
            Dress Style
            </a>                        
        </div>
        <div class="links m-2 my-sm-4 py-3">
            <a href="{{route('women_materials')}}">
            Materials/Fabric
            </a>                        
        </div>
        <div class="links m-2 my-sm-4">
            <a href="{{route('women_necklines')}}">
            Neckline
            </a>                        
        </div>
        <div class="links m-2 my-sm-4 py-3">
            <a href="{{route('women_patterns')}}">
            Patterns/Print
            </a>                        
        </div>
        <div class="links m-2 my-sm-4 py-3">
            <a href="{{route('women_embellishments')}}">
            Emblishments/Accents
            </a>                        
        </div>

        </div>
    </div>

</div>

@endsection

