//sleeve length page code 
@extends('layouts.app')
@section('content')

    <link rel="stylesheet" type="text/css" href="{{asset('css/women_slevees_length.css')}}">
    <div class="women_sleeve_length_page_body">

                                    <!-- ############### Dress Style Dress Length Filter  ############-->
        <div class="d-flex justify-content-center align-items-center section-heading w-100 mx-auto py-4">
            <span class="mx-auto w-filter-heading">Sleeve Length</span>
        </div>

        <div class="row no-gutters">

            <div class="col-lg-4 col-md-6 col-sm-12 p-0 ">

                            <!-- filter#01 -->
                <div class="sleeveLengthFilter sl__filter1 slf__type1 border d-flex justify-content-center align-items-center">
                    <div class="filterTitle">
                        <span class="text-capitalize">long sleeve</span>
                    </div>
                </div>
                            <!-- filter#02 -->
                <div class="sleeveLengthFilter sl__filter2 slf__type1 border  d-flex justify-content-center align-items-center">
                    <div class="filterTitle">
                        <span class="text-capitalize">3/4 slevees</span>
                    </div>
                </div>



            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                                                <!-- filter#01 -->
                <div class="sleeveLengthFilter sl__filter3 slf__type2 border d-flex justify-content-center align-items-center">
                    <div class="filterTitle d-flex justify-content-center align-items-center">
                        <span class="text-capitalize">sleevesless</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-12 p-0">

                                    <!-- filter#01 -->
                <div class="sleeveLengthFilter sl__filter4 border slf__type3  d-flex justify-content-center align-items-center">
                    <div class="filterTitle">
                        <span class="text-capitalize">half slevees/(1/2)</span>
                    </div>
                </div>
                            <!-- filter#02 -->
                <div class="sleeveLengthFilter sl__filter5 border slf__type3  d-flex justify-content-center align-items-center">
                    <div class="filterTitle">
                        <span class="text-capitalize">long sleeve</span>
                    </div>
                </div>

                
                            <!-- filter#02 -->
                <div class="sleeveLengthFilter sl__filter6 border slf__type3 d-flex justify-content-center align-items-center">
                    
                    <div class="filterTitle">
                        <span class="text-capitalize">short sleeves</span>
                    </div>

                </div>



            </div>

        </div>

                                        <!-- ############### text plus image section heading  ############-->

        <div class="d-flex justify-content-center align-items-center section-heading w-100 mx-auto pt-4">
            <span class="mx-auto w-filter-heading">Women’s different sleeve length Dresses</span>
        </div>
                                    <!-- ############### text plus image section   ############-->    
        <div class="row my-3 mx-auto">
            <div class="col-sm-12 col-md-12 col-lg-12 mb-1 pb-3 ">

                <div class="text-section-para">
                <p>They're the clothing you wear the most when it's cold outside, and they're one of the larger apparel investments that you'll make: They're your coats, and when you shop for outerwear, you'll want to know just what to look for. Here are a few things to consider when you're shopping for a coat.</p>
                <p>They're the clothing you wear the most when it's cold outside, and they're one of the larger apparel investments that you'll make: They're your coats, and when you shop for outerwear, you'll want to know just what to look for. Here are a few things to consider when you're shopping for a coat.</p>
                </div>

                <div class="text-section-see-more mt-4">
                <button class="read-more">Read more</button>
                </div>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 pr-3 my-1 imgDiv">

                <div class="text-section-img-area w-100 mx-auto " >
                <!-- <img 
                    src="{{asset('image/womenCat/coat.jpg')}}" alt="" style="width:100%; height:100%; border-radius:5px; object-fit: contain;"
                > -->
                </div>



            </div>

        </div>

    </div>

@endsection


