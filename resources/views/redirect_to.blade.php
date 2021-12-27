<html><head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon">
<title>Dresses Ads -> {{$product->store ? $product->store->store_name: ""}}</title>
<meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet-skin4.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway" type="text/css">
<!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
  
  <div id="container" style="margin-top: 0px; margin-bottom: 0px">
    <div class="container">
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12" style="    height: 100%;">
          <center style="margin-top:10%">
            <img class="img-responsive" src="http://127.0.0.1:8000/image/logo.png" title="Dress Ads" alt="Dress Ads">
          
            <br/>
            <br/>
            <br/>

            <p>
              <h4 style="font-size: 20px">Now redirecting you to <h4>
            </p>

            <br/>
            <br/>
            
            <img alt="{{$product->store ? $product->store->store_name: ''}}" title="{{$product->store ? $product->store->store_name: ''}}" src="/logos{{$product->store ? $product->store->store_logo: ''}}" width="120">
            
            <br/>
            <br/>

            <p>
              <h4 style="font-size: 22px;font-weight: bold"> {{$product->store ? $product->store->store_name: ""}}</h4>
            </p>

            <br/>
            <br/>

            <p>
              <img src="/image/progress.gif" id="id" height="30" width="30" />
            </p>

            <br/>
            <br/>
            <br/>

            <p style="font-size:15px">
              If taking too long click <a href="{{$product->product_url}}"><b>here</b></a> for redirect.
            </p>

          </center>
         
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>
  <!--Footer Start-->
  
  <!--Footer End-->
</div>
<script type="text/javascript">
 if(document.getElementById('id').src){ 
  setTimeout(function() {
    window.location.href="{{$product->product_url}}";
  }, 4000);

}
</script>
<!-- JS Part Start-->
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- JS Part End-->

</body></html>