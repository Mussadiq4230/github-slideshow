<span onclick="hideModalById('modal_product_details')" style="float: right;
    cursor: pointer;
    color: #000;" >
             <i style="font-size: 21px;" class="fas fa-times"></i></span>
	<div class="row " style="padding:10px">

		<!--Middle Part Start-->
		<div id="content" class="col-sm-12">
			<div itemscope="" itemtype="http://schema.org/Product">
			
				<div class="row product-info">
					<div class="col-sm-6">
						<div class="image">
							<div style="height:425px;width:350px;" class="zoomWrapper">
								<img class="img-responsive" itemprop="image" id="zoom_01" src="{{$product->image}}" title="{{$product->name}}" alt="{{$product->name}}" data-zoom-image="{{$product->image}}" style="position: absolute; width: 350px; height: 425px;">
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
								<div style="background: url(&quot;image/progress.gif&quot;) center center no-repeat; height: 525px; width: 350px; z-index: 2000; position: absolute; display: none;"></div>
							</div>
						</div>

						@if(isset($product->all_images) && $product->all_images !="")

							<div class="center-block text-center">
								<span class="zoom-gallery"><i class="fa fa-search"></i> Click image for Gallery</span>
							</div>

							<?php 
							$images_array = explode('|',$product->all_images);

							?>

							@if(count($images_array)>1)
							
								<div class="image-additional" id="gallery_01"> 

									@foreach($images_array as $img)

										<a class="thumbnail" href="#" data-zoom-image="{{$img}}" data-image="{{$img}}" title="{{$product->name}}">
											<img src="{{$img}}" title="{{$product->name}}" alt="{{$product->name}}">
										</a> 
									@endforeach
								
								</div>
							@endif

						@endif

					</div>
					<div class="col-sm-6">
						<br/>
						<br/>
						<h2 class="title" itemprop="name">{{$product->name}} </h2>
						<ul class="list-unstyled description">
							<li><b>Brand:</b> <a href="/redirect_to/{{$product->id}}"><span itemprop="brand">{{$product->store_name}}</span></a></li>
							<li><b>Category:</b> <span itemprop="category"> {{$product->our_category ? $product->our_category->category_name : ""}} for  {{$product->parent_category ? $product->parent_category->parent_category_name: ""}}</span></li>
							<li>
								<b>Color:</b> 
								<span itemprop="color">
									{{str_replace('|',',',$product->color)}}
								</span>
							</li>
							<li>
								<b>Size:</b> 
								<span itemprop="size" class="badge badge-default" style="font-size:inherit">
									{{str_replace('|',',',$product->size)}}
								</span>
							</li>
						</ul>
						<br/>
						<ul class="price-box" style="padding:15px">
							<?php 
							$from = "";

							if($product->price && $product->price !="" && $product->highest_price && $product->highest_price !=""){
								$from = "From ";
							}
							?>
							<li class="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
								<span class="price-old">{{$product->currency}}{{$product->price}}
								</span> 
								
								<span itemprop="price">	{{$product->currency}}{{$product->sale_price}}
									<span itemprop="availability" content="In Stock"></span>
								</span>
							
							</li>

							@if($product->offer_type_id && $product->offer_type_id !="")
								<li>
									<br/>
									<span class="label label-success" style="padding:8px;border-radius:0px;font-size:16px">{{$product->offer_type}}
									</span>
									@if($product->discount_price && $product->discount_price)
										<br/> Discount ${{$product->discount}}
									@endif
									
									@if($product->coupon_code && $product->coupon_code !="")
										
										<span style="margin-left:15px; background:white;border:2px dotted orange; border-radius: 0px; padding:8px;font-weight: bold;cursor: pointer" >
											{{$product->coupon_code}}
										</span>
										<small  title="Copy the Code" style="font-size:14px;cursor: pointer" onclick="copyToClipBoard('{{$product->coupon_code}}')">&nbsp;&nbsp;Copy</small>
										&nbsp;
										<span style="color:red;display: none;font-weight: bold" id="msg-copy" >Copied!</span>
									@endif

								</li>
							@endif
						</ul>
						<br/>


						<div id="product">
							
							<div class="cart">
								<div>
							
									<a href="/redirect_to/{{$product->id}}" target="blank" id="button-cart" class="btn btn-primary btn-lg">Buy this Product</a>
								</div>
								<div class="add-to-links" style="margin-left: 10px;vertical-align: middle;font-size: 14px">
									<button type="button" class="btn btn-xs  icon-{{$product->id}}" onclick="addFavourite('{{$product->id}}')" data-toggle="tooltip" data-original-title="Add to Favourite" style="font-size: 15px;"><i class="fa fa-heart "></i> </button>
									<button type="button" class="btn btn-xs btn-circle" data-toggle="tooltip" data-original-title="Set Product Alert" onclick="setProductAlert('{{$product->id}}')" style="font-size: 15px;"><i class="fa fa-bell"></i></button>
									<button class="btn btn-xs btn-circle" type="button" class="wishlist" onclick="compareProduct('{{$product->id}}')" data-toggle="tooltip" data-original-title="Compare This Product"><i class="fas fa-exchange-alt" style="font-size: 15px;"></i> </button>
								</div>
							</div>

							
							
							<table class="table table-bordered table-striped">
								<thead>
									<tr >
										<td colspan="2">
											<h4>Available Options</h4>
										</td>
									</tr>
								</thead>
								<tbody>
									
									@if($product->material && $product->material !="")
									<tr>
										<td><b>Material: </b> </td>
										<td>{{str_replace('|',',',$product->material)}}</td>
									</tr>
									@endif

									@if($product->feature && $product->feature !="")
									<tr>
										<td><b>Feature: </b> </td>
										<td>{{str_replace('|',',',$product->feature)}}</td>
									</tr>
									@endif
									
									@if($product->dress_length && $product->dress_length !="")
									<tr>
										<td><b>Dress Length: </b> </td>
										<td>{{str_replace('|',',',$product->dress_length)}}</td>
									</tr>
									@endif

									@if($product->character && $product->character !="")
									<tr>
										<td><b>Character: </b> </td>
										<td>{{str_replace('|',',',$product->character)}}</td>
									</tr>
									@endif

									@if($product->fit_type && $product->fit_type !="")
									<tr>
										<td><b>Fit Type: </b> </td>
										<td>{{str_replace('|',',',$product->fit_type)}}</td>
									</tr>
									@endif

									@if($product->closure && $product->closure !="")
									<tr>
										<td><b>Closure: </b> </td>
										<td>{{str_replace('|',',',$product->closure)}}</td>
									</tr>
									@endif	

									@if($product->dress_style && $product->dress_style !="")
									<tr>
										<td><b>Dress Style: </b> </td>
										<td>{{str_replace('|',',',$product->dress_style)}}</td>
									</tr>
									@endif	

									@if($product->pattern && $product->pattern !="")
									<tr>
										<td><b>Pattern: </b> </td>
										<td>{{str_replace('|',',',$product->pattern)}}</td>
									</tr>
									@endif	

									@if($product->neckline && $product->neckline !="")
									<tr>
										<td><b>Neckline: </b> </td>
										<td>{{str_replace('|',',',$product->neckline)}}</td>
									</tr>
									@endif	

									@if($product->theme && $product->theme !="")
									<tr>
										<td><b>Theme: </b> </td>
										<td>{{str_replace('|',',',$product->theme)}}</td>
									</tr>
									@endif	

								

									@if($product->fabric_type && $product->fabric_type !="")
									<tr>
										<td><b>Fabric Type: </b> </td>
										<td>{{str_replace('|',',',$product->fabric_type)}}</td>
									</tr>
									@endif	

									@if($product->sleeve_length && $product->sleeve_length !="")
									<tr>
										<td><b>Sleeve Length: </b> </td>
										<td>{{str_replace('|',',',$product->sleeve_length)}}</td>
									</tr>
									@endif	

									@if($product->sleeve_type && $product->sleeve_type !="")
									<tr>
										<td><b>Sleeve Type: </b> </td>
										<td>{{str_replace('|',',',$product->sleeve_type)}}</td>
									</tr>
									@endif	

									@if($product->embellishment && $product->embellishment !="")
									<tr>
										<td><b>Embellishment: </b> </td>
										<td>{{str_replace('|',',',$product->embellishment)}}</td>
									</tr>
									@endif	

									@if($product->occasion && $product->occasion !="")
									<tr>
										<td><b>Occasion: </b> </td>
										<td>{{str_replace('|',',',$product->occasion)}}</td>
									</tr>
									@endif	

									@if($product->garment_care && $product->garment_care !="")
									<tr>
										<td><b>Garment Care: </b> </td>
										<td>{{str_replace('|',',',$product->garment_care)}}</td>
									</tr>
									@endif	

									@if($product->season && $product->season !="")
									<tr>
										<td><b>Season: </b> </td>
										<td>{{str_replace('|',',',$product->season)}}</td>
									</tr>
									@endif	

								</tbody>
							</table>
						
								</p>
						

						</div>
						
						<hr>
						<!-- AddThis Button BEGIN -->
						<center id="share-div">
					    <b>Share this:</b>
					      <br>
					      <a href="#" class="fab fa-facebook" onclick="share('facebook','{{url($url)}}','{{$product->name}}');return false;" rel="nofollow" share_url="{{url($url)}}" target="_blank"></a>
					      <a href="#" class="fab fa-twitter" onclick="share('twitter','{{url($url)}}','{{$product->name}}')" rel="nofollow" share_url="{{url($url)}}" target="_blank"></a>
					      <a href="#" class="fab fa-linkedin" onclick="share('linkedin', '{{url($url)}}','{{$product->name}}')" rel="nofollow" share_url="{{$url}}">
					      
					      </a>
					       <a href="#" class="fab fa-tumblr" onclick="share('tumblr','{{url($url)}}','{{$product->name}}')" rel="nofollow" share_url="{{$url}}">
					      
					      </a>
					      <a href="#" class="fab fa-mail" onclick="share('email','{{url($url)}}','{{$product->name}}')" rel="nofollow" share_url="{{url($url)}}">
					      @
					      </a>
					    </center>
						<!-- AddThis Button END -->
					</div>
				</div>
			</div>
		</div>
		<!--Middle Part End -->
	</div>
	<div class="row">
		<div class="col-md-12">
			<h4>Description:</h4>
			<p>
				{{$product->description}}
			</p>
		</div>
	</div>

	

<script type="text/javascript">
$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

window.history.pushState("", "", "/{{$url}}");

function copyToClipBoard(code){

	navigator.clipboard.writeText(code);
	
	$("#msg-copy").show();
	
	setTimeout(function() {
		$("#msg-copy").hide();
	}, 20000);
}

$('#modal_product_details').on('hidden.bs.modal', function () {
  // 
  var url = $("#prev_url").val();
  window.history.pushState("", "", url);
})

</script>