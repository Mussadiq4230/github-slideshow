<span onclick="hideModalById('modal_product_comparison')" style="float: right;
	cursor: pointer;
	color: #000; " >
	<i style="font-size: 21px;" class="fas fa-times"></i>
</span>
<style>
#loadMore {
    padding: 10px;
    text-align: center;
    background-color: black;
    color: #fff;
    border-width: 0 1px 1px 0;
    border-style: solid;
    border-color: #fff;
    box-shadow: 0 1px 1px #ccc;
    transition: all 600ms ease-in-out;
    -webkit-transition: all 600ms ease-in-out;
    -moz-transition: all 600ms ease-in-out;
    -o-transition: all 600ms ease-in-out;
}
#loadMore:hover {
    background-color: gray;
    color: #fff;
}
.totop {
    position: fixed;
    bottom: 50px;
    right: 40px;
   
}
.totop a {
    display: none;
     background: lightgray;
    padding:6px;
    color: black;
}
</style>
<div class="row">

	<div id="content" class="col-md-12">
		@foreach($products as $product)

			<div class="row product-load" style="display:none;">
				<div class="col-md-9">
					<a href="/redirect_to/{{$product->id}}"> 
						<h3>
							{{$product->name}}
						</h3>
					</a>
					@if($product->price && $product->price !="")
					<br/>
					<h4>
						<span style="font-size: 13px;text-decoration: line-through;">
							@if($product->sale_price && $product->sale_price !="")
								{{$product->currency}}{{$product->price}}
							@endif
						</span>
						&nbsp;
						{{$product->currency}}{{$product->price}}
					</h4>
					@endif

					<p>
						From: <b style="font-size: 14px"> <a href="/redirect_to/{{$product->id}}">{{$product->store_name}}</a>
						</b>
					</p>
				</div>
				<div class="col-md-3">
					
					<a href="/redirect_to/{{$product->id}}" target="blank" id="button-cart" class="btn btn-primary btn-lg">
						Buy this Product
					</a>
				</div>
				<div class="col-md-12">	<hr/></div>
			</div>
		
		@endforeach

		<center style="margin-top:15px">
			<a href="#" id="loadMore">Load More</a>
		</center>

		<p class="totop"> 
		    <a href="#top">Back to top</a> 
		</p>
	</div>
</div>

<script type="text/javascript">
	$(function () {
	    $(".product-load").slice(0, 8).show();
	    $("#loadMore").on('click', function (e) {
	        e.preventDefault();
	        if($(".product-load:hidden").length < 9){
	        	$("#loadMore").hide();
	    	}
	        $(".product-load:hidden").slice(0, 8).slideDown();
	        
	        if ($(".product-load:hidden").length == 0) {
	            $("#load").fadeOut('slow');
	        }
	        // $('html,body').animate({
	        //     scrollTop: $(this).offset().top
	        // }, 1500);
	    });

	    $('a[href=#top]').click(function () {
		    $('#content-div-comparison').animate({
		        scrollTop: 0
		    }, 600);

		    //  $(".product-load").slice(0, 8).show();
		    // $("#loadMore").show();
		    return false;
		});


	});

	$('#content-div-comparison').scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.totop a').fadeIn();
    } else {
        $('.totop a').fadeOut();
    }
});

	
</script>