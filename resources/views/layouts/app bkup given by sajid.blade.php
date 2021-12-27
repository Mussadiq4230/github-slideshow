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
            <div id="logo" style="text-align: left!important"><a href="{{route('home')}}"><img class="img-responsive" src="{{asset('image/logo.png')}}" title="Dress Ads" alt="Dress Ads" /></a></div>
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
            <li class="" >
              
              <a href="{{route('home')}}" class="home_link" title="Home" >Home</a>
            </li>

             <li class="dropdown menu_brands large_menu">
                                   
                <a href="{{route('shop.categoryProdcuts','women')}}" class="d-flex align-items-center">Women</a>
              
                <div class="dropdown-menu ">
                  <div class="row m-0 no-gutters">
                    <div class="col-lg-6 col-md-4 col-sm-12 p-2 mt-2">

                      <div class=" pl-3">
                        <h3 class="mega-menu-cat-title text-uppercase text-left ">
                          Shop by Categories
                        </h3>  
                      </div>
                      <ul class="row">
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women/casual" class="text-capitalize  text-left ml-2">Casual</a>
                        </li>
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women/cocktail" class="text-capitalize  text-left ml-2">Cocktail</a>
                        </li>
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women/formal" class="text-capitalize  text-left ml-2">Formal</a>
                        </li>
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women/jumper" class="text-capitalize  text-left ml-2">Jumper</a>
                        </li>
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a class="text-capitalize  text-left ml-2">Jumpsuits</a>
                        </li>
                      </ul>
                      <br/>
                       <div class=" pl-3">
                        <h3 class="mega-menu-cat-title text-uppercase text-left ">
                          Shop by Dress Style
                        </h3>  
                      </div>
                      
                      <ul class="row">
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=1" class="text-capitalize  text-left ml-2">2 In 1 </a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=2"  class="text-capitalize  text-left ml-2">Co-ordinate</a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=3"  class="text-capitalize  text-left ml-2">A-line</a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=4"  class="text-capitalize  text-left ml-2">Backless</a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=5" class="text-capitalize  text-left ml-2">Bandeau</a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=6" class="text-capitalize  text-left ml-2">Blouson</a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=7" class="text-capitalize  text-left ml-2">Bodycon</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=8" class="text-capitalize  text-left ml-2">Bodysuit</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=9" class="text-capitalize  text-left ml-2">Dress Set</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=10" class="text-capitalize  text-left ml-2">Fit & Flare</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=11" class="text-capitalize  text-left ml-2">Gown</a>
                        </li>
                     
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=12" class="text-capitalize  text-left ml-2">Jumper</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=13" class="text-capitalize  text-left ml-2">Jumpsuit</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=14" class="text-capitalize  text-left ml-2">Kaftan</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=15" class="text-capitalize  text-left ml-2">Loungeware</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=16" class="text-capitalize  text-left ml-2">Overall</a>
                        </li>


                         <li class="col-md-12 col-sm-12 listItem d-flex justify-content-start align-items-center">
                         
                            <a class="text-capitalize  text-left ml-2" style="color: lightgray"> More Dress Styles </a>
                        </li>
                      </ul>

                    </div>

                    <div class="col-lg-3 col-md4 col-sm-12 megacol2 pl-2 mt-2">
                    
                        <div class="mega-menu-cat-title">
                          <h3 class=" text-uppercase text-left">
                            Shop by Occasion
                          </h3>
                        </div>
                        
                        <ul class="row m-0 no-gutters">

                          <li class=" col-6 listItems2 mt-2">
                            <div class="mega-menu-img mx-auto">
                              <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                            </div>
                            <a href="/shop/women?occasions[]=1" class="text-center pt-2">Bridal</a>
                          </li>

                          <li class=" col-6 listItems2 mt-2">
                            <div class="mega-menu-img mx-auto">
                              <img src="{{asset('image/4.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                            </div>
                            <a href="/shop/women?occasions[]=2" class="text-center pt-2 listItem2Title">Cocktail</a>
                          </li>

                          <li class=" col-6 listItems2 mt-2">
                            <div class="mega-menu-img mx-auto">
                              <img src="{{asset('image/4.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                            </div>
                            <a href="/shop/women?occasions[]=3" class="text-center pt-2 listItem2Title">Holiday</a>
                          </li>

                          <li class=" col-6 listItems2 mt-2">
                            <div class="mega-menu-img mx-auto">
                              <img src="{{asset('image/4.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                            </div>
                            <a href="/shop/women?occasions[]=4" class="text-center pt-2 listItem2Title">Evening Dress</a>
                          </li>

                        </ul>
                        <br/>
                        <center>
                           <a class="text-capitalize   text-center mb-2 ml-2" style="color: lightgray"> More Occasions </a>
                        </center>
                    </div>

                    <div class="col-lg-3 col-md4 col-sm-12 mt-2 megacol2 pl-3">
                        <div class=" pl-3 mega-menu-cat-title">
                          <h3 class=" text-uppercase text-left ">
                            Shop by Dress Length
                          </h3>  
                        </div>
                        <ul class="m-0 no-gutters">

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/shop/women?dress_length[]=1" class="text-left pt-2 pl-3 ">Floor Length</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/women/shop?dress_length[]=2" class="text-left pt-2 pl-3 ">High Low</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/women/shop?dress_length[]=3" class="text-left pt-2 pl-3 ">Maxi</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/women/shop?dress_length[]=4" class="text-left pt-2 pl-3 ">Midi</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/women/shop?dress_length[]=5" class="text-left pt-2 pl-3 ">Mini</a>
                              </div>
                            </li>

                          </ul>

                    </div>

                  </div>
                </div>
              </li>
              

               <li class="dropdown menu_brands large_menu">
                                   
                <a href="{{route('shop.categoryProdcuts','men')}}" class="d-flex align-items-center">Men</a>
              
                <div class="dropdown-menu ">
                  <div class="row m-0 no-gutters">
                    <div class="col-lg-6 col-md-4 col-sm-12 p-2 mt-2">

                      <div class=" pl-3">
                        <h3 class="mega-menu-cat-title text-uppercase text-left ">
                          Shop by Categories
                        </h3>  
                      </div>
                      <ul class="row">
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/men/casual" class="text-capitalize  text-left ml-2">Casual</a>
                        </li>
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/men/formal" class="text-capitalize  text-left ml-2">Formal</a>
                        </li>
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women/formal" class="text-capitalize  text-left ml-2">Formal</a>
                        </li>
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women/jumper" class="text-capitalize  text-left ml-2">Jumper</a>
                        </li>
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a class="text-capitalize  text-left ml-2">Jumpsuits</a>
                        </li>
                      </ul>
                      <br/>
                       <div class=" pl-3">
                        <h3 class="mega-menu-cat-title text-uppercase text-left ">
                          Shop by Dress Style
                        </h3>  
                      </div>
                      
                      <ul class="row">
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=1" class="text-capitalize  text-left ml-2">2 In 1 </a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=2"  class="text-capitalize  text-left ml-2">Co-ordinate</a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=3"  class="text-capitalize  text-left ml-2">A-line</a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=4"  class="text-capitalize  text-left ml-2">Backless</a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=5" class="text-capitalize  text-left ml-2">Bandeau</a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=6" class="text-capitalize  text-left ml-2">Blouson</a>
                        </li>
                        
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=7" class="text-capitalize  text-left ml-2">Bodycon</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=8" class="text-capitalize  text-left ml-2">Bodysuit</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=9" class="text-capitalize  text-left ml-2">Dress Set</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=10" class="text-capitalize  text-left ml-2">Fit & Flare</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=11" class="text-capitalize  text-left ml-2">Gown</a>
                        </li>
                     
                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=12" class="text-capitalize  text-left ml-2">Jumper</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=13" class="text-capitalize  text-left ml-2">Jumpsuit</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=14" class="text-capitalize  text-left ml-2">Kaftan</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=15" class="text-capitalize  text-left ml-2">Loungeware</a>
                        </li>

                        <li class="col-md-3 col-sm-12 listItem d-flex justify-content-start align-items-center">
                          <i class="fas fa-angle-double-right" style="color:#fff;" ></i>
                            <a href="/shop/women?dress_styles[]=16" class="text-capitalize  text-left ml-2">Overall</a>
                        </li>


                         <li class="col-md-12 col-sm-12 listItem d-flex justify-content-start align-items-center">
                         
                            <a class="text-capitalize  text-left ml-2" style="color: lightgray"> More Dress Styles </a>
                        </li>
                      </ul>

                    </div>

                    <div class="col-lg-3 col-md4 col-sm-12 megacol2 pl-2 mt-2">
                    
                        <div class="mega-menu-cat-title">
                          <h3 class=" text-uppercase text-left">
                            Shop by Occasion
                          </h3>
                        </div>
                        
                        <ul class="row m-0 no-gutters">

                          <li class=" col-6 listItems2 mt-2">
                            <div class="mega-menu-img mx-auto">
                              <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                            </div>
                            <a href="/shop/women?occasions[]=1" class="text-center pt-2">Bridal</a>
                          </li>

                          <li class=" col-6 listItems2 mt-2">
                            <div class="mega-menu-img mx-auto">
                              <img src="{{asset('image/4.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                            </div>
                            <a href="/shop/women?occasions[]=2" class="text-center pt-2 listItem2Title">Cocktail</a>
                          </li>

                          <li class=" col-6 listItems2 mt-2">
                            <div class="mega-menu-img mx-auto">
                              <img src="{{asset('image/4.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                            </div>
                            <a href="/shop/women?occasions[]=3" class="text-center pt-2 listItem2Title">Holiday</a>
                          </li>

                          <li class=" col-6 listItems2 mt-2">
                            <div class="mega-menu-img mx-auto">
                              <img src="{{asset('image/4.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                            </div>
                            <a href="/shop/women?occasions[]=4" class="text-center pt-2 listItem2Title">Evening Dress</a>
                          </li>

                        </ul>
                        <br/>
                        <center>
                           <a class="text-capitalize   text-center mb-2 ml-2" style="color: lightgray"> More Occasions </a>
                        </center>
                    </div>

                    <div class="col-lg-3 col-md4 col-sm-12 mt-2 megacol2 pl-3">
                        <div class=" pl-3 mega-menu-cat-title">
                          <h3 class=" text-uppercase text-left ">
                            Shop by Dress Length
                          </h3>  
                        </div>
                        <ul class="m-0 no-gutters">

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/shop/women?dress_length[]=1" class="text-left pt-2 pl-3 ">Floor Length</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/women/shop?dress_length[]=2" class="text-left pt-2 pl-3 ">High Low</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/women/shop?dress_length[]=3" class="text-left pt-2 pl-3 ">Maxi</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/women/shop?dress_length[]=4" class="text-left pt-2 pl-3 ">Midi</a>
                              </div>
                            </li>

                            <li class="mt-2 w-100  mt-2 d-flex justify-content-start align-items-center ListCol3">
                              <div class="mega-menu-img-col3">
                                <img src="{{asset('image/3.jpg')}}" alt="" style="width:100%; height:100%;border-radius:50%;">
                              </div>
                              <div class="megaMenucol3subTitle w-50">
                                <a href="/women/shop?dress_length[]=5" class="text-left pt-2 pl-3 ">Mini</a>
                              </div>
                            </li>

                          </ul>

                    </div>

                  </div>
                </div>
              </li>

              <li class="dropdown wrap_custom_block hidden-sm hidden-xs">
                <a class="d-flex align-items-center" >Kids</a>
                <div class="dropdown-menu custom_block kidsMegaMenuBody">
                  <ul>
                    <li>
                      <table>
                        <tbody>
                          <tr>
                          
                            <td>
                              <a href="{{route('shop.categoryProdcuts','baby')}}">
                                <!-- <img alt="" title="Baby" src="{{asset('image/baby.jpg')}}"> -->
                                <div class="menuImages1" style="width:200px;height:130px;">
                                <!-- <img alt="" title="Baby" src="{{asset('image/vector/baby1.jpg')}}" style=
                                "width:100%; height:100%"> -->
                                </div>
                              </a>
                            </td>
                            <td>
                              <a href="{{route('shop.categoryProdcuts','girl')}}">
                                <!-- <img alt="" title="Girl" src="{{asset('image/girls.jpg')}}"> -->
                                <div class="menuImages2" 
                                style="
                                width:200px;height:130px;
                                ">
                                <!-- <img alt="" title="Girl" src="{{asset('image/vector/girl2.png')}}" style=
                                "width:100%; height:100%"> -->
                                </div>
                              </a>
                            </td>
                            <td>
                              <a href="{{route('shop.categoryProdcuts','boy')}}">
                                <!-- <img alt="" title="Boy" src="{{asset('image/boys.jpg')}}"> -->
                                <div class="menuImages3" style="width:200px;height:130px;">
                                <!-- <img alt="" title="Boy" src="{{asset('image/vector/boy2.png')}}" style=
                                "width:100%; height:100%"> -->
                                </div>
                              </a>
                            </td>
                          </tr>
                        
                        
                          <tr>
                           
                              
                                <td >
                                  Baby Girl
                                  <i class="fas fa-angle-double-right"></i>
                                    <a 
                                      href="{{route('shop.categoryProdcuts1', ['baby-girl', '2M'])}}" class="btn btn-primary">
                                    </a>
                                      <br>
                                </td>
                                  <td >
                                  Baby Boy
                                  <i class="fas fa-angle-double-right"></i>
                                    <a 
                                      href="{{route('shop.categoryProdcuts1', ['baby-boy', '2M'])}}" class="btn btn-primary">
                                    </a>
                                      <br>
                                </td>
                                  <td >
                                  Girls
                                  <i class="fas fa-angle-double-right"></i>
                                    <a 
                                      href="{{route('shop.categoryProdcuts1', ['girls', '2M'])}}" class="btn btn-primary">
                                    </a>
                                      <br>
                                </td>
                                   <td >
                                  Boys
                                  <i class="fas fa-angle-double-right"></i>
                                    <a 
                                      href="{{route('shop.categoryProdcuts1', ['boys', '2M'])}}" class="btn btn-primary">
                                    </a>
                                      <br>
                                </td>
                          
                          
                          </tr>
                        
                        </tbody>
                      </table>
                    </li>
                  </ul>
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
                        <!-- <h3 class="mega-menu-cat-title text-uppercase text-left ">
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

              <li class="contact-link menu_brands ">
                <a id ="newArivals"class="d-flex align-items-center" href="{{route('shop.offerProducts','new-arrival')}}" >New Arrivals</a>
                <div class="dropdown-menu w-100 p-0">
                                             
                        <!-- /////////////BRAND BODY///////////// -->
                  <div class="newArrivalsMegaMenuBody w-100 p-2 py-4">
          
                    <div class="newArrivalWrapper d-flex justify-content-center align-items-center flex-wrap">

                              <!-- women -->
                      <div class="newArrival">
                          <a class="newArrivalImg" style="background-color: #eaeded !important;">
                              <img src="{{asset('image/womenCat/casual1.png')}}" alt="" style="width:100%; height:100%; object-fit:cover;">
                          </a>
                          <a href="" class="newArrivalName py-2"><span>Women</span></a>
                          <a href="" class="newArrivalSeeMore"><span>see more</span></a>
                      </div>
                              <!-- men -->
                      <div class="newArrival">
                          <a class="newArrivalImg" style="background-color: #eaeded !important;">
                              <img src="{{asset('image/104.png')}}" alt="" style="width:100%; height:100%; object-fit:cover;">
                          </a>
                          <a href="" class="newArrivalName py-2"><span>men</span></a>
                          <a href="" class="newArrivalSeeMore"><span>see more</span></a>
                      </div>
                              <!-- boy -->
                      <div class="newArrival">
                          <a class="newArrivalImg" style="background-color: #eaeded !important;">
                              <img src="{{asset('image/macbook_3-270x405.jpg')}}" alt="" style="width:100%; height:100%; object-fit:cover;">
                          </a>
                          <a href="" class="newArrivalName py-2"><span>boy</span></a>
                          <a href="" class="newArrivalSeeMore"><span>see more</span></a>
                      </div>
                              <!-- girl -->
                      <div class="newArrival">
                          <a class="newArrivalImg" style="background-color: #eaeded !important;">
                              <img src="{{asset('image/112.png')}}" alt="" style="width:100%; height:100%; object-fit:cover;">
                          </a>
                          <a href="" class="newArrivalName py-2"><span>girl</span></a>
                          <a href="" class="newArrivalSeeMore"><span>see more</span></a>
                      </div>
                              <!-- baby boy -->
                      <div class="newArrival">
                          <a class="newArrivalImg" style="background-color: #eaeded !important;">
                              <img src="{{asset('image/babyBoy2.jpg')}}" alt="" style="width:100%; height:100%; object-fit:cover;">
                          </a>
                          <a href="" class="newArrivalName py-2"><span>baby boy</span></a>
                          <a href="" class="newArrivalSeeMore"><span>see more</span></a>
                      </div>
                              <!-- baby girl -->
                      <div class="newArrival">
                          <a class="newArrivalImg" style="background-color: #eaeded !important;">
                              <img src="{{asset('image/babyBoy.jpg')}}" alt="" style="width:100%; height:100%; object-fit:cover;">
                          </a>
                          <a href="" class="newArrivalName py-2"><span>baby girl</span></a>
                          <a href="" class="newArrivalSeeMore"><span>see more</span></a>
                      </div>


                    </div>
                    
                        
                        
                  </div>

                 
              </div>
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
                  $max_count = count($offer_types)/2;
                  $cats1 = array_slice($offer_types,$count_index, $max_count);
                  $cats2 = array_slice($offer_types,count($cats1), count($offer_types));       
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
              <li class="dropdown menu_brands">
                <a class="d-flex align-items-center" >Businesses</a>
                    <!-- href="{{route('businesses')}}" -->

                <div class="dropdown-menu mx-auto">

                  <div class="row m-0 no-gutters businessMagaMenubody w-100">

                                     <!-- col1 -->
                    <div class="col-lg-2 col-md-2 col-sm-4 pt-4">

                        <div class="mega__products d-flex justify-content-center align-items-start flex-column">
                        
                          <div class=" m-0 pb-1"><a class="mega_col_head text-uppercase font-weight-bold" href=""style="font-size:14px;">Clothing</a> </div>
                          <div><a class="product__name"  href="">Dresses</a></div>
                          <div><a class="product__name" href="">Tops and Tees</a></div>
                          <div><a class="product__name" href="">Sweaters</a></div>
                          <div><a class="product__name" href="">Swimsuit & coverups</a></div>
                          <div><a class="product__name" href="">Coats & jackets</a></div>                     

                        </div>

                        <div class="mega__products d-flex justify-content-center align-items-start flex-column mt-2">
                          
                          <div class=" m-0 pb-1"><a class="mega_col_head text-uppercase font-weight-bold" href=""style="font-size:14px;">Watches</a> </div>
                          <div><a class="product__name" href="">Dresses</a></div>
                          <div><a class="product__name" href="">Tops and Tees</a></div>
                          <div><a class="product__name" href="">Sweaters</a></div>
                          <div><a class="product__name" href="">Swimsuit & coverups</a></div>
                          <div><a class="product__name" href="">Coats & jackets</a></div>                     

                        </div>

                        <div class="mega__products d-flex justify-content-center align-items-start flex-column mt-2">
                        
                          <div class=" m-0 pb-1"><a class="mega_col_head text-uppercase font-weight-bold" href=""style="font-size:14px;">Shoes</a> </div>
                          <div><a class="product__name" href="">Dresses</a></div>
                          <div><a class="product__name" href="">Tops and Tees</a></div>
                          <div><a class="product__name" href="">Sweaters</a></div>
                          <div><a class="product__name" href="">Swimsuit & coverups</a></div>
                          <div><a class="product__name" href="">Coats & jackets</a></div>                     

                        </div>
                     

                    </div>

                                    <!-- col2 -->
                    <div class="col-lg-2 col-md-2 col-sm-4 p-4">

                        <div class="mega__products d-flex justify-content-center align-items-start flex-column">
                         
                          <div class=" m-0 pb-1"><a class="mega_col_head text-uppercase font-weight-bold" href=""style="font-size:14px;">Jewelry</a> </div>
                          <div><a class="product__name" href="">Dresses</a></div>
                          <div><a class="product__name" href="">Tops and Tees</a></div>
                          <div><a class="product__name" href="">Sweaters</a></div>
                          <div><a class="product__name" href="">Swimsuit & coverups</a></div>
                          <div><a class="product__name" href="">Coats & jackets</a></div>                     

                        </div>

                        <div class="mega__products d-flex justify-content-center align-items-start flex-column mt-2">
                          <div class=" m-0 pb-1"><a class="mega_col_head text-uppercase font-weight-bold" href=""style="font-size:14px;">Clothing</a> </div>
                          <div><a class="product__name" href="">Dresses</a></div>
                          <div><a class="product__name" href="">Tops and Tees</a></div>
                          <div><a class="product__name" href="">Sweaters</a></div>
                          <div><a class="product__name" href="">Swimsuit & coverups</a></div>
                          <div><a class="product__name" href="">Coats & jackets</a></div>                     

                        </div>

                    </div>
                                    <!-- col3 -->
                    <div class="col-lg-2 col-md-2 col-sm-4 p-4">

                      <div class="mega__products d-flex justify-content-center align-items-start flex-column">
                      
                          <div class=" m-0 pb-1"><a class="mega_col_head text-uppercase font-weight-bold" href=""style="font-size:14px;">Clothing</a> </div>
                          <div ><a class="product__name" href="">Dresses</a></div>
                        

                      </div>

                      <div class="mega__products d-flex justify-content-center align-items-start flex-column mt-2">
                          
                          <div class=" m-0 pb-1"><a class="mega_col_head text-uppercase font-weight-bold" href="" style="font-size:14px;">Clothing</a> </div>
                          <div class="product__name"><a href="">Dresses</a></div>
                          <div class="product__name"><a href="">Tops and Tees</a></div>
                          <div class="product__name"><a href="">Sweaters</a></div>
                          <div class="product__name"><a href="">Swimsuit & coverups</a></div>
                          <div class="product__name"><a href="">Coats & jackets</a></div>                     

                      </div>

                    </div>
                                    <!-- col4 -->
                    <div class="col-lg-2 col-md-2 col-sm-4 pt-4">

                        <a class="d-flex justify-content-start align-items-center flex-column mega__col__link">

                          <div class="mega__col__img">
                            <img src="{{asset('image/boysbanner.jpg')}}" alt="" style="width:100%;height:100%;">
                          </div>
                         
                          <p class="product__title text-capitalize py-2">The Fashion Gift Guide</p>
                          <div class="product__shop__now">Shop now</div>

                        </a>

                    </div>
                                    <!-- col5 -->
                    <div class="col-lg-2 col-md-2 col-sm-4 pt-4">
                        <a class="d-flex justify-content-start align-items-center flex-column mega__col__link">

                          <div class="mega__col__img">
                            <img src="{{asset('image/logo.png')}}" alt="" style="width:100%;height:100%;">
                          </div>
                         
                          <p class="product__title text-capitalize py-2">The Fashion Gift Guide</p>
                          <div class="product__shop__now">Shop now</div>
                                                    
                        </a>
                    </div>
                                    <!-- col6 -->
                    <div class="col-lg-2 col-md-2 col-sm-4 pt-4">
                        <a class="d-flex justify-content-start align-items-center flex-column mega__col__link">

                          <div class="mega__col__img">
                            <img src="{{asset('image/add2.jpg')}}" alt="" style="width:100%;height:100%;">
                          </div>

                          <p class="product__title text-capitalize py-2">The Fashion Gift Guide</p>
                          <div class="product__shop__now">Shop now</div>
                                                  
                        </a>
                    </div>
                   
                  </div>

                  <div class="row salesOfferBottom py-2 no-gutters">
                    <p class="mx-auto text-center my-0">50%OFF EVERYTHING AND FREE SHIPPING</p>
                  </div>
                  
                </div>

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
      
            <div class="modal-body" id="content-div-comparison" style="overflow-y: scroll;
    max-height: 450px;">
                
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
