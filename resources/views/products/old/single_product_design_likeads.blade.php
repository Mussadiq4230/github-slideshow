   <!-- single card  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 col-12 product-div">
                     
                     <section class="profile_panel panel " style=" min-width: 300px; min-height: 340px; border: 1px solid rgba(0, 0, 0, 0.17);">
                       
                      <div class="twt-feed blue-bg" style="background: rgb(33, 47, 60); padding: 5px;">
                        <br/>
                        <span title="Click to view {{$product->name}} on {{$product->store_name}}" style="cursor: pointer; max-width: 280px;">
                          <h5 style="font-weight: bold; font-size: 20px;text-align:center;color:white; height: 48px;margin-top:10px">
                            {{$product->name}}
                          </h5>
                        </span>
                        <a class="logo  cust_link featured" title="{{$product->name}}" href="#" onclick="redirectProduct('{{$product->id}}','yes')" style="border-radius: 50px; border-color: rgb(243, 243, 243); margin-bottom: -50px;align-items: center;position: relative;">
                          <center>

                            <img src="{{$product->image}}" alt="{{$product->name}}" title="{{$product->name}}" style="object-fit: contain; background: white;height: 270px; width: 90%; margin-bottom: -60px;">
                             
                          </center>

                          @if($product->price>0)

                            <?php 
                            $saving = ($product->sale_price*100) / $product->price;
                            $saving = 100-(int)$saving;
                            $saving = $saving <0 ?  ($saving * -1) : $saving;
                            ?>
                          
                            @if($saving)

                              <div class="offPrice d-flex justify-content-center align-items-center" style="position: absolute; top: 0px; left: 15px; opacity:0.2px; padding:0px; border-radius:0px; height: max-content; min-width:70px; height:30px;">
                                  <!-- discount offer  -->
                                <span>{{$saving}}%</span>
                              </div> 

                            @endif
                          
                          @endif
                      </a>
                    </div>
                    <br/>
                    <div class="weather-category twt-category" style="margin-top: 70px;">
                      <center>                       
                        <p>
                        <div class="productPrice">
                           @if($product->sale_price && $product->sale_price !="" )
                            <span class="discount " style="font-size: 20px;font-weight: bold">${{$product->sale_price}}</span>
                            @if($product->price && $product->price >0)
                              <span class="price ml-4" style="font-size:22px; background: black;text-decoration: line-through;color:white;padding:5px;font-weight: bold">${{$product->price}}</span>
                            @endif
                          @else
                            <span class="price"  style="font-size: 16px;font-weight: bold">${{$product->price}}</span>
                          @endif
                        </div>

                        </p>
                      </center>
                      <br/>
                      <div class="infoPopUp px-3 mx-2 pt-1" style="width:90%">

                          <div class="product-size">
                            @foreach($sizes as $size)
                            <span class="px-1 size">{{$size}}</span>
                            @endforeach                   
                          </div>

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
                          
                            @if($product->material && $product->material !="")

                             <div class="product-size">
                               <span class="px-1 size text-underline">Material:</span>
                                @foreach(explode('|',$product->material) as $material)
                                   <span class="px-1 size">{{$material}}</span>
                                @endforeach
                              </div>
                             
                            @endif

                            @if($product->fit_type && $product->fit_type !="")
                            
                              <div class="product-size">
                               <span class="px-1 size text-underline">Fit Type:</span>
                                @foreach(explode('|',$product->fit_type) as $fit_type)
                                   <span class="px-1 size">{{$fit_type}}</span>
                                @endforeach
                              </div>

                            @endif

                            @if($product->dress_length && $product->dress_length !="")
                              
                              <div class="product-size">
                               <span class="px-1 size text-underline">Dress Length:</span>
                                @foreach(explode('|',$product->dress_length) as $dress_length)
                                   <span class="px-1 size">{{$dress_length}}</span>
                                @endforeach
                              </div>
                            @endif

                           

                          <center class="" style="top: 50px;width: 90%">                           
                            <p>
                          
                              <div class="productPrice">
                              @if($product->sale_price && $product->sale_price !="" && $product->price !="")
                                <span class="discount " style="font-size: 20px;font-weight: bold">${{$product->sale_price}}</span>
                                  @if($product->price && $product->price >0)
                                    <span class="price ml-4" style="font-size:22px; background: black;text-decoration: line-through;color:white;padding:5px;font-weight: bold">${{$product->price}}</span>
                                  @endif
                              @else
                                <span class="price"  style="font-size: 16px;font-weight: bold">${{$product->price}}</span>
                              @endif
                            </div>

                          </p>

                        </center>

                        <div class="d-flex justify-content-center align-items-center mx-1 iconsSection py-1" style="background:none;position: absolute;bottom: 0;right: 0;left: 0">

                          <div class="p-card-icon mx-1 d-flex justify-content-center align-items-center red-tooltip" title="Wish List"data-toggle="tooltip" data-placement="top" >
                            <a ><i class="far fa-heart"></i>
                            </a> 
                          </div>

                          <div class="p-card-icon mx-1 d-flex justify-content-center align-items-center" title="Compare"data-toggle="tooltip" data-placement="top">
                            <a href=""><i class="fas  fa-less-than-equal"></i></a>  
                          </div>

                          <div class="p-card-icon mx-1 d-flex justify-content-center align-items-center" title="Set Price"data-toggle="tooltip" data-placement="top">
                            <a href=""><i class="fas  fa-dollar-sign"></i></a>    
                          </div>

                          <div class="p-card-icon mx-1 d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="Alert">
                            <a href=""><i class="fas  fa-exclamation-triangle"></i></a>    
                          </div>

                          <div class="p-card-icon mx-2 d-flex justify-content-center align-items-center"
                            data-toggle="tooltip" data-placement="top" title="Last Checked" >
                            <a href=""><i class="fas  fa-history"></i></a>    
                          </div>                                              

                          
                        </div>

                      

                      </div>

                      <div class="row storeInfo d-flex justify-content-start align-items-center " style="margin-bottom: 10px">
                        <div class="col-md-12">
                        <center>
                          <div class="p-card-externalLink mx-2 d-flex justify-content-center align-items-center" title=""data-toggle="tooltip" data-placement="top" >
                            <a href=""></a>   
                         
                            <a  href='{{$product->store_url}}' target="_blank" class="storeTitle text-capitalize">{{$product->store_name}} <i class="fas fa-link storeLink"></i></a>
                          </div>
                        </center>
                      </div>
                        </div>
                    </div>
                    <br/>
                  </section>
                </div>
                <!-- single card  -->
