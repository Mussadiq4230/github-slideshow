
@if($products && $products->total() >0 )
<div class="row col-md-12 ">
  <div class="col-sm-9"></div>
  <div class="col-sm-2">
   <label class="control-label" for="input-sort">Sort By:</label>
   <select id="input-sort" value="{{isset($request_data->sort) ? $request_data->sort :''}}" name="sort"  onchange="submitForm()"  class="form-control" style="float: right">
    <option value="">Default</option>
    <option 
    {{isset($request_data->sort) && $request_data->sort == 'name-asc'? 'selected' :''}}
    value="name-asc"
    >Name (A - Z)</option>
    <option 
    {{isset($request_data->sort) && $request_data->sort == 'name-desc'? 'selected' :''}}
    value="name-desc"
    >Name (Z - A)</option>
    <option 
    {{isset($request_data->sort) && $request_data->sort == 'price-asc'? 'selected' :''}}
    value="price-asc"
    >Price (Low &gt; High)</option>
    <option 
    {{isset($request_data->sort) && $request_data->sort == 'price-desc'? 'selected' :''}}
    value="price-desc"
    >Price (High &gt; Low)</option>
  </select>
</div>
<div class="col-sm-1 ">
  <label class="control-label" for="input-limit">Show:</label>
  
  <select id="input-limit"  name="limit"  onchange="submitForm()" class="form-control">
    <option 
    value="10" 
    {{isset($request_data->limit) && $request_data->limit == 10? 'selected' :''}}
    >10</option>
    <option 
    value="20" 
    {{isset($request_data->limit) && $request_data->limit == 20? 'selected' :''}}
    >20</option>
    <option 
    {{isset($request_data->limit) && $request_data->limit == '25'? 'selected' :''}}
    value="25"
    >25</option>
    <option 
    {{isset($request_data->limit) && $request_data->limit == '50'? 'selected' :''}}
    value="50"
    >50</option>
    <option 
    {{isset($request_data->limit) && $request_data->limit == '75'? 'selected' :''}}
    value="75"
    >75</option>
    <option 
    {{isset($request_data->limit) && $request_data->limit == '100'? 'selected' :''}}
    value="100"
    >100</option>
  </select>
</div>
</div>
@endif
<!-- ############### Product card will be here start ############-->
<!-- single cards wrapper  -->
<div class="col-md-12">
  <div style="margin-top: 10px !important" class="  row d-flex justify-content-center align-items-center flex-wrap">

    @if($products && $products->total() >0 )

    @foreach($products as $product)
    <!-- single card  -->

    <?php 
    
    $sizes =  explode('|', $product->size);

    ?>
    <!-- single card  -->
    <!-- single card  -->
    <div class="mt-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12 product-card ">

      <div class="p-card-img mx-auto">

        <a  href="#" onclick="redirectProduct('{{$product->id}}','yes')" style="width:100%;height:100%">
          <img  src="{{$product->image}}" alt="" style="width:100%;height:100%"></a>  
          
          @if($product->price>0)

          <?php 
          $saving = ($product->sale_price*100) / $product->price;
          $saving = 100-(int)$saving;
          $saving = $saving <0 ?  ($saving * -1) : $saving;
          ?>
          
          @if($saving)

          <div class="offPrice ml-4 mt-3 d-flex justify-content-center align-items-center">
            <!-- discount offer  -->
            <span>-{{$saving}}%</span>
          </div>  
          @endif
          
          @endif

          

          <div class="d-flex justify-content-center align-items-center iconsSection py-1">

            <div class="p-card-icon mx-1 d-flex justify-content-center align-items-center "   >

              <span class="icon-{{$product->id}} red-tooltip"   type="button"  
                @if(isset($product->favourite_ads[0]) && isset($product->favourite_ads[0]->id))
                data-original-title="Remove from favourite" 
                style="color:red;cursor: pointer;"
                onclick="removeFavourite('{{$product->id}}')"
                data-toggle="tooltip" data-placement="top"
                @else
                data-original-title="Add to favourite" 
                style="cursor:pointer"
                onclick="addFavourite('{{$product->id}}')"
                data-toggle="tooltip" data-placement="top"
                @endif
                >

                @if(isset($product->favourite_ads[0]) && isset($product->favourite_ads[0]->id))
                <i class="fa fa-heart" style="font-size:16px;color:red;"></i>
                @else
                <i class="far fa-heart" style="font-size:16px;"></i>
                @endif
              </span> 
            </div>

            <div class="p-card-icon mx-1 d-flex justify-content-center align-items-center" title="Compare" data-toggle="tooltip" data-placement="top" onclick="compareProduct('{{$product->id}}')">
              <span  onclick="compareProduct('{{$product->id}}')"><i class="fas  fa-less-than-equal"></i></span>  
            </div>

            <div class="p-card-icon mx-1 d-flex justify-content-center align-items-center" title="Price History"data-toggle="tooltip" data-placement="top" onclick="getPriceHistory('{{$product->id}}')" >
              <span  onclick="getPriceHistory('{{$product->id}}')"><i class="fas  fa-dollar-sign"></i></span>    
            </div>

            <div class="p-card-icon mx-1 d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Set Product Alert" onclick="setProductAlert('{{$product->id}}')">
              <span onclick="setProductAlert('{{$product->id}}')"><i class="fas  fa-exclamation-triangle"></i></span>    
            </div>

            <div class="p-card-icon mx-2 d-flex justify-content-center align-items-center"
            data-toggle="tooltip" data-placement="top" title="Last Checked: {{date('F, d, Y h:i:sa',strtotime($product->updated_at))}}" >
            <span> <i class="fas  fa-history"></i></span>
          </div>                                                   

          
        </div>

      </div>

      <div class="infoPopUp px-3 pt-1">

        <div class="product-size">
         @foreach($sizes as $size)
         <span class="px-1 size">{{$size}}</span>
         @endforeach                        
       </div>



       <div class="product-colors d-flex justify-content-start align-items-center py-1">
         @if(isset($color_maps))
         <div class="product-colors d-flex justify-content-start align-items-center py-1">
          @foreach($color_maps as $color)
          <div class="colorArea mr-2" style="background-color:{{strtolower($color->color_code)}}"></div>
          @endforeach
        </div>

        @elseif($product->color && $product->color !="")
        <div class="product-size">
         
          @foreach(explode('|',$product->color) as $color)
          <span class="px-1 size">{{$color}}</span>
          @endforeach
        </div>
        @endif
      </div>

      @if($product->material && $product->material !="")
      
      <div class="product-material pt-1">
        <span class="materialHeading">Material: </span> 
        @foreach(explode('|',$product->material) as $material)
        <span class="material">{{$material}}</span>
        @endforeach
      </div>
      @endif


    </div>

    <div class="productDetails px-3 mt-2">


      <div class="productName d-flex justify-content-start align-items-center">
        <a href="#" onclick="redirectProduct('{{$product->id}}','no')"  title="{{$product->name}}"><span class="font-weight-bold productTitle">
          @if(strlen($product->name) >45)
          {{substr($product->name,0,40)}}..
          @else
          {{$product->name}}
          @endif
        </span>

      </a>

      @if($product->offer_type && $product->offer_type !="")
      <span class=" ml-4 d-flex justify-content-center align-items-center" style="float: right;border-radius: 0px;background: red;text-transform: capitalize; padding: 5px;line-break:none;color:white;font-weight: bold;">
        <!-- discount offer  -->
        <span>{{$product->offer_type}}</span>
      </span>  
      @endif
    </div>

    
    <div class="productPrice mt-2">
      
      @if($product->sale_price && $product->sale_price !="" && $product->price !="")

      @if($product->price && $product->price >0)
      <span class="price" style="font-size: 16px;">${{$product->price}}</span>
      @endif
      <span class="discount pl-2">${{$product->sale_price}}</span>
      @else
      <span class="price">${{$product->price}}</span>
      @endif
      
      
    </div>

    <div class="storeInfo mt-2 d-flex justify-content-start align-items-center">

      <div class="p-card-externalLink mx-2 d-flex justify-content-center align-items-center" title="Check {{$product->store_name}}"data-toggle="tooltip" data-placement="top" >
        <a href="{{$product->store_url}}"><i class="fas fa-link storeLink"></i> {{$product->store_name}}</a>   
      </div>

      <div class="storeName pl-3">
        <a  href='{{$product->store_url}}' target="_blank" class="storeTitle text-capitalize"></a>
      </div>

    </div>

  </div>

</div>

<!-- single card  -->

@endforeach

@else
<div class="col-md-12">
  No Matching Products Found.
</div>
@endif

<?php 
              // dd($products);

?>
</div>


@if($products && $products->total() >0 )


<div class="col-sm-12 mb-4 text-center" style="margin-top:60px;font-size: 15px">Showing

  @if($products->currentPage() == 1)
  1
  @else
  {{($products->currentPage()-1) * ($products->perPage()) }}
  @endif
  to 
  @if($products->lastPage() == $products->currentPage())
  {{$products->total()}}
  @else
  {{($products->currentPage()) * ($products->perPage())}}
  @endif

  out of {{$products->total()}} items </div>

  <div class="col-sm-12 text-center d-flex justify-content-center" style="text-align: center;">
    {{$products && $products->total() >0 ? $products->withQueryString()->links('pagination::bootstrap-4') : ""}}
  </div>
  
  
  @endif
</div>