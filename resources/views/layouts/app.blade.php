<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>
  @if(isset($page_title)) 
    {{$page_title}} 
  @else  
    Dress Ads | Ads Network 
  @endif
</title>
<meta name="description" content="Find all sorts of dresses from famous brands and stores from all over the internet.">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="{{asset('js/bootstrap/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script type="text/javascript" src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/owl.transitions.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet-skin4.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('revolution/css/settings.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('revolution/css/layers.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('revolution/css/navigation.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('js/swipebox/src/css/swipebox.min.css')}}" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Waterfall&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' type='text/css' />

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

<style type="text/css">
  .navbar-nav {
    display: block !important;
  }
  .border_bottom{
        border-bottom: 2px solid #ddd;
        margin-bottom: 20px;
  }
  
  #column-left > h5
  {
    font-weight: bold;
  }
  .more{
    color:#795548;
    cursor:pointer;
    text-align: center;
   
    padding: 10px;
    font-weight: bold;
  }
  .less{
    padding: 10px;
    color:#795548;
    cursor:pointer;
    text-align: center;
    font-weight: bold;
  }
  .attributes{
    background: #f7f7f7;
    
    margin-left: 3px;
    margin-right: 3px;
  }
  .pl0{
    padding-left: 0px;
  }
  .pr0{
    padding-right: 0px;
  }
  .pl1{
    padding-left: 1px;
  }
  .pr1{
    padding-right: 1px;
  }
  .pl2{
    padding-left: 2px;
  }
  .pr2{
    padding-right: 2px;
  }

  #share-div .fa , #share-div .fab 
  {
    padding: 10px;
    font-size: 25px;
    width: 49px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
  }

  #share-div .fa:hover ,#share-div .fab:hover 
  {
      opacity: 0.7;
  }

  #share-div .fa-facebook 
  {
    background: #3B5998;
    color: white;
  }

  #share-div .fa-twitter 
  {
    background: #55ACEE;
    color: white;
  }

  #share-div .fa-mail 
  {
    background: #dd4b39;
    color: white;
  }

  #share-div .fa-tumblr 
  {
    background: #2c4762;
    color: white;
  }
  #share-div .fa-linkedin 
  {
    background: #007bb5;
    color: white;
  }

  #share-div .fa-instagram 
  {
    background: #125688;
    color: white;
  }

  #share-div .fa-pinterest 
  {
    background: #cb2027;
    color: white;
  }

  /* ######################################new style added ################### */
  /* #header .button-search
  {
      background-color:#03B5C9;
  }
  #header #search input
  {
    border-color:1px solid #03B5C9;
  } */
</style>
</head>
<body>
  <link rel="stylesheet" type="text/css" href="{{asset('css/appStyleSheet.css')}}">
<div class="wrapper-wide">
  <div id="header" class="style2">
    <!-- Top Bar Start-->
    <nav id="top" class="htop">
      <div class="row no-gutter mx-2 default-width mx-auto">
        <div class=" w-100 d-flex justify-content-between align-items-center"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify" style="color:#fff;"></i></span>

          <div class="pull-left flip left-top d-flex justify-content-center align-items-center">
            
            <div class="links" style="border: 0">
              <ul>

                <li class="mobile text-center  " style="text-transform: none;border:0;"> Amazing Dress Deals! Up to 75% Off All Dresses with code: DRESSESADS</li>
                
     
              </ul>
            </div>
          
          </div>

          <div id="top-links" class="nav pull-right flip">
            <ul>
              @if(Session::has('user'))
                <li><a href="/account">My Account</a></li>

                <li><span style="margin-left: 10px;font-size:14px">({{Session::get('user')->first_name}} {{Session::get('user')->last_name}})</span> <a href="/logout" style="padding-left: 0px">Logout</a></li>
              @else
              <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>

              @endif
            </ul>
          </div>

        </div>
      </div>
    </nav>
    <!-- Top Bar End-->
    <!-- Header Start-->
    <header class="header-row">
      <div class="container default-width mx-auto">
        <div class="table-container">
           <!-- Logo Start -->
          <div class="col-table-cell col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div id="logo" style="text-align: left!important"><a href="{{route('home')}}" style="text-decoration: none;">
              <img class="img-responsive" src="{{asset('image/logo.png')}}" title="Dress Ads" alt="Dress Ads" />
              <!-- <h4 style="font-family: 'Waterfall', cursive;font-size: 64px;font-weight: bold;"> Dress</h4> -->
            </a></div>
          </div>
          <!-- Logo End -->
          <!-- Mini Cart Start-->
          <div class="col-table-cell col-lg-4 col-md-3 col-sm-12 col-xs-12 inner">
            
          </div>
          <!-- Mini Cart End-->
          


          </div>

      </div>
    </header>
    <!-- Header End-->

     <!-- Main Menu Start-->
    <nav id="menu" class="navbar center ">
      <div class="navbar-header"> <span class="visible-xs visible-sm d-lg-none"> Menu <b></b></span></div>
      <div class="container default-width mx-auto">
        <div class="collapse navbar-collapse navbar-ex1-collapse"style="display: block;">
          <ul class="nav navbar-nav">
         

             <li class="dropdown menu_brands large_menu">
                                   
                <a href="{{route('shop.categoryProdcuts','women')}}" class="d-flex align-items-center">Women</a>
              
               <div class="dropdown-menu mx-auto">

                  <div class="row m-0 no-gutters businessMagaMenubody w-100">

                    <div class="col-lg-4 col-md-4 col-sm-12 megacol2-right pt-2 pl-2 mt-2">
                    
                        <div class="mega-menu-cat-title">
                           <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline; "> SHOP BY CATEGORY
                          </h5>
                        </div>
                        
                        <ul class="row m-0 no-gutters">

                          <li class=" col-lg-4 col-md-4 col-sm-4  col-xs-6 col-6 listItems2 mt-2">
                            <center>
                              <div class="mega-menu-img mx-auto">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <a href="/shop/women/casual" class="text-center pt-2" style="font-size: 15px">Casual</a>
                            </center>
                          </li>

                          <li class=" col-lg-4  col-md-4  col-sm-4 col-xs-6 col-6 listItems2 mt-2">
                            <center>
                              <div class="mega-menu-img mx-auto">
                                <img src="{{asset('image/4.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <a href="/shop/women/cocktail" class="text-center pt-2 listItem2Title" style="font-size: 15px">Cocktail</a>
                            </center>
                          </li>

                          <li class=" col-lg-4  col-md-4  col-sm-4 col-xs-6  col-6 listItems2 mt-2">
                            <center>
                              <div class="mega-menu-img mx-auto">
                                <img src="{{asset('image/4.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <a href="/shop/women/formal" class="text-center pt-2 listItem2Title" style="font-size: 15px">Formal</a>
                            </center>
                          </li>

                          <li class=" col-lg-2  col-md-2 col-sm-2 col-xs-6 col-6"></li>
                          
                          <li class=" col-lg-4  col-md-4  col-sm-4 col-xs-6 col-6 listItems2 mt-2">
                            <center>
                              <div class="mega-menu-img mx-auto">
                                <img src="{{asset('image/4.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <a href="/shop/women/jumper" class="text-center pt-2 listItem2Title" style="font-size: 15px">Jumper</a>
                            </center>
                          </li>

                          <li class=" col-lg-4  col-md-4  col-sm-4 col-xs-6 col-6 listItems2 mt-2">
                            <center>  <div class="mega-menu-img mx-auto">
                              <img src="{{asset('image/4.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <a href="/shop/women/jumpsuits" class="text-center pt-2 listItem2Title" style="font-size: 15px">Jumpsuits</a>
                            </center>
                          </li>

                          <li class=" col-lg-2  col-md-2 col-sm-2 col-xs-6 col-6"></li>

                        </ul>
                       
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 p-2 pt-2 mt-2" style="text-align: left !important;">
                      
                      <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-12">

                          <div class=" pl-3">
                            <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline; "> SHOP BY SIZE
                            </h5>
                            <ul style="">
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?size_type=petites" class="text-capitalize  text-left ml-2">Petites</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?size_type=regular" class="text-capitalize  text-left ml-2">Regular</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?size_type=tall" class="text-capitalize  text-left ml-2">Tall</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?size_type=plus" class="text-capitalize  text-left ml-2">Plus</a>
                              </li>
                            
                            </ul>

                            <hr/>

                            <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline; "> SHOP BY COLOR
                            </h5>
                            <ul style="">
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?color[]=36" class="text-capitalize  text-left ml-2">Black Dresses</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?color[]=39" class="text-capitalize  text-left ml-2">White Dresses</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?color[]=38" class="text-capitalize  text-left ml-2">Red Dresses</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?color[]=41" class="text-capitalize  text-left ml-2">Pink Dresses</a>
                              </li>
                            
                            </ul>

                          </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-12">

                            <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline; ">SHOP BY DRESS STYLE
                            </h5>
                            <ul style="">
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                 <a href="/shop/women?dress_styles[]=1" class="text-capitalize  text-left ml-2">2 In 1 </a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?dress_styles[]=2"  class="text-capitalize  text-left ml-2">Co-ordinate</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?dress_styles[]=3"  class="text-capitalize  text-left ml-2">A-line</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?dress_styles[]=4"  class="text-capitalize  text-left ml-2">Backless</a>
                              </li>


                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                <a href="/shop/women?dress_styles[]=8" class="text-capitalize  text-left ml-2">Bodysuit</a>
                              </li>

                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?dress_styles[]=9" class="text-capitalize  text-left ml-2">Dress Set</a>
                              </li>

                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                 <a href="/shop/women?dress_styles[]=10" class="text-capitalize  text-left ml-2">Fit & Flare</a>
                              </li>

                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/shop/women?dress_styles[]=11" class="text-capitalize  text-left ml-2">Gown</a>
                              </li>

                               <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                   <a href="/shop/women?dress_styles[]=15" class="text-capitalize  text-left ml-2">Loungeware</a>
                              </li>

                               <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                 <a href="/shop/women?dress_styles[]=all" class="text-capitalize  text-left ml-2">All Dress Styles</a>
                              </li>
                            
                            </ul>

                          </div>


                       <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-12">

                            <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline; ">SHOP BY DRESS LENGTH
                            </h5>
                            <ul style="">
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                <a href="/shop/women?dress_length[]=1" class="text-left pt-2 pl-3 ">Floor Length</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                 <a href="/shop/women?dress_length[]=2" class="text-left pt-2 pl-3 ">High Low</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                   <a href="/women/shop?dress_length[]=3" class="text-left pt-2 pl-3 ">Maxi</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                      <a href="/women/shop?dress_length[]=4" class="text-left pt-2 pl-3 ">Midi</a>
                              </li>


                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                  <a href="/women/shop?dress_length[]=5" class="text-left pt-2 pl-3 ">Mini</a>
                              </li>
                            
                            </ul>

                            <hr/>


                            <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline; ">SHOP BY FEATURE
                            </h5>
                            <ul style="">
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                <a href="/shop/women?feature[]=1" class="text-left pt-2 pl-3 ">Asymmetrical</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                 <a href="/shop/women?feature[]=2" class="text-left pt-2 pl-3 ">Cutout</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                   <a href="/women/shop?feature[]=3" class="text-left pt-2 pl-3 ">Draped</a>
                              </li>
                              <li class="listItem d-flex justify-content-start align-items-center">
                                <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                                      <a href="/women/shop?feature[]=4" class="text-left pt-2 pl-3 ">Hooded </a>
                              </li>

                            </ul>
                          </div>

                      </div>
                     </div>
                     
               

                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-12 mt-2 pt-2 megacol2 pl-3">

                        <div class=" pl-3 mega-menu-cat-title">
                           <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline; ">SHOP BY OCCASION
                            </h5>
                        </div>
                        <ul class="m-0 no-gutters">

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/shop/women?occasion[]=27" class="text-left pt-2 pl-3 ">Bridal</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/shop/women?occasion[]=30" class="text-left pt-2 pl-3 ">Evening Dress</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/shop/women?occasion[]=35" class="text-left pt-2 pl-3 ">Party</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/shop/women?occasion[]=31" class="text-left pt-2 pl-3 ">Graduation</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/shop/women?occasion[]=36" class="text-left pt-2 pl-3 ">Wedding</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/shop/women?occasion[]=37" class="text-left pt-2 pl-3 ">Work</a>
                              </div>
                            </li>

                          </ul>

                    </div>

                  </div>
                </div>
              </li>
              
              <li class="dropdown menu_brands large_menu">
                                   
                <a href="{{route('shop.categoryProdcuts','men')}}" class="d-flex align-items-center">Men</a>
              
                 <div class="dropdown-menu mx-auto">

                  <div class="row m-0 no-gutters businessMagaMenubody w-100">

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 pt-2 men-images" style="border-right: 1px solid gray">
                      <div class="row p-0">
                        <!-- col3 -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6 pt-2" >

                          <a href="/shop/men/casual" class="d-flex justify-content-start align-items-center flex-column mega__col__link">

                            <div class="mega__col__img">
                              <img src="{{asset('image/vector/men-casual.png')}}" alt="" style="width:100%;height:100%;border-radius: 3px;">
                            </div>
                           
                            <p class="product__title text-capitalize py-2">Casual</p>

                          </a>

                        </div>

                      <!-- col4 -->
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6 pt-2">

                          <a href="/shop/men/formal" class="d-flex justify-content-start align-items-center flex-column mega__col__link">

                            <div class="mega__col__img">
                              <img src="{{asset('image/vector/formal-dress.jpg')}}" alt="" style="width:100%;height:100%;border-radius: 3px;">
                            </div>
                           
                            <p class="product__title text-capitalize py-2">Formal</p>

                          </a>

                      </div>
                      
                      <!-- col5 -->
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6 pt-2">
                          <a href="/shop/men/jumper" class="d-flex justify-content-start align-items-center flex-column mega__col__link">

                            <div class="mega__col__img">
                              <img src="{{asset('image/vector/jumper.jpeg')}}" alt="" style="width:100%;height:100%;border-radius: 3px;">
                            </div>
                           
                            <p class="product__title text-capitalize py-2">Jumper</p>
                                                      
                          </a>
                      </div>
                      
                      <!-- col6 -->
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6 pt-2">
                          <a href="/shop/men/jumpsuits" class="d-flex justify-content-start align-items-center flex-column mega__col__link">

                            <div class="mega__col__img">
                              <img src="{{asset('image/vector/jumpsuits.jpg')}}" alt="" style="width:100%;height:100%;border-radius: 3px;">
                            </div>

                            <p class="product__title text-capitalize py-2">Jumpsuits</p>

                          </a>
                      </div>

                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6 pt-2">
                          <a href="/shop/men/suits-tuxedos" class="d-flex justify-content-start align-items-center flex-column mega__col__link">
                            <p class="product__title text-capitalize py-2" style="font-size: 1.7rem;display: flex;align-items: center;">
                             <img class="img-thumbnail " src="/image/suits-tuxodo.png" width="50" height="50" style="border-radius: 3px;"> <span class="ml-2">Suits & tuxedos</span></p>
                            </p>
                          </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-8 col-md-8 col-ms-12 col-xs-12 col-12 pl-5" style="text-align: left !important;">
                                       <!-- col1 -->
                      <div class="row">
                        
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12 pt-4">
                          
                          <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline; ">FIT TYPE 
                          </h5>

                          <a class="product__name  text-normal d-flex"  href="/shop/men?fit_type[]=1"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Fitted</a> 

                          <a class="product__name text-normal d-flex" href="/shop/men?fit_type[]=2"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Loose</a>

                          <a class="product__name text-normal d-flex" href="/shop/men?fit_type[]=3"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Straight</a>
                          
                          <hr/>

                          <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline;"> DRESS LENGTH 
                          </h5>

                          <a class="product__name  text-normal d-flex"   href="/shop/men?dress_length[]=11"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Regular </a> 

                          <a class="product__name text-normal d-flex"  href="/shop/men?dress_length[]=12"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Short</a>

                          <a class="product__name text-normal d-flex"  href="/shop/men?dress_length[]=13"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Tall</a>

                          <hr/>

                           <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline; ">DRESS STYLE 
                          </h5>

                          <a class="product__name  text-normal d-flex"   href="/shop/men?dress_style[]=53"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>2-Piece Suit</a> 

                          <a class="product__name text-normal d-flex" href="/shop/men?dress_style[]=54"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>3 Piece Suit</a>

                          <a class="product__name text-normal d-flex" href="/shop/men?dress_style[]=55"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Base Layer Set</a>

                          <a class="product__name text-normal d-flex" href="/shop/men?dress_style[]=56"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Dressing Gown</a>

                          <a class="product__name text-normal d-flex" href="/shop/men?dress_style[]=57"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Swimwear</a>

                          <a class="product__name text-normal d-flex" href="/shop/men?dress_style[]=58"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Tracksuit</a>

                        </div>

                   
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12 pt-4">
                        
                          <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline;">SLEEVE LENGTH
                          </h5>

                          <a class="product__name  text-normal d-flex"   href="/shop/men?sleeve_length[]=13"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>3/4 Sleeve </a> 

                          <a class="product__name text-normal d-flex"  href="/shop/men?sleeve_length[]=14"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Bracelet Sleeve</a>

                          <a class="product__name text-normal d-flex" href="/shop/men?sleeve_length[]=15"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Half Sleeve</a>

                          <a class="product__name text-normal d-flex" href="/shop/men?sleeve_length[]=16"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Long Sleeve</a>

                          <a class="product__name text-normal d-flex" href="=/shop/men?sleeve_length[]=17"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Short Sleeve</a>

                          <a class="product__name text-normal d-flex" href="=/shop/men?sleeve_length[]=18"><i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Sleeveless</a>

                          <hr/>

                            <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline;">OCCASION
                          </h5>

                          <a class="product__name  text-normal d-flex"  href="/shop/men?occasion[]=15"> 
                            <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Club/Night Out  
                          </a> 

                          <a class="product__name text-normal d-flex"  href="/shop/men?occasion[]=16">
                           <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Holiday
                         </a>

                          <a class="product__name text-normal d-flex" href="/shop/men?occasion[]=17">
                             <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Lounge
                          </a>

                          <a class="product__name text-normal d-flex" href="/shop/men?occasion[]=18">
                             <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Party
                          </a>

                          <a class="product__name text-normal d-flex" href="/shop/men?occasion[]=19">
                             <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Schoolwear
                          </a>

                          <a class="product__name text-normal d-flex" href="/shop/men?occasion[]=20">
                             <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Wedding
                          </a>
                          
                          <a class="product__name text-normal d-flex" href="/shop/men?occasion[]=21">
                             <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Workwear
                          </a>
                        </div>
                     

                       
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12 pt-4">
                        
                          <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline;">SLEEVE TYPE

                          </h5>

                          <a class="product__name  text-normal d-flex"  href="/shop/men?sleeve_types[]=54">
                            <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Bracelet Sleeves  
                          </a> 

                          <a class="product__name text-normal d-flex"  href="/shop/men?sleeve_types[]=55">
                             <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Cap Sleeve
                          </a>

                          <a class="product__name text-normal d-flex" href="/shop/men?sleeve_types[]=56">
                             <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Lantern Sleeves
                          </a>

                          <a class="product__name text-normal d-flex" href="/shop/men?sleeve_types[]=57">
                           <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Raglan Sleeve
                         </a>

                          <a class="product__name text-normal d-flex" href="/shop/men?sleeve_types[]=58">
                           <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Set-in</a>

                          <hr/>

                              <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline;">NECKLINE
                           
                          </h5>

                          <a class="product__name  text-normal d-flex"  href="/shop/men?neckline[]=42"> 
                            <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Crew-neck  
                          </a> 

                          <a class="product__name text-normal d-flex"  href="/shop/men?neckline[]=43">
                            <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Deep Neckline
                          </a>

                          <a class="product__name text-normal d-flex" href="/shop/men?neckline[]=44">
                            <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Polo-neck
                          </a>

                          <a class="product__name text-normal d-flex" href="/shop/men?neckline[]=45">
                            <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Round Neck
                          </a>

                          <a class="product__name text-normal d-flex" href="/shop/men?neckline[]=46">
                            <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>Turle Neck
                          </a>

                          <a class="product__name text-normal d-flex" href="/shop/men?neckline[]=47">
                            <i class="fas fa-angle-double-right ml-2 mr-2" style="color:#fff;"></i>V Neck
                          </a>
                        </div>
                      </div>
                     
                  </div>
                </div>
                
                  <div class="row salesOfferBottom py-2 no-gutters">
                    <p class="mx-auto text-center my-0">50%OFF EVERYTHING AND FREE SHIPPING</p>
                  </div>
                  
              </div>
              </li>

              <li class="dropdown menu_brands large_menu">
                <a class="d-flex align-items-center" >Kids</a>
                  <div class="dropdown-menu mx-auto">

                  <div class="row m-0 no-gutters businessMagaMenubody w-100">


                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" >
                      <a href="/shop/girls" class="d-flex justify-content-start align-items-center flex-column mega__col__link">

                          <div class="mega__col__img_kids">
                            <img src="{{asset('image/girls.jpg')}}" alt="" style="width:100%;height:100%;border-radius: 3px;">
                          </div>
                         
                          <p class="product__title text-capitalize py-2" style="font-size: 16px">Girls</p>

                      </a>

                     <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline;text-transform: uppercase;">Shop By Category
                       
                      </h5>

                      <div class="row mt-3 pl-4 pr-4"  style="text-align:left !important">
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                            <a class="  text-normal  "  href="/shop/girls/formal"> 
                           <i class="fas fa-angle-double-right " style="color:#fff;"></i> Formal  
                          </a>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                            <a class="  text-normal  "  href="/shop/girls/casual"> 
                           <i class="fas fa-angle-double-right " style="color:#fff;"></i> Casual
                          </a>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                            <a class="  text-normal  "  href="/shop/girls/party"> 
                           <i class="fas fa-angle-double-right " style="color:#fff;"></i> Party  
                          </a>
                        </div>

                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                            <a class="  text-normal  "  href="/shop/girls/flower-girl"> 
                           <i class="fas fa-angle-double-right " style="color:#fff;"></i> Flower Girl  
                          </a>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                            <a class="  text-normal  "  href="/shop/girls/jumpsuits"> 
                           <i class="fas fa-angle-double-right " style="color:#fff;"></i> Jumpsuits
                          </a>
                        </div>

                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                            <a class="  text-normal  "  href="/shop/girls/jumper"> 
                           <i class="fas fa-angle-double-right " style="color:#fff;"></i> Jumper
                          </a>
                        </div>


                      </div>

                      <hr/>


                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <a href="/shop/boys" class="d-flex justify-content-start align-items-center flex-column mega__col__link">

                        <div class="mega__col__img_kids">
                          <img src="{{asset('image/boys.jpg')}}" alt="" style="width:100%;height:100%;border-radius: 3px;">
                        </div>
                       
                        <p class="product__title text-capitalize py-2" style="font-size: 16px">Boys</p>

                      </a>

                      <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline;text-transform: uppercase;">Shop By Category
                       
                      </h5>
                      

                      <div class="row mt-3 pl-4 pr-4"  style="text-align:left !important">
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                            <a class="  text-normal  "  href="/shop/boys/casual"> 
                           <i class="fas fa-angle-double-right " style="color:#fff;"></i> Casual  
                          </a>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                            <a class="  text-normal  "  href="/shop/boys/formal"> 
                           <i class="fas fa-angle-double-right " style="color:#fff;"></i> Formal
                          </a>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                            <a class="  text-normal  "  href="/shop/boys/jumper"> 
                          <i class="fas fa-angle-double-right " style="color:#fff;"></i>  Jumper  
                          </a>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                            <a class="  text-normal  "  href="/shop/boys/jumpsuits"> 
                          <i class="fas fa-angle-double-right " style="color:#fff;"></i>  Jumpsuits
                          </a>
                        </div>

                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                            <a class="  text-normal  "  href="/shop/boys/suits-tuxedo"> 
                          <i class="fas fa-angle-double-right " style="color:#fff;"></i>  Suits & Tuxedo 
                          </a>
                        </div>

                      </div>


                        <hr/>



                    </div>
                 
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      
                      <a href="/shop/baby-girls" class="d-flex justify-content-start align-items-center flex-column mega__col__link">

                          <div class="mega__col__img_kids">
                            <img src="{{asset('image/baby-girl.jpg')}}" alt="" style="width:100%;height:100%;border-radius: 3px;">
                          </div>
                         
                          <p class="product__title text-capitalize py-2" style="font-size: 16px">Baby Girl</p>

                        </a>


                           <h5 class="mega_col_head font-weight-bold pl-2 " style="text-align:center !important;font-size:15px;cursor:inherit;text-decoration: underline;text-transform: uppercase;">Shop By Category
                           
                          </h5>
                          <div class="row mt-3 pl-4 pr-4"  style="text-align:left !important">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 pl-3 ">
                                <a class="  text-normal  "  href="/shop/baby-girls/new-born"> 
                               <i class="fas fa-angle-double-right " style="color:#fff;"></i> New born  
                              </a>
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 pl-3  ">
                              <a class="  text-normal "  href="/shop/baby-girls/0-3-m"> 
                              <i class="fas fa-angle-double-right " style="color:#fff;"></i> 0-3 m  
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 pl-3  ">
                              <a class="  text-normal d-inline"  href="/shop/baby-girls/3-6-m"> 
                              <i class="fas fa-angle-double-right " style="color:#fff;"></i> 3-6 m  
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 pl-3  ">
                               <a class="  text-normal d-inline"  href="/shop/baby-girls/6-9-m"> 
                               
                              <i class="fas fa-angle-double-right " style="color:#fff;"></i>  6-9 m  
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 pl-3  ">
                                 <a class="  text-normal d-inline"  href="/shop/baby-girls/9-12-m"> 
                              <i class="fas fa-angle-double-right " style="color:#fff;"></i> 9-12 m  
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 pl-3  ">
                              <a class="  text-normal d-inline"  href="/shop/baby-girls/12-18-m"> 
                              <i class="fas fa-angle-double-right " style="color:#fff;"></i> 12-18 m  
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 pl-3  ">
                              <a class="  text-normal d-inline"  href="/shop/baby-girls/18-24-m"> 
                              <i class="fas fa-angle-double-right " style="color:#fff;"></i> 18-24 m 
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 pl-3  ">
                              <a class="  text-normal d-inline"  href="/shop/baby-girls/2t"> 
                              <i class="fas fa-angle-double-right " style="color:#fff;"></i> 2t
                              </a>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 pl-3  ">
                              <a class="  text-normal d-inline"  href="/shop/baby-girls/3t"> 
                              <i class="fas fa-angle-double-right " style="color:#fff;"></i> 3t  
                              </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 pl-3  ">
                              <a class="  text-normal d-inline"  href="/shop/baby-girls/4t"> 
                              <i class="fas fa-angle-double-right " style="color:#fff;"></i>  4t 
                              </a> 
                            </div>
                          </div>

                          <hr/>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" >
                      <a href="/shop/baby-boys" class="d-flex justify-content-start align-items-center flex-column mega__col__link">

                        <div class="mega__col__img_kids">
                          <img src="{{asset('image/baby-boy.jpg')}}" alt="" style="width:100%;height:100%;border-radius: 3px;">
                        </div>
                       
                        <p class="product__title text-capitalize py-2" style="font-size: 16px">Baby Boy</p>

                      </a>

                        <h5 class="mega_col_head font-weight-bold " style="font-size:15px;cursor:inherit;text-decoration: underline;text-transform: uppercase;">Shop By Category
                           
                          </h5>

                         <div class="row mt-3 pl-4 pr-4"  style="text-align:left !important">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                                <a class="  text-normal  "  href="/shop/baby-boys/new-born"> 
                               <i class="fas fa-angle-double-right " style="color:#fff;"></i> New born  
                              </a>
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  col-6  pl-3">
                              <a class="  text-normal "  href="/shop/baby-boys/0-3-m"> 
                               <i class="fas fa-angle-double-right " style="color:#fff;"></i> 0-3 m  
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6  pl-3">
                              <a class="  text-normal d-inline"  href="/shop/baby-boys/3-6-m"> 
                              <i class="fas fa-angle-double-right " style="color:#fff;"></i>  3-6 m  
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6   pl-3">
                               <a class="  text-normal d-inline"  href="/shop/baby-boys/6-9-m"> 
                               
                                <i class="fas fa-angle-double-right " style="color:#fff;"></i> 6-9 m  
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  col-6  pl-3">
                                 <a class="  text-normal d-inline"  href="/shop/baby-boys/9-12-m"> 
                               <i class="fas fa-angle-double-right " style="color:#fff;"></i> 9-12 m  
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6   pl-3">
                              <a class="  text-normal d-inline"  href="/shop/baby-boys/12-18-m"> 
                                <i class="fas fa-angle-double-right " style="color:#fff;"></i> 12-18 m  
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  col-6  pl-3">
                              <a class="  text-normal d-inline"  href="/shop/baby-boys/18-24-m"> 
                               <i class="fas fa-angle-double-right " style="color:#fff;"></i> 18-24 m 
                              </a> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6   pl-3">
                              <a class="  text-normal d-inline"  href="/shop/baby-boys/2t"> 
                               <i class="fas fa-angle-double-right " style="color:#fff;"></i> 2t
                              </a>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6   pl-3">
                              <a class="  text-normal d-inline"  href="/shop/baby-boys/3t"> 
                               <i class="fas fa-angle-double-right " style="color:#fff;"></i> 3t  
                              </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6   pl-3">
                              <a class="  text-normal d-inline"  href="/shop/baby-boys/4t"> 
                               <i class="fas fa-angle-double-right " style="color:#fff;"></i> 4t 
                              </a> 
                            </div>
                          </div>

                           <hr/>

                           
                      </div>


                  </div>
                </div>
              </li>
             
              <li class="dropdown menu_brands large_menu ">
                  <!-- {{route('shop.offerProducts','today-sale')}} -->
                <a class="d-flex align-items-center" >Today Sales </a>

                <div class="dropdown-menu ">
                  <div class="row m-0 no-gutters salesMagaMenubody">
                                      <!-- meag2col1 -->
                    <div class="col-lg-2 col-md-6 col-sm-6 p-2 mt-2">
                      <div class=" p-3">
                        <!-- <h3 class="mega-menu-cat-title text-uppercase text-center pl-3 ">
                          Shop by Product
                        </h3>   -->
                        <div class="meag2-img-col1">
                            <img src="{{asset('image/add1.jpg')}}" alt="" style="width:100%;height:100%;">
                        </div>
                      </div>

                    </div>
                                    <!-- meag2col2 -->
                    <div class="col-lg-2 col-md-6 col-sm-6 p-2 mt-5">
                                        <!-- col#01 -->
                      <div class="d-flex justify-start align-items-center mt-3 py-3 meage2col2singleItem">
                        <div class="mega2icon d-flex justify-content-center align-items-center mr-2 ">
                        <i class="fas fa-percent"></i>
                        </div>
                        <div class="mega2text">
                          <p class="m-0">50% off everything</p>
                        </div>
                      </div>
                                        <!-- col#02 -->
                      <div class="d-flex justify-content-start align-items-center py-3 mt-3 meage2col2singleItem">
                        <div class="mega2icon d-flex justify-content-center align-items-center mr-2 ">
                        <i class="fas fa-percent"></i>
                        </div>
                        <div class="mega2text">
                          <p class="m-0">free shipping over $80*. Use code SHIP</p>
                        </div>
                      </div>
                                        <!-- col#03 -->
                      <div class="d-flex justify-content-start align-items-center py-3 mt-3 meage2col2singleItem">
                        <div class="mega2icon d-flex justify-content-center align-items-center mr-2 ">
                        <i class="fas fa-truck"></i>
                        </div>
                        <div class="mega2text">
                          <p class="m-0">Student discount get offer</p>
                        </div>
                      </div>
                                        <!-- col#04 -->
                      <div class="d-flex justify-start align-items-center py-3 mt-3 meage2col2singleItem">
                        <div class="mega2icon d-flex justify-content-center align-items-center mr-2 ">
                        <i class="fas fa-check"></i>
                        </div>
                        <div class="mega2text">
                          <p class="m-0">we have got GST covered no matter the value of your order.</p>
                        </div>
                      </div>

                    </div>
                                    <!-- meag2col3 -->
                                    <!-- // -->
                    <div class="col-lg-4 col-md-6 col-sm-6 p-2 mt-5">

                        <div class=" pl-3">
                          <div class="mega2Heading">
                            <h6 class="mega2-title text-uppercase text-left py-0 ">
                              DRESSES
                            </h6>  
                            <hr class="border-bottom-half w-50 pb-2 m-0">
                          </div>
                        </div>

                        <ul class="row">
                          <li class="col-md-6 col-sm-12 listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="col-md-6 col-sm-12 listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="col-md-6 col-sm-12 listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="col-md-6 col-sm-12 listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="col-md-6 col-sm-12 listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="col-md-6 col-sm-12 listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="col-md-6 col-sm-12 listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="col-md-6 col-sm-12 listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="col-md-6 col-sm-12 listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          

                        </ul>

                    </div>
                              <!-- /// -->
                               <!-- meag2col4 -->
                    <div class="col-lg-2 col-md-6 col-sm-6 p-2 mt-5">

                        <div class=" pl-3">
                          <div class="mega2Heading">
                            <h6 class="mega2-title text-uppercase text-left py-0 ">
                              DRESSES BY OCCASION
                            </h6>  
                            <hr class="border-bottom-half w-50 pb-2 m-0">
                          </div>
                        </div>

                        <ul class="w-100">
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          
                          

                        </ul>

                    </div>
                              <!-- /// -->
                              <!-- /// -->
                               <!-- meag2col5 -->
                    <div class="col-lg-2 col-md-6 col-sm-6 p-2 mt-5">

                        <div class=" pl-3">
                          <div class="mega2Heading">
                            <h6 class="mega2-title text-uppercase text-left py-0 ">
                              DRESSES BY COLOR
                            </h6>  
                            <hr class="border-bottom-half w-50 pb-2 m-0">
                          </div>
                        </div>

                        <ul class="w-100">
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          
                          

                        </ul>
                              <!-- category#02 -->
                        <div class=" pl-3 mt-3">
                          <div class="mega2Heading">
                            <h6 class="mega2-title text-uppercase text-left py-0 ">
                              DRESSES BY COLOR
                            </h6>  
                            <hr class="border-bottom-half w-50 pb-2 m-0">
                          </div>
                        </div>

                        <ul class="w-100">
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          <li class="row listItem d-flex justify-content-start align-items-center">
                            <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                              <a class="text-capitalize  text-left ml-2">new coats and jackets</a>
                          </li>
                          
                          

                        </ul>

                    </div>
                              <!-- /// -->
                                   
                  
                    




                  </div>
                  <div class="row salesOfferBottom py-2 no-gutters">
                    <p class="mx-auto text-center my-0">50%OFF EVERYTHING AND FREE SHIPPING</p>
                  </div>
                  
                </div>

              </li>

              <li>
                <a  href="{{route('shop.offerProducts','new-arrival')}}" >New Arrivals</a>
              </li>
           
              <li class="menu_brands dropdown p-0">
                <!-- href="{{route('brands')}}" -->
                <a class="d-flex align-items-center">
                  Brands
                </a>
                <div class="dropdown-menu w-100 p-0">
                      
                        
                        <!-- /////////////BRAND BODY///////////// -->
                        <div class="row brandMegaMenuBody w-100 no-gutters px-2">
                        <!-- <div class="col-lg-1 col-md-1 col-sm-12 p-3"></div> -->

                          <div class="col-lg-4 col-md-4 col-sm-12 p-3">
                              <div class="pt-3">
                                <h6 class="brandTitle text-uppercase text-left py-0 pl-2">TOP BREANDS</h6>  
                              </div>

                              <ul class="row">
                                <li class="col-6 pl-3 text-left pl-3">
                                    <a class="text-capitalize">louis vuitton</a>
                                </li>
                                <li class="col-6 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">Gucci</a>
                                </li>

                                <li class="col-6 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">hermes</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">prada</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">chanel</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">ralph lauren</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">burberryn </a>
                                </li>

                                <li class="col-6 pl-3 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">house of versace</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 pl-3 text-left pl-3">
                                    <a href="">frndi</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">armani</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">Faithfull the Brand</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">Topshop</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">Staud</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">Ciao Lucia</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">Reformation</a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">Ale </a>
                                </li>
                                <li class="col-6 pl-3 pl-3 text-left pl-3">
                                    <a href=""class="text-capitalize">adidas</a>
                                </li>
                              </ul>
                          </div>
                          <div class="col-lg-5 col-md-5 col-sm-12 p-3"></div>
                          <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                              
                              <div class="pt-3">
                                <h6 class="brandTitle text-uppercase text-left py-0 pl-2">Brands A-Z</h6>  
                              </div>

                              <div class=" brandA-Z w-lg-100 mx-auto d-flex justify-content-start align-items-center flex-wrap p-3">
                                
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      A
                                    </div>
                                  </a>
                                  
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      B
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      C
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      D
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      E
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      F
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      G
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      H
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      I
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      J
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      K
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      L
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      M
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      N
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      O
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      P
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      Q
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      R
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      S
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      T
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      U
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      V
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      W
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      X
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      Y
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      Z
                                    </div>
                                  </a>
                                  <a href="">
                                    <div class="d-flex  justify-content-center align-items-center characterAZ">
                                      0-9
                                    </div>
                                  </a>
                               
                                
                              </div>
                          </div>

                   
                </div>
              </li>

              <li class="menu_brands dropdown">
                <a class="d-flex align-items-center" href="{{route('online_stores')}}">Online Stores</a>
                <div class="dropdown-menu">                      
                  <?php 
                  $store_count = 0;
                  ?>
                  <div class="row" style="margin-left: 2rem">
                  @foreach($stores as $store)
                  <?php 
                  $store_count++;
                  if($store_count>10){
                    break;
                  }
                  ?>
                  @endforeach

                  <div class="onlineStoresMegaBody w-100 row">


                    <div class="col-lg-8 col-md-8 col-sm-12 p-4">
                      <div class="d-flex p-4 flex-wrap">

                        <a href="">
                            <div class="singleStore store1 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/asosStore1.PNG')}}" style="width:100%;height:100%;">
                            </div>
                        </a>

                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/mangoStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        </a>

                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/bernieStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        <a>

                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/dropthyStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        <a>

                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/missStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        <a>
                        
                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/modclothStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        <a>

                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                              <img  src="{{asset('image/brandsLogos/nastyStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        <a>
                        <a href="">
                            <div class="singleStore store1 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/asosStore1.PNG')}}" style="width:100%;height:100%;">
                            </div>
                        </a>

                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/mangoStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        </a>

                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/bernieStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        <a>

                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/dropthyStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        <a>

                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/missStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        <a>
                        
                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                                <img  src="{{asset('image/brandsLogos/modclothStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        <a>

                        <a href="">
                          <div class="singleStore store2 mr-3 mb-3">
                              <img  src="{{asset('image/brandsLogos/nastyStore1.png')}}" style="width:100%;height:100%;">
                          </div>
                        <a>

                      </div>
                    </div>

                    <ul class="col-lg-4 col-md-4 col-sm-12 p-4">
                      <div class="pt-3">
                        <h6 class="brandTitle text-uppercase text-left py-0 pl-2">TOP Online Stores</h6>  
                      </div>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">ASOS</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Byrnie</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Dorothy Perkins</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Mango</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Modcloth</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Missguided</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Nasty Gal</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Rosegal</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Todd Snyder</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Tobi</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Taylor Stitch</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Todd Snyder</a>
                      </li>

                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Topshop</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Uniqlo</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Ann Taylor</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Bluefly</a>
                      </li>

                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">LOFT</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Express</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Macy’s</a>
                      </li>
                      <li class="col-sm-12 col-md-4 col-lg-6 text-left">
                        <a href="">Nordstrom</a>
                      </li>
                    </ul>

                  </div>
                  
              </li>
             
              <li class="dropdown">
                <a href="" class="d-flex align-items-center">Special Offers </a>
                <div class="dropdown-menu" >
              
                  <?php                       
                  $count_index = 0;
                 
                  $max_count = count($offer_types_list)/2;
                  $cats1 = array_slice($offer_types_list,$count_index, $max_count);
                  $cats2 = array_slice($offer_types_list,count($cats1), count($offer_types_list));       
                  ?>
                  <ul>
                    @foreach($cats1 as $offer_type)
                      <?php $offer_type = (Object) $offer_type; ?>
                   
                      <li class="d-flex justify-content-center align-items-center pl-3">
                        <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                        <a href="{{route('shop.offerProducts',$offer_type->offer_type_slug)}}">{{$offer_type->offer_type_name}}</a>
                      </li>
                    @endforeach
                  </ul>
                  <ul>
                    @foreach($cats2 as $offer_type)
                      <?php $offer_type = (Object) $offer_type; ?>
                    
                    <li class="d-flex justify-content-center align-items-center pl-3">
                      <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                      <a href="{{route('shop.offerProducts',$offer_type->offer_type_slug)}}">{{$offer_type->offer_type_name}}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </li>

              <li >
                <a  href="{{route('businesses')}}" >Businesses</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

      <!-- Main Menu End-->
    <input type="hidden" id="prev_url" value="{{$_SERVER['REQUEST_URI']}}" />

    <div class="modal fade" id="modal_product_details" role="document">
     
      <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
          <div class="modal-content">
      
            <div class="modal-body" id="content-div-product">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary"  onClick="hideModalById('modal_product_details')">Close</button>
            </div>

          </div>

      </div>

    </div>

     <div class="modal fade" id="modal_product_comparison" role="document">
     
      <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
          <div class="modal-content">
      
            <div class="modal-body" id="content-div-comparison" style="overflow-y: scroll;max-height: 450px;">
                
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary"  onClick="hideModalById('modal_product_comparison')">Close</button>
            </div>

          </div>

      </div>

    </div>
    <div class="modal fade" id="modal_product_message" role="document">
     
      <div class="modal-dialog modal-sm">
        
          <!-- Modal content-->
          <div class="modal-content">
                 
            <div class="modal-body" id="content-div-message" >
              <span onclick="hideModalById('modal_product_message')" style="float: right;
              cursor: pointer;
              color: #000;" >
                       <i onclick="hideModalById('modal_product_message')" style="font-size: 21px;" class="fas fa-times"></i></span>
                <div id="modal_message" style="padding:10px">
                </div>
            </div>

           
          </div>

      </div>

    </div>

     <div class="modal fade" id="modal_product_alert" role="document">
     
      <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
          <div class="modal-content">
      
            <div class="modal-body" id="content-div-alert" style="overflow-y: scroll;max-height: 450px;">
                
            </div>

           
          </div>

      </div>

    </div>

    <div class="modal fade" id="modal_product_price_history" role="document">
     
      <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
          <div class="modal-content">
      
            <div class="modal-body" id="content-div-history" style="overflow-y: scroll;max-height: 600px;">
                
            </div>

           
          </div>

      </div>

    </div>

  </div>
    @yield('content')
 
  <footer id="footer">
    <div class="fpart-first ">
      <div class="container default-width mx-auto">
        <div class="row">
          <div class="contact col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <h5>About Derss Ads</h5>
            <p> On Dress Ads you can find the latest ads about dresses of vast variety from famous online stores and brands.</p>
            <img alt="" src="{{asset('image/logo.png')}}">
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Information</h5>
            <ul>
              <li><a href="/shop/men">Men</a></li>
                    <li><a href="/shop/women">Women</a></li>
                      <li><a href="/shop/baby">Baby</a></li>
                      <li><a href="/shop/girl">Girls</a></li>
                  <li><a href="/shop/boy">Boys</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Deals & Offers</h5>
            <ul>
               <li><a href="/shop/today-sale">Todays Sales</a></li>
                  <li><a href="/shop/new-arrival">New Arrivals</a></li>
                  <li><a href="/shop/promo">Special Offers</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Other</h5>
            <ul>
               <li><a href="{{route('blog')}}">Blog</a></li>
               <li><a href="{{route('site_map')}}">Site Map</a></li>
               <li><a href="{{route('businesses')}}">Businesses</a></li>
             <li><a href="{{route('brands')}}">Brands</a></li>
                  <li><a href="{{route('online_stores')}}">Online Stores</a></li>
              
            </ul>
          </div>
          <div class="column col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h5>Newsletter</h5>
            <div class="form-group">
            <label class="control-label" for="subscribe">Sign up to receive latest news and updates.</label>
            <input id="signup" type="email" required="" placeholder="Email address" name="email" class="form-control">
            </div>
            <input type="submit" value="Subscribe" class="btn btn-primary">
          </div>
        </div>
      </div>
    </div>
    <div class="fpart-second">
      <div class="container default-width mx-auto">
        <div id="powered" class="clearfix">
          <div class="powered_text pull-left flip">
            <p>Dress Ads © 2021 | Software Pattern</p>
          </div>
          <div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('image/socialicons/facebook.png')}}" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('image/socialicons/twitter.png')}}" alt="Twitter" title="Twitter"> </a>  <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('image/socialicons/pinterest.png')}}" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('image/socialicons/rss.png')}}" alt="RSS" title="RSS"> </a> </div>
        </div>
       
      </div>
    </div>
    <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
  </footer>
  <!--Footer End-->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="{{asset('js/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.tools.min.js?rev=5.0')}}"></script>
<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing-1.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/swipebox/lib/ios-orientationchange-fix.js')}}"></script>
<script type="text/javascript" src="{{asset('js/swipebox/src/js/jquery.swipebox.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<!-- JS Part End-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('js/jquery.toaster.js')}}"></script>

<script type="text/javascript" src="{{asset('js/general_functions.js')}}"></script>
<script>  



jQuery(document).ready(function() {  

$("#zoom_01").elevateZoom({
  gallery:'gallery_01',
  cursor: 'pointer',
  galleryActiveClass: 'active',
  imageCrossfade: true,
  zoomWindowFadeIn: 500,
  zoomWindowFadeOut: 500,
  lensFadeIn: 500,
  lensFadeOut: 500,
  loadingIcon: 'image/progress.gif'
  }); 
//////pass the images to swipebox
$("#zoom_01").bind("click", function(e) {
  var ez =   $('#zoom_01').data('elevateZoom');
  $.swipebox(ez.getGalleryList());
  return false;
});

   jQuery("#slider1").revolution({
      sliderType:"standard",
      sliderLayout:"fullwidth",
      delay:9000,
      navigation: {
      onHoverStop: "off",
          arrows:{enable:true},
      touch: {
          touchenabled: "on",
          swipe_threshold: 75,
          swipe_min_touches: 1,
          swipe_direction: "horizontal",
          drag_block_vertical: false
      },
      bullets: {
          enable: true,
          hide_onmobile: true,
          style: "hermes",
          hide_onleave: false,
          direction: "horizontal",
          h_align: "center",
          v_align: "bottom",
          h_offset: 20,
          v_offset: 20,
          space: 5,
          tmp: ''
      },
      },
    
                
     gridwidth:1230,
      gridheight:480
    });   


         $(".search-select").selectize({
          sortField: 'text'
      });
}); 
</script>

</body>
</html>

<script type="text/javascript">


      @if(isset($selected) && isset($selected_sub1))
    
        @if(ucfirst($selected) == "Girl" || ucfirst($selected_sub1) == "Girl" || ucfirst($selected_sub1) == "Boy" || ucfirst($selected) == "Boy" || ucfirst($selected) == "Baby" || ucfirst($selected_sub1) == "Baby")
         $("#kids").show();
        @endif
       $("#<?=Str::slug($selected_sub1)?>").show();
       $("#<?=Str::slug($selected)?>").show();
       
       @elseif(isset($selected) && !isset($selected_sub1))
    
        @if(ucfirst($selected) == "Girl"   || ucfirst($selected) == "Boy" || ucfirst($selected) == "Baby")
         $("#kids").show();
        @endif
       $("#<?=Str::slug($selected)?>").show();
     
      @elseif(isset($selected_sub1) &&  !isset($selected))
    
        @if(ucfirst($selected_sub1) == "Girl" || ucfirst($selected_sub1) == "Boy" ||  ucfirst($selected) == "Baby" )
         $("#kids").show();
        @endif
       $("#<?=Str::slug($selected_sub1)?>").show();
       
      @endif
     
     
//  $("#category_div").hide();
  //$("#price_div").hide();
  $("#sub_category_div").hide();
  //$("#color_div").hide();
  //$("#store_div").hide();
  //$("#size_div").hide();
  //$("#brand_div").hide();
    
  
   function hideModal(){
      $("#myModal").modal('hide');
    }

  

    $("#parent_category").change(function(event){


      if(event.target.value == "3"){

        $("#sub_category_div").show();
      }else{
        $("#sub_category_div").hide();
      }

      // let parent_category = $("#parent_category").val();
  
      // let _token   = $('meta[name="csrf-token"]').attr('content');

      // $.ajax({
      //   url: "{{route('get_our_categories')}}",
      //   type:"POST",
      //   data:{
      //     parent_category:parent_category,
         
      //     _token: _token
      //   },
      //   success:function(response){
          
      //     if(response && response !="") {
      //       $("#category_name").html(response);
      //     }
      //   },
      //  });
  }
  );

    $("#store_id").change(function(event){

      // event.preventDefault();
      // let store_id = $("#store_id").val();
      // let _token = $("meta[name='csrf-token']").attr('content');

      // $.ajax({
      //   url:"{{route('get_colors')}}",
      //   type:"post",
      //   data:{
      //     store_id : store_id,
      //     _token : _token
      //   },
      //   success:function(response){
      //     if(response && response !="NOCOLOR"){
      //       $("#colors").html(response);
      //     }else if(response && response =="NOCOLOR"){
      //       $("#colors").html("Colors not available");
      //     }
      //   }

      // });

      // $.ajax({
      //   url:"{{route('get_sizes')}}",
      //   type:"post",
      //   data:{
      //     store_id : store_id,
      //     _token : _token
      //   },
      //   success:function(response){
      //     if(response && response !="NOSIZE"){
      //       $("#sizes").html(response);
      //     }else if(response && response =="NOSIZE"){
      //       $("#sizes").html("Sizes not available");
      //     }
      //   }
        
      // });
    });




</script>
