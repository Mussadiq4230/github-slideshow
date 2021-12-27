@extends('layouts.app')
@section('content')


<link rel="stylesheet" type="text/css" href="{{asset('css/women_dress_length.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/filterPageTextSection.css')}}">
<div class="women_dress_length_page_body w-100">
    
                            <!-- ############### Dress Style Dress Length Filter  ############-->
        <div class="d-flex justify-content-center align-items-center section-heading w-100 mx-auto py-4">
            <span class="mx-auto w-filter-heading">Dress Length</span>
        </div>
                            
        <div class="w-100 my-3 mx-auto">

            <div class="dressLengthFilterWrapper d-flex justify-content-center align-items-center flex-wrap mx-auto">
                            <!-- card#03 -->
                <div class="dressLengthFilter  my-3 dressLenType1 card1">
                    <a href="">
                        <div class="dressLenImg">
                        <img src="{{asset('image/womenCat/casual1.png')}}" alt="" 
                        style="height:100%;width:100%;object-fit: contain;">
                        </div>
                        <div class="dressStyleTitle d-flex justify-content-center align-items-center">
                        <span>Mini</span>
                        </div>
                    </a>
                </div>

                            <!-- card#04 -->
                
                <div class="dressLengthFilter  my-3 dressLenType2 card2">
                    <a href="">
                    <div class="dressLenImg">
                        <img src="{{asset('image/womenCat/cocktail1.png')}}" alt="" 
                        style="height:100%;width:100%;object-fit: contain;">
                    </div>
                    <div class="dressStyleTitle d-flex justify-content-center align-items-center">
                        <span>Midi</span>
                    </div>
                    </a>
                </div>
            
                            <!-- card#05 -->

                <div class="dressLengthFilter  my-3 dressLenType1 card3">
                    <a href="">
                        <div class="dressLenImg">
                        <img src="{{asset('image/womenCat/formal1.png')}}" alt="" 
                        style="height:100%;width:100%;object-fit: contain;">
                        </div>
                        <div class="dressStyleTitle d-flex justify-content-center align-items-center">
                        <span>Maxi</span>
                        </div>
                    </a>
                </div>
                                                <!-- card#01 -->

                <div class="dressLengthFilter  my-3 dressLenType3 card4">
                    <a href="">
                        <div class="dressLenImg">
                        <img src="{{asset('image/womenCat/casual1.png')}}" alt="" 
                        style="height:100%;width:100%;object-fit: contain;">
                        </div>
                        <div class="dressStyleTitle d-flex justify-content-center align-items-center">
                        <span>Floor length</span>
                        </div>
                    </a>
                </div>

                            <!-- card#02 -->

                <div class="dressLengthFilter  my-3 dressLenType3 card5">
                    <a href="">
                        <div class="dressLenImg">
                        <img src="{{asset('image/womenCat/casual1.png')}}" alt="" 
                        style="height:100%;width:100%;object-fit: contain;">
                        </div>
                        <div class="dressStyleTitle d-flex justify-content-center align-items-center">
                        <span>High Low</span>
                        </div>
                    </a>
                </div>

            </div>

        </div>
                                <!-- ############### text plus image section heading  ############-->

        <div class="d-flex justify-content-center align-items-center section-heading w-100 mx-auto py-4">
            <span class="mx-auto w-filter-heading">Women’s dress length Types</span>
        </div>
                                   <!-- ############### text plus image section   ############-->    
        <div class="row my-3 mx-auto">
            <div class="col-sm-12 col-md-6 col-lg-6 my-3 pt-3 ">

                <div class="text-section-para pt-3">
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


</div>


@endsection