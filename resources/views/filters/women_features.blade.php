@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/women_features.css')}}">
<div class="women_features_page_body w-100">

        <!-- ############### women clothes features filters heading  ############-->
    <div class="d-flex justify-content-center align-items-center section-heading w-100 mx-auto py-4">
        <span class="mx-auto w-filter-heading text-capitalize">women dress Features</span>
    </div>

                                    <!-- women clothes features filters  -->
    <div class="w-100 my-3 mx-auto">

        <div class="w__features__filter__wrapper d-flex justify-content-center align-items-center mx-auto flex-wrap">
                                        
                                        <!-- ff#01 -->
            <a class="features__filter f__filter1   pl-4 my-3" href="">

                <div class="ff__title d-flex justify-content-center align-items-center mb-4 p-3">
                    <span class="text-capitalize ">Asymmetrical</span>
                </div>
            </a>

                                        <!-- ff#02 -->
            <a class="features__filter f__filter2  pl-4 my-3" href="">

                <div class="ff__title d-flex justify-content-center align-items-center mb-4 p-3">
                    <span class="text-capitalize ">Cutout</span>
                </div>
            </a>

                                        <!-- ff#03 -->
            <a class="features__filter f__filter3   pl-4 my-3" href>

                <div class="ff__title d-flex justify-content-center align-items-center mb-4 p-3">
                    <span class="text-capitalize ">Draped</span>
                </div>
            </a>

                                        <!-- ff#04 -->
            <a class="features__filter f__filter4   pl-4 my-3" href="">

                <div class="ff__title d-flex justify-content-center align-items-center mb-4 p-3">
                    <span class="text-capitalize ">Hooded / Hoodie</span>
                </div>
            </a>



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