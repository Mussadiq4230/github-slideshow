        <!-- ########          Brief Description of this page ########  -->
          <!-- 1 topBanner (styles in single__product.css)
          2 Filter Section (styles in filterStyles.css page)
          3 selected Filter Items and clear button (styles in filterStyles.css and javascript in categoryProduct.js) 
          4 single product cards (styles in single__product.css)
          5 icons this code used some icons (path: public\image\icons)
          6 images (path: '../image/banner/bannerImg.jpg')              -->


@extends('layouts.app')
@section('content')
  <link rel="stylesheet" type="text/css" href="{{asset('css/filtersStyles.css')}}">
  <script type="text/javascript" src="{{asset('js/categoryProduct.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/single__product.css')}}">

    <div class="topBanner w-100" >

      <div class="bannerImg"style="background:url('../image/banner/bannerImage.jpg'); width:100%;height:100%;">
            <div class="bannerHeading d-flex flex-column justify-content-center align-items-center w-100">
                    <p class="bH_title">Women Dresses</p>
                    <p class="bH_para">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet perspiciatis tempora id libero
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet perspiciatis tempora id libero

                    </p>
            </div>
      </div>
      
      <!-- <div class="topBannerImg"style="width:100%;height:100%;">
        <img src="{{asset('image/banner/bannerImg.jpg')}}" alt=""style="width:100%;height:100%;">
      </div> -->

    </div>

    <div class=" filters__section__body my-4 mx-3">
                

                  <!--  filter for large screen start d-none -->
          <div class="row w-100 mx-auto my-4">

                <div id="filters-panel" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
                  <div class="filters-panel__container " data-filters-panel-holder="">
                                                    <!-- Occasions  -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Size" data-filter-options-name-fs="Size">
                      <div class="filter-option__title" data-filter-options-title="">
                        Occasions 
                    
                          <!-- <p>Occasions </p> 
                          <i class="fas fa-angle-down"></i> -->
                      </div>
                    
                      <div class="filter-option__container" data-filter-options-container="">
                        <ul class="filter-option__items" data-filter-options-items="">
                          
                    
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Cocktail"   data-option-value="Cocktail" data-available="256">
                                  <input type="checkbox"id="Cocktail"value="Cocktail" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Cocktail"class="px-2 size-label">Cocktail</label>
                              </div>
                            </li>
                  
                    
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="s" data-option-value="S" data-available="256">

                                  <input type="checkbox"id="Weeding"value="Weeding" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Weeding"class="px-2 size-label">Weeding</label>
                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Fall" data-option-value="Fall" data-available="256">
                                
                                <input type="checkbox"id="Fall"value="Fall" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Fall"class="px-2 size-label">Fall</label>
                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Holiday" data-option-value="Holiday" data-available="256">

                                <input type="checkbox"id="Holiday"value="Holiday" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Holiday"class="px-2 size-label">Holiday</label>
                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Cozy" data-option-value="Cozy" data-available="254">

                                <input type="checkbox"id="Cozy"value="Cozy" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Cozy"class="px-2 size-label">Cozy</label>
                              </div>
                            </li>
                            
                  
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Party" data-option-value="Party" data-available="254">

                                <input type="checkbox"id="Party"value="Party" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Party"class="px-2 size-label">Party</label>
                              </div>
                            </li>

                  
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Bridal" data-option-value="Bridal" data-available="254">

                                <input type="checkbox"id="Bridal"value="Bridal" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Bridal"class="px-2 size-label">Bridal</label>
                              </div>
                            </li>

                  
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Evening dress" data-option-value="Evening dress" data-available="254">

                                <input type="checkbox"id="Evening dress"value="Evening dress" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Evening dress"class="px-2 size-label">Evening dress</label>
                              </div>
                            </li>

                  
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Outdoor" data-option-value="Outdoor" data-available="254">

                                <input type="checkbox"id="Outdoor"value="Outdoor" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Outdoor"class="px-2 size-label">Outdoor</label>
                              </div>
                            </li>

                  
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Lounge" data-option-value="Lounge" data-available="254">

                                <input type="checkbox"id="Lounge"value="Lounge" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Lounge"class="px-2 size-label">Lounge</label>
                              </div>
                            </li>

                  
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Office wear" data-option-value="Office wear" data-available="254">

                                <input type="checkbox"id="Office wear"value="Office wear" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Office wear"class="px-2 size-label">Office wear</label>
                              </div>
                            </li>

                  
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Sport" data-option-value="Sport" data-available="254">

                                <input type="checkbox"id="Sport"value="Sport" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Sport"class="px-2 size-label">Sport</label>
                              </div>
                            </li>

                  
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Festival" data-option-value="Festival" data-available="254">

                                <input type="checkbox"id="Festival"value="Festival" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Festival"class="px-2 size-label">Festival</label>
                              </div>
                            </li>

                  
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Graduation" data-option-value="Graduation" data-available="254">

                                <input type="checkbox"id="Graduation"value="Graduation" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                  <label for="Graduation"class="px-2 size-label">Graduation</label>
                              </div>
                            </li>

                  
                          

                  
                        </ul>
                      </div>

                    </div>
                                                        <!-- Color -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="isp-color-family" data-filter-options-type-fs="Isp-color-family" data-filter-options-name-fs="Color Family">
                        <div class="filter-option__title" data-filter-options-title="">Color</div>
                        <div class="filter-option__container" data-filter-options-container="">
                          <ul class="filter-option__items" data-filter-options-items="">
                            
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="print" data-option-value="Print" data-available="68">
                                  <div class="color-options">
                                    <label class="color-custom-check-box d-flex justify-content-start align-items-center"style=" font-size:1.3rem;">Print
                                      <input type="checkbox"name="color-option" id="Print"onClick="addSizeItemToList(this.id)" class="filterInput">
                                      <span class="checkmark1 "style="background-color:Print;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check d-flex" data-clickable-option="" data-option-short-value="pink" data-option-value="Pink" data-available="45">
                                
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Pink
                                      <input type="checkbox"name="color-option" id="Pink"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark "style="background-color:Pink;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="black" data-option-value="Black" data-available="42">
                                    
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Black
                                      <input type="checkbox"name="color-option" id="Black" onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:black;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="blue" data-option-value="Blue" data-available="27">
                                  
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Blue
                                      <input type="checkbox"name="color-option" id="Blue"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:Blue;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="white" data-option-value="White" data-available="25">
                        
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">White
                                      <input type="checkbox"name="color-option" id="White"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 "style="border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="brown" data-option-value="Brown" data-available="23">
                              
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Brown
                                      <input type="checkbox"name="color-option" id="Brown"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:Brown;border:1px solid black;"></span>
                                    </label>
                                  </div>


                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="green" data-option-value="Green" data-available="20">
                          
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Green
                                      <input type="checkbox"name="color-option" id="Green"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:Green;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="beige" data-option-value="Beige" data-available="18">
                                  
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Beige
                                      <input type="checkbox"name="color-option" id="Beige"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 type1"style="background-color:Beige;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="purple" data-option-value="Purple" data-available="16">
                            
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Purple
                                      <input type="checkbox"name="color-option" id="Purple"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:Purple;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="red" data-option-value="Red" data-available="14">
                              
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Red
                                      <input type="checkbox"name="color-option" id="Red"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark type1"style="background-color:Red;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="gray" data-option-value="Gray" data-available="12">
                                
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Gray
                                      <input type="checkbox"name="color-option" id="Gray"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 type1"style="background-color:Gray;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="yellow" data-option-value="Yellow" data-available="10">
                          
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Yellow
                                      <input type="checkbox"name="color-option" id="Yellow"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 type1"style="background-color:Yellow;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="orange" data-option-value="Orange" data-available="5">
                                
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Orange
                                      <input type="checkbox"name="color-option" id="Orange"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 type1"style="background-color:Orange;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="gold" data-option-value="Gold" data-available="3">
                              
                                  <div class="color-options">
                                    <label class="color-custom-check-box"style=" font-size:1.3rem;">Gold
                                      <input type="checkbox"name="color-option" id="Gold"onClick="addSizeItemToList(this.id)"class="filterInput">
                                      <span class="checkmark1 type1"style="background-color:Gold;border:1px solid black;"></span>
                                    </label>
                                  </div>

                                </div>
                              </li>
                    
                          </ul>
                        </div>
                    </div>
                                                        <!-- Price -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="price" data-filter-options-type-fs="Price" data-filter-options-name-fs="Price">
                      <div class="filter-option__title" data-filter-options-title="">Price</div>
                      <div class="filter-option__container" data-filter-options-container="">
                        <ul class="filter-option__items" data-filter-options-items="">
                          
                    
                          <li data-clickable-option-li="">
                            <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="30-50" data-option-value="USD:30-USD:50" data-available="15">
                                <input name="price" type="checkbox"id="$30-$50"value="$30-$50" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="$30-$50"class="px-2 size-label" class="">$30-$50</label>
                            </div>
                          </li>
                        
                          
                          <li data-clickable-option-li="">
                            <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="50-100" data-option-value="USD:50-USD:100" data-available="154">
                            
                              <input name="price" type="checkbox"id="$50-$100"value="$50-$100" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="$50-$100"class="px-2 size-label" class="">$50-$100</label>
                            </div>
                          </li>
                        
                          
                          <li data-clickable-option-li="">
                            <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="100-150" data-option-value="USD:100-USD:150" data-available="79">
                        
                              <input name="price" type="checkbox"id="$100-$150"value="$100-$150" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                              <label for="$100-$150"class="px-2 size-label" class="">$100-$150</label>

                            </div>
                          </li>
                        
                          
                          <li data-clickable-option-li="">
                            <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="150-200" data-option-value="USD:150-USD:200" data-available="8">
                        
                              <input name="price" type="checkbox"id="$150-$200"value="$150-$200" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                              <label for="$150-$200"class="px-2 size-label" class="">$150-$200</label>
                              
                            </div>
                          </li>
                  
                        </ul>
                      </div>
                    </div>
                                                    <!-- Dress Length -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="dress-length" data-filter-options-type-fs="tag_filter_0.777" data-filter-options-name-fs="Dress Length">
                      <div class="filter-option__title" data-filter-options-title="">Dress Length</div>
                      <div class="filter-option__container" data-filter-options-container="">
                        <ul class="filter-option__items" data-filter-options-items="">
                          
                    
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="midi" data-option-value="vt::Dresses::Dress Length::Midi" data-available="148">
                              
                                <input name="DressLength" type="checkbox"id="Midi"value="Midi" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Midi"class="px-2 size-label" class="">Midi</label>

                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="mini" data-option-value="vt::Dresses::Dress Length::Mini" data-available="90">
                              
                                <input name="DressLength" type="checkbox"id="Mini"value="Mini" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Mini"class="px-2 size-label" class="">Mini</label>
                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="maxi" data-option-value="vt::Dresses::Dress Length::Maxi" data-available="18">
                              
                                <input name="DressLength" type="checkbox"id="Maxi"value="Maxi" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Maxi"class="px-2 size-label" class="">Maxi</label>

                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Floor length" data-option-value="vt::Dresses::Dress Length::Floor length" data-available="18">
                              
                                <input name="DressLength" type="checkbox"id="Floor length"value="Floor length" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Floor length"class="px-2 size-label" class="">Floor length</label>

                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="High Low" data-option-value="vt::Dresses::Dress Length::High Low" data-available="18">
                              
                                <input name="DressLength" type="checkbox"id="High Low"value="High Low" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="High Low"class="px-2 size-label" class="">High Low</label>

                              </div>
                            </li>
                  
                        </ul>
                      </div>
                    </div>
                                            <!-- Sleeve Length -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="sleeve-length" data-filter-options-type-fs="tag_filter_0.603" data-filter-options-name-fs="Sleeve Length">
                      <div class="filter-option__title" data-filter-options-title="">Sleeve Length</div>
                      <div class="filter-option__container" data-filter-options-container="">
                        <ul class="filter-option__items" data-filter-options-items="">
                          
                    
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="sleeveless" data-option-value="vt::Dresses::Sleeve Length::Sleeveless" data-available="112">
                              

                                <input name="SleeveLength" type="checkbox"id="Sleeveless"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Sleeveless"class="px-2 size-label" class="">Sleeveless</label>
                              </div>
                            </li>
                                                        
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="long-sleeve" data-option-value="vt::Dresses::Sleeve Length::Long Sleeve" data-available="87">
                              
                                <input name="SleeveLength" type="checkbox"id="Long Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Long Sleeve"class="px-2 size-label" class="">Long Sleeve</label>

                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="short-sleeve" data-option-value="vt::Dresses::Sleeve Length::Short Sleeve" data-available="47">
                              
                                <input name="SleeveLength" type="checkbox"id="Short Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Short Sleeve"class="px-2 size-label" class="">Short Sleeve</label>
                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="3-4th-sleeve" data-option-value="vt::Dresses::Sleeve Length::3-4th Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="3-4th Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="3-4th Sleeve"class="px-2 size-label" class="">3-4th Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="one slevee" data-option-value="vt::Dresses::Sleeve Length::one slevee" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="one slevee"value="one slevee" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="one slevee"class="px-2 size-label" class="">one slevee</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="half slevees / (1/2)" data-option-value="vt::Dresses::Sleeve Length::half slevees / (1/2)" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="half slevees / (1/2)"value="half slevees / (1/2)" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="half slevees / (1/2)"class="px-2 size-label" class="">half slevees / (1/2)e</label>
                              </div>
                            </li>
                  
                        </ul>
                      </div>
                    </div>
                                            <!-- Sleeve Type -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="sleeve-length" data-filter-options-type-fs="tag_filter_0.603" data-filter-options-name-fs="Sleeve Length">
                      <div class="filter-option__title" data-filter-options-title="">Sleeve Type</div>
                      <div class="filter-option__container" data-filter-options-container="">
                        <ul class="filter-option__items" data-filter-options-items="">
                          
                    
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="cap slevees" data-option-value="vt::Dresses::Sleeve Length::Sleeveless" data-available="112">
                                <input name="SleeveLength" type="checkbox"id="cap slevees"value="cap slevees" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="cap slevees"class="px-2 size-label" class="">cap slevees</label>
                              </div>
                            </li>
                                                        
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="puff slevee" data-option-value="vt::Dresses::Sleeve Length::puff slevee" data-available="87">
                              
                                <input name="SleeveLength" type="checkbox"id="puff slevee"value="puff slevee" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="puff slevee"class="px-2 size-label" class="">puff slevee</label>
                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Ruffle Sleeve" data-option-value="vt::Dresses::Sleeve Length::Ruffle Sleeve" data-available="47">
                              
                                <input name="SleeveLength" type="checkbox"id="Ruffle Sleeve"value="Ruffle Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Ruffle Sleeve"class="px-2 size-label" class="">Ruffle Sleeve</label>
                              </div>
                            </li>
                          
                            
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Cold Shoulder Sleeve" data-option-value="vt::Dresses::Sleeve Length::3-4th Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Cold Shoulder Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Cold Shoulder Sleeve"class="px-2 size-label" class="">Cold Shoulder Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Flutter Sleevee" data-option-value="vt::Dresses::Sleeve Length::Flutter Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Flutter Sleeve"value="Flutter Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Flutter Sleeve"class="px-2 size-label" class="">Flutter Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Bell Sleeve" data-option-value="vt::Dresses::Sleeve Length::Bell Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Bell Sleeve"value="Bell Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Bell Sleeve"class="px-2 size-label" class="">Bell Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Batwing Sleeve" data-option-value="vt::Dresses::Sleeve Length::Batwing Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Batwing Sleeve"value="Batwing Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Batwing Sleeve"class="px-2 size-label" class="">Batwing Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Cape Sleeve" data-option-value="vt::Dresses::Sleeve Length::Cape Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Cape Sleeve"value="Cape Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Cape Sleeve"class="px-2 size-label" class="">Cape Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Flare Sleeve" data-option-value="vt::Dresses::Sleeve Length::Flare Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Flare Sleeve"value="Flare Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Flare Sleeve"class="px-2 size-label" class="">Flare Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Cuff Sleeve" data-option-value="vt::Dresses::Sleeve Length::Cuff Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Cuff Sleeve"value="Cuff Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Cuff Sleeve"class="px-2 size-label" class="">Cuff Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Kimono Sleeve" data-option-value="vt::Dresses::Sleeve Length::Kimono Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Kimono Sleeve"value="Kimono Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Kimono Sleeve"class="px-2 size-label" class="">Kimono Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Balloon Sleeve" data-option-value="vt::Dresses::Sleeve Length::Balloon Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Balloon Sleeve"value="Balloon Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Balloon Sleeve"class="px-2 size-label" class="">Balloon Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Lantern Sleeve" data-option-value="vt::Dresses::Sleeve Length::Lantern Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Lantern Sleeve"value="Lantern Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Lantern Sleeve"class="px-2 size-label" class="">Lantern Sleeve</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Raglan Sleeve" data-option-value="vt::Dresses::Sleeve Length::Lantern Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Raglan Sleeve"value="Raglan Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Raglan Sleeve"class="px-2 size-label" class="">Raglan Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Split Sleeve" data-option-value="vt::Dresses::Sleeve Length::Split Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Split Sleeve"value="Split Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Split Sleeve"class="px-2 size-label" class="">Split Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Bishop Sleeve" data-option-value="vt::Dresses::Sleeve Length::Bishop Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Bishop Sleeve"value="Bishop Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Bishop Sleeve"class="px-2 size-label" class="">Bishop Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Asymmetrical Sleeve" data-option-value="vt::Dresses::Sleeve Length::Asymmetrical Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Asymmetrical Sleeve"value="Asymmetrical Sleevee" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Asymmetrical Sleeve"class="px-2 size-label" class="">Asymmetrical Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Dolman Sleeve" data-option-value="vt::Dresses::Sleeve Length::Lantern Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Dolman Sleeve"value="Dolman Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Dolman Sleeve"class="px-2 size-label" class="">Dolman Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Dolman Sleeve" data-option-value="vt::Dresses::Sleeve Length::Lantern Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Halter"value="Halter" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Halter"class="px-2 size-label" class="">Halter</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Dolman Sleeve" data-option-value="vt::Dresses::Sleeve Length::Lantern Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Roll Tab Sleeve"value="Roll Tab Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Roll Tab Sleeve"class="px-2 size-label" class="">Roll Tab Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Dolman Sleeve" data-option-value="vt::Dresses::Sleeve Length::Lantern Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Slit Sleeve"value="Slit Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Slit Sleeve"class="px-2 size-label" class="">Slit Sleeve</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Dolman Sleeve" data-option-value="vt::Dresses::Sleeve Length::Lantern Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="spaghetti starp"value="spaghetti starp" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="spaghetti starp"class="px-2 size-label" class="">spaghetti starp</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Dolman Sleeve" data-option-value="vt::Dresses::Sleeve Length::Lantern Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Strappy Sleeve"value="Strappy Sleeve" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Strappy Sleeve"class="px-2 size-label" class="">Strappy Sleeve</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Dolman Sleeve" data-option-value="vt::Dresses::Sleeve Length::Lantern Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="strapless"value="strapless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="strapless"class="px-2 size-label" class="">strapless</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Dolman Sleeve" data-option-value="vt::Dresses::Sleeve Length::Lantern Sleeve" data-available="9">
                                                                
                                <input name="SleeveLength" type="checkbox"id="Open Shoulder"value="Open Shoulder" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Open Shoulder"class="px-2 size-label" class="">Open Shoulder</label>
                              </div>
                            </li>
                  
                        </ul>
                      </div>
                    </div>
                                            <!-- Neckline -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="neckline" data-filter-options-type-fs="tag_filter_0.579" data-filter-options-name-fs="Neckline">
                      <div class="filter-option__title" data-filter-options-title="">Necklines</div>
                      <div class="filter-option__container" data-filter-options-container="">
                        <ul class="filter-option__items" data-filter-options-items="">
                          
                    
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Beat neck"value="Beat neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Beat neck"class="px-2 size-label" class="">Beat neck</label>
                              </div>
                            </li>

                            
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Crew neck"value="Crew neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Crew neck"class="px-2 size-label" class="">Crew neck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Funnel neck"value="Funnel neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Funnel neck"class="px-2 size-label" class="">Funnel neck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Mock neck"value="Mock neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Mock neck"class="px-2 size-label" class="">HaltMock neckerneck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Scoop neck"value="Scoop neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Scoop neck"class="px-2 size-label" class="">Scoop neck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Turtle neck"value="Turtle neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Turtle neck"class="px-2 size-label" class="">Turtle neck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="V neck"value="V neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="V neck"class="px-2 size-label" class="">V neck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Halterneck"value="Halterneck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Halterneck"class="px-2 size-label" class="">Halterneck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Round neck"value="Round neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Round neck"class="px-2 size-label" class="">Round neck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Square neck"value="Square neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Square neck"class="px-2 size-label" class="">Square neck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Sweetheart neck"value="Sweetheart neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Sweetheart neck"class="px-2 size-label" class="">Sweetheart neck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Boat Neck"value="Boat Neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Boat Neck"class="px-2 size-label" class="">Boat Neck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Collared"value="Collared" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Collared"class="px-2 size-label" class="">Collared</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Cowneck"value="Cowneck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Cowneck"class="px-2 size-label" class="">Cowneck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Illusion"value="Illusion" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Illusion"class="px-2 size-label" class="">Illusion</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Keyhole"value="Keyhole" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Keyhole"class="px-2 size-label" class="">Keyhole</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Cowl"value="Cowl" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Cowl"class="px-2 size-label" class="">Cowl</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Highneck"value="Highneck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Highneck"class="px-2 size-label" class="">Highneck</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Off the Shoulder"value="Off the Shoulder" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Off the Shoulder"class="px-2 size-label" class="">Off the Shoulder</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="One Shoulder"value="One Shoulder" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="One Shoulder"class="px-2 size-label" class="">One Shoulder</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Plunge neck "value="Plunge neck " class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Plunge neck "class="px-2 size-label" class="">Plunge neck </label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Necklines" type="checkbox"id="Henly"value="Henly" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Henly"class="px-2 size-label" class="">Henly</label>
                              </div>
                            </li>   
                  
                        </ul>
                      </div>
                    </div>
                                                      <!-- Pattern -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="pattern" data-filter-options-type-fs="tag_filter_0.911" data-filter-options-name-fs="Pattern">
                      <div class="filter-option__title" data-filter-options-title="">Pattern</div>
                        <div class="filter-option__container" data-filter-options-container="">
                          <ul class="filter-option__items" data-filter-options-items="">
                            
                      
                              <li data-clickable-option-li="">
                                <div class="newfilter-checkbox" data-clickable-option="" data-option-short-value="solid" data-option-value="vt::Dresses::Pattern::Solid" data-available="149">
                                  <div class="rowTypeOptions d-flex justify-content-start w-100">
                                    <input name="Pattern" type="checkbox"id="Solid"value="Solid" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                    <label for="Solid"class="px-2 size-label" class="">Solid</label>
                                  </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                              

                                  <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Floral"value="Floral" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                      <label for="Floral"class="px-2 size-label" class="">Floral</label>
                                  </div>

                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                

                                  <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Argyle-patterned"value="Argyle-patterned" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                      <label for="Argyle-patterned"class="px-2 size-label" class="">Argyle-patterned</label>
                                  </div>
                                
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                

                                  <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Plaid & check"value="Plaid & check" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Plaid & check"class="px-2 size-label" class="">Plaid & check</label>
                                  </div>
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                

                                  <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Color-black"value="Color-black" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Color-black"class="px-2 size-label" class="">Color-black</label>
                                  </div>
                                
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                

                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Texture"value="Texture" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                      <label for="Texture"class="px-2 size-label" class="">Texture</label>
                                </div>
                                
                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                

                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Animal Print"value="Animal Print" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                      <label for="Animal Print"class="px-2 size-label" class="">Animal Print</label>
                                </div>

                              </li>
                            
                              
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Dotted"value="Dotted" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Dotted"class="px-2 size-label" class="">Dotted</label>
                                </div>
                                
                              </li>

                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Leopard-print"value="Leopard-print" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Leopard-print"class="px-2 size-label" class="">Leopard-print</label>
                                </div>
                                
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Leopard-print"value="Patterned" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Patterned"class="px-2 size-label" class="">Patterned</label>
                                </div>
                                
                              </li>

                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Striped"value="Striped" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Striped"class="px-2 size-label" class="">Striped</label>
                                </div>
                              </li>

                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Plain"value="Plain" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Plain"class="px-2 size-label" class="">Plain</label>
                                </div>
                                
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Geomatric"value="Leopard-print" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Geomatric"class="px-2 size-label" class="">Geomatric</label>
                                </div>
                                
                              </li>

                              
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Spots"value="Spots" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Spots"class="px-2 size-label" class="">Spots</label>
                                </div> 
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Printed"value="Printed" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Printed"class="px-2 size-label" class="">Printed</label>
                                </div> 
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Spots"value="Spots" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Spots"class="px-2 size-label" class="">Spots</label>
                                </div> 
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Monochrome"value="Monochrome" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Monochrome"class="px-2 size-label" class="">Monochrome</label>
                                </div> 
                              </li>

                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Logo"value="Logo" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Logo"class="px-2 size-label" class="">Logo</label>
                                </div> 
                              </li>

                              
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Ombre"value="Ombre" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Ombre"class="px-2 size-label" class="">Ombre</label>
                                </div> 
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Polka dot"value="Polka dot" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Polka dot"class="px-2 size-label" class="">Polka dot</label>
                                </div> 
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Camouflage"value="Camouflage" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Camouflage"class="px-2 size-label" class="">Camouflage</label>
                                </div> 
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Graphic"value="Graphic" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Graphic"class="px-2 size-label" class="">Graphic</label>
                                </div> 
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Paisley"value="Paisley" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Paisley"class="px-2 size-label" class="">Paisley</label>
                                </div> 
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Tropical"value="Tropical" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Tropical"class="px-2 size-label" class="">Tropical</label>
                                </div> 
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Ditsy"value="Ditsy" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Ditsy"class="px-2 size-label" class="">Ditsy</label>
                                </div> 
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Tie-die"value="Tie-die" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Tie-die"class="px-2 size-label" class="">Tie-die</label>
                                </div> 
                              </li>
                              <li data-clickable-option-li="">
                                <div class="rowTypeOptions d-flex justify-content-start w-100">
                                      <input name="Pattern" type="checkbox"id="Metallic"value="Metallic" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                      <label for="Metallic"class="px-2 size-label" class="">Metallic</label>
                                </div> 
                              </li>
                              
                          </ul>
                        </div>
                      </div>
                    </div>
                                                    <!-- Features -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="neckline" data-filter-options-type-fs="tag_filter_0.579" data-filter-options-name-fs="Neckline">
                      <div class="filter-option__title" data-filter-options-title="">Features</div>
                      <div class="filter-option__container" data-filter-options-container="">
                        <ul class="filter-option__items" data-filter-options-items="">
                          
                    
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Features" type="checkbox"id="Asymmetrical"value="Asymmetrical" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Asymmetrical"class="px-2 size-label" class="">Asymmetrical</label>
                              </div>
                            </li>
                    
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Features" type="checkbox"id="Cutout"value="Cutout" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Cutout"class="px-2 size-label" class="">Cutout</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Features" type="checkbox"id="Draped"value="Draped" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Draped"class="px-2 size-label" class="">Draped</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Features" type="checkbox"id="Hooded / Hoodie"value="Hooded / Hoodie" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Hooded / Hoodie"class="px-2 size-label" class="">Hooded / Hoodie</label>
                              </div>
                            </li>
                        </ul>
                      </div>
                    </div>
                                                    <!-- Emblishments  -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="neckline" data-filter-options-type-fs="tag_filter_0.579" data-filter-options-name-fs="Neckline">
                      <div class="filter-option__title" data-filter-options-title="">Emblishments</div>
                      <div class="filter-option__container" data-filter-options-container="">
                        <ul class="filter-option__items" data-filter-options-items="">
                          
                    
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Sequin"value="Sequin" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Sequin"class="px-2 size-label" class="">Sequin</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Beaded"value="Beaded" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Beaded"class="px-2 size-label" class="">Beaded</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Embroidery"value="Embroidery" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Embroidery"class="px-2 size-label" class="">Embroidery</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Fringe"value="Fringe" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Fringe"class="px-2 size-label" class="">Fringe</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Glitter"value="Glitter" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Glitter"class="px-2 size-label" class="">Glitter</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Lace /Lace back"value="Lace /Lace back" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Lace /Lace back"class="px-2 size-label" class="">Lace /Lace back</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Piping"value="Piping" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Piping"class="px-2 size-label" class="">Piping</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Rhine stone"value="Rhine stone" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Rhine stone"class="px-2 size-label" class="">Rhine stone</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Tassels"value="Tassels" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Tassels"class="px-2 size-label" class="">Tassels</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Sleek"value="Sleek" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Sleek"class="px-2 size-label" class="">Sleek</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Button"value="Button" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Button"class="px-2 size-label" class="">Button</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Heat stone "value="Heat stone " class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Heat stone "class="px-2 size-label" class="">Heat stone </label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Pockets"value="Pockets" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Pockets"class="px-2 size-label" class="">Pockets</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Ruffles / Layered/Tiered"value="Ruffles / Layered/Tiered" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Ruffles / Layered/Tiered"class="px-2 size-label" class="">Ruffles / Layered/Tiered</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Zipper"value="Zipper" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Zipper"class="px-2 size-label" class="">Zipper</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Emblishments" type="checkbox"id="Pleated"value="Pleated" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Pleated"class="px-2 size-label" class="">Pleated</label>
                              </div>
                            </li>
                    
                            
                        </ul>
                      </div>
                    </div>
                                                    <!-- Dress Style  -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="neckline" data-filter-options-type-fs="tag_filter_0.579" data-filter-options-name-fs="Neckline">
                      <div class="filter-option__title" data-filter-options-title="">Dress Style</div>
                      <div class="filter-option__container" data-filter-options-container="">
                        <ul class="filter-option__items" data-filter-options-items="">
                          
                    
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Bodycon"value="Bodycon" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Bodycon"class="px-2 size-label" class="">Bodycon</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Shift"value="Shift" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Shift"class="px-2 size-label" class="">Shift</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Sheath"value="Sheath" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Sheath"class="px-2 size-label" class="">Sheath</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Smoked"value="Smoked" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Smoked"class="px-2 size-label" class="">Smoked</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="2 in 1 "value="2 in 1 " class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="2 in 1 "class="px-2 size-label" class="">2 in 1 </label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Shirt Dress"value="Shirt Dress" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Shirt Dress"class="px-2 size-label" class="">Shirt Dress</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Bodycon"value="A-Line" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="A-Line"class="px-2 size-label" class="">A-Line</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Slip"value="Slip" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Slip"class="px-2 size-label" class="">Slip</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Wrap"value="Wrap" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Wrap"class="px-2 size-label" class="">Wrap</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Fit & Flare"value="Fit & Flare" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Fit & Flare"class="px-2 size-label" class="">Fit & Flare</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Gown"value="Gown" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Gown"class="px-2 size-label" class="">Gown</label>
                              </div>
                            </li>

                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Bandeau"value="Bandeau" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Bandeau"class="px-2 size-label" class="">Bandeau</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Raceback"value="Raceback" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Raceback"class="px-2 size-label" class="">Raceback</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Skater"value="Skater" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Skater"class="px-2 size-label" class="">Skater</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Silt"value="Silt" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Silt"class="px-2 size-label" class="">Silt</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Blouson"value="Blouson" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Blouson"class="px-2 size-label" class="">Blouson</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Tank"value="Tank" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Tank"class="px-2 size-label" class="">Tank</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="backless /open back"value="backless /open back" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="backless /open back"class="px-2 size-label" class="">backless /open back</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Bodysuit"value="Bodysuit" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Bodysuit"class="px-2 size-label" class="">Bodysuit</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Dress set / Pent set"value="Dress set / Pent set" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Dress set / Pent set"class="px-2 size-label" class="">Dress set / Pent set</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Jumpsuit / Comfert"value="Jumpsuit / Comfert" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Jumpsuit / Comfert"class="px-2 size-label" class="">Jumpsuit / Comfert</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Jumper"value="Jumper" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Jumper"class="px-2 size-label" class="">Jumper</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Overall"value="Overall" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Overall"class="px-2 size-label" class="">Overall</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Short set / Skirt set"value="Short set / Skirt set" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Short set / Skirt set"class="px-2 size-label" class="">Short set / Skirt set</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Tunic"value="Tunic" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Tunic"class="px-2 size-label" class="">Tunic</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Dress Style" type="checkbox"id="Kaftan"value="Kaftan" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Kaftan"class="px-2 size-label" class="">Kaftan</label>
                              </div>
                            </li>
                            

                            
                    
                            
                        </ul>
                      </div>
                    </div>
                                                    <!-- Dress Style  -->
                    <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="neckline" data-filter-options-type-fs="tag_filter_0.579" data-filter-options-name-fs="Neckline">
                      <div class="filter-option__title" data-filter-options-title="">Materials</div>
                      <div class="filter-option__container" data-filter-options-container="">
                        <ul class="filter-option__items" data-filter-options-items="">
                          
                    
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Polyamide"value="Polyamide" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Polyamide"class="px-2 size-label" class="">Polyamide</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Cotton"value="Cotton" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Cotton"class="px-2 size-label" class="">Cotton</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Silk blend"value="Silk blend" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Silk blend"class="px-2 size-label" class="">Silk blend</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Recycle polyster"value="Recycle polyster" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Recycle polyster"class="px-2 size-label" class="">Recycle polyster</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Velvet"value="Velvet" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Velvet"class="px-2 size-label" class="">Velvet</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Tulle"value="Tulle" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Tulle"class="px-2 size-label" class="">Tulle</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Wool"value="Wool" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Wool"class="px-2 size-label" class="">Wool</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Viscose"value="Viscose" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Viscose"class="px-2 size-label" class="">Viscose</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Silk "value="Silk " class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Silk "class="px-2 size-label" class="">Silk </label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Embellished"value="Embellished" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Embellished"class="px-2 size-label" class="">Embellished</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Linen"value="Linen" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Linen"class="px-2 size-label" class="">Linen</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Denim"value="Denim" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Denim"class="px-2 size-label" class="">Denim</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Leather"value="Leather" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Leather"class="px-2 size-label" class="">Leather</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Alpaca"value="Alpaca" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Alpaca"class="px-2 size-label" class="">Alpaca</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Cashmere"value="Cashmere" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Cashmere"class="px-2 size-label" class="">Cashmere</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Chiffon"value="Chiffon" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Chiffon"class="px-2 size-label" class="">Chiffon</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Faux leather"value="Faux leather" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Faux leather"class="px-2 size-label" class="">Faux leather</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Jersey"value="Jersey" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Jersey"class="px-2 size-label" class="">Jersey</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="lace"value="lace" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="lace"class="px-2 size-label" class="">lace</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Mesh"value="Mesh" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Mesh"class="px-2 size-label" class="">Mesh</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Satin"value="Satin" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Satin"class="px-2 size-label" class="">Satin</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="100  % cashmere"value="100  % cashmere" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="100  % cashmere"class="px-2 size-label" class="">100  % cashmere</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="100 % cotton"value="100 % cotton" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="100 % cotton"class="px-2 size-label" class="">100 % cotton</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="100 % linen"value="100 % linen" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="100 % linen"class="px-2 size-label" class="">100 % linen</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="100 % silk"value="100 % silk" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="100 % silk"class="px-2 size-label" class="">100 % silk</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="100 % wool"value="100 % wool" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="100 % wool"class="px-2 size-label" class="">100 % wool</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Beaded"value="Beaded" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Beaded"class="px-2 size-label" class="">Beaded</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Canves"value="Canves" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Canves"class="px-2 size-label" class="">Canves</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Coduroy"value="Coduroy" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Coduroy"class="px-2 size-label" class="">Coduroy</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Faux fur"value="Faux fur" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Faux fur"class="px-2 size-label" class="">Faux fur</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Fleece"value="Fleece" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Fleece"class="px-2 size-label" class="">Fleece</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Jersey knit"value="Jersey knit" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Jersey knit"class="px-2 size-label" class="">Jersey knit</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Microfiber"value="Microfiber" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Microfiber"class="px-2 size-label" class="">Microfiber</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Sateen"value="Sateen" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Sateen"class="px-2 size-label" class="">Sateen</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Squin"value="Squin" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Squin"class="px-2 size-label" class="">Squin</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Synthetic"value="Synthetic" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Synthetic"class="px-2 size-label" class="">Synthetic</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Taffeta"value="Taffeta" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Taffeta"class="px-2 size-label" class="">Taffeta</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Tweed"value="Tweed" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Tweed"class="px-2 size-label" class="">Tweed</label>
                              </div>
                            </li>
                            <li data-clickable-option-li="">
                              <div class="rowTypeOptions d-flex justify-content-start w-100">
                                <input name="Materials/Fabric" type="checkbox"id="Twill"value="Twill" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                <label for="Twill"class="px-2 size-label" class="">Twill</label>
                              </div>
                            </li>
                            
                            

                            
                    
                            
                        </ul>
                      </div>
                    </div>
                                                            <!-- Sort by -->
                    <!-- <div class="filters-panel__sorting filter-sorting" data-filter-sorting="">
                      <div class="filter-sorting__title">Sort by</div>
                      <div class="filter-sorting__container">
                        <ul class="filter-sorting__items" data-sort-by="" aria-label="Sort by">
                          <li data-value="manual">
                            <label class="custom-radio">Featured
                              <input class="bySortRadios  filterInput" type="radio"id="Featured" name="sortby" value="manual"onClick="SortByFun(this.id)" >
                              <span class="checkmark"></span>
                            </label>
                          </li>
                          <li data-value="popularity">
                            <label class="custom-radio">Popularity
                              <input class="bySortRadios filterInput" type="radio" name="sortby"id="Popularity" value="popularity"onClick="SortByFun(this.id)">
                              <span class="checkmark"></span>
                            </label>
                          </li>
                          <li data-value="price-ascending">
                            <label class="custom-radio">Price: Low to High
                              <input class="bySortRadios filterInput" type="radio" name="sortby"id="Price: Low to High" value="price-ascending"onClick="SortByFun(this.id)">
                              <span class="checkmark"></span>
                            </label>
                          </li>
                          <li data-value="price-descending">
                            <label class="custom-radio">Price: High to Low
                              <input class="bySortRadios filterInput" type="radio" name="sortby"id="Price: High to Low" value="price-descending"onClick="SortByFun(this.id)">
                              <span class="checkmark"></span>
                            </label>
                          </li>
                          <li data-value="created-ascending">
                            <label class="custom-radio">Oldest to Newest
                              <input class="bySortRadios filterInput" type="radio" name="sortby"id="Oldest to Newest" value="created-ascending"onClick="SortByFun(this.id)">
                              <span class="checkmark"></span>
                            </label>
                          </li>
                          <li data-value="created-descending">
                            <label class="custom-radio ">Newest to Oldest
                              <input type="radio" name="sortby"id="Newest to Oldest" value="created-descending"onClick="SortByFun(this.id)"class="bySortRadios filterInput">
                              <span class="checkmark"></span>
                            </label>
                          </li>
                          <li data-value="title-ascending">
                            <label class="custom-radio">A-Z
                              <input class="bySortRadios filterInput" type="radio" name="sortby"id="A-Z" value="title-ascending"onClick="SortByFun(this.id)">
                              <span class="checkmark"></span>
                            </label>
                          </li>
                          <li data-value="title-descending">
                            <label class="custom-radio">Z-A
                              <input  class="bySortRadios filterInput" type="radio" name="sortby" id="Z-A" value="title-descending"onClick="SortByFun(this.id)">
                              <span class="checkmark"></span>
                            </label>
                          </li>
                        </ul>
                      </div>
                    </div> -->

                
                </div>
          </div>

                  <!-- Medium and Mobile screen filter options start -->
          <div class=" row cat-mobile-filter-nav mx-2 mb-2">

              <div class="cat-mobile-filter-nav__container">

                  <div class="cat-mob-filte-top d-flex justify-content-start align-items-center" id="mobFilter" >
                    <p class="cat-mob-filter-main-title m-0 pr-2 cat-mob-filter-toggle">Filter</p>
                    <div class="filter-logo-img cat-mob-filter-toggle" onclick="showFilter()" id="filterIconShowHide">
                        <img src="{{asset('image/icons/filter-icon.png')}}" alt="FilteR Icon" style="width:100%;height:100%">
                    </div>
                  </div>

                  <div class="cat-mobile-filter-nav__options d-flex " >

                    <div class="mobCatOption w-100" id="mobFilterOptions">

                      <div class="filter-back-option"onclick="closeFilter()">
                        <i class="fas fa-2x fa-angle-right" ></i>
                      </div>

                      <div class="cat-filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Size" data-filter-options-name-fs="Size">
                                  <!-- mobile size filter -->
                          <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-size" aria-expanded="false" aria-controls="mob-cat-size">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>SIZE</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-size">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start  align-items-center" data-filter-options-items="">
                                  <li data-clickable-option-li="" class="m-2 px-4">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="xs"   data-option-value="XS" data-available="256">
                                        <input type="checkbox"id="XS"value="XS" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="XS"class="px-2 size-label">XS</label>
                                    </div>
                                  </li>
                        
                                  <li data-clickable-option-li="" class="m-2 px-4">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="s" data-option-value="S" data-available="256">

                                        <input type="checkbox"id="S"value="S" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="S"class="px-2 size-label">S</label>
                                    </div>
                                  </li>
          
                                  <li data-clickable-option-li="" class="m-2 px-4">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="m" data-option-value="M" data-available="256">

                                        <input type="checkbox"id="M"value="M" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="M"class="px-2 size-label">M</label>
                                    </div>
                                  </li>
                                
                                  <li data-clickable-option-li="" class="m-2 px-4">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="l" data-option-value="L" data-available="256">

                                        <input type="checkbox"id="L"value="L" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="L"class="px-2 size-label">L</label>
                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li="">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="xl" data-option-value="XL" data-available="254">
                                  

                                        <input type="checkbox"id="XL"value="XL" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="XL"class="px-2 size-label">XL</label>
                                    </div>
                                  </li>
                        
                                </ul>

                              </div>
                            </div>
                          </div>
                                  <!-- mobile color filter -->
                          <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-color" aria-expanded="false" aria-controls="mob-cat-color">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>COLOR</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-color">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">
                                  
                                  <li data-clickable-option-li=""class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="print" data-option-value="Print" data-available="68">
                                      <div class="color-options">
                                        <label class="color-custom-check-box d-flex justify-content-start align-items-center"style=" font-size:1.3rem;">Print
                                          <input type="checkbox"name="color-option" id="Print"onClick="addSizeItemToList(this.id)" class="filterInput">
                                          <span class="checkmark1 "style="background-color:Print;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                                  
                                  <li data-clickable-option-li=""class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex dark-check d-flex" data-clickable-option="" data-option-short-value="pink" data-option-value="Pink" data-available="45">
                                    
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Pink
                                          <input type="checkbox"name="color-option" id="Pink"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark "style="background-color:Pink;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>                               
                                  
                                  <li data-clickable-option-li=""class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="black" data-option-value="Black" data-available="42">
                                        
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Black
                                          <input type="checkbox"name="color-option" id="Black" onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark type1"style="background-color:black;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li=""class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="blue" data-option-value="Blue" data-available="27">
                                      
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Blue
                                          <input type="checkbox"name="color-option" id="Blue"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark type1"style="background-color:Blue;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li=""class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="white" data-option-value="White" data-available="25">
                            
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">White
                                          <input type="checkbox"name="color-option" id="White"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark1 "style="border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li=""class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="brown" data-option-value="Brown" data-available="23">
                                  
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Brown
                                          <input type="checkbox"name="color-option" id="Brown"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark type1"style="background-color:Brown;border:1px solid black;"></span>
                                        </label>
                                      </div>


                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="green" data-option-value="Green" data-available="20">
                              
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Green
                                          <input type="checkbox"name="color-option" id="Green"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark type1"style="background-color:Green;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="beige" data-option-value="Beige" data-available="18">
                                      
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Beige
                                          <input type="checkbox"name="color-option" id="Beige"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark1 type1"style="background-color:Beige;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="purple" data-option-value="Purple" data-available="16">
                                
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Purple
                                          <input type="checkbox"name="color-option" id="Purple"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark type1"style="background-color:Purple;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex light-check" data-clickable-option="" data-option-short-value="red" data-option-value="Red" data-available="14">
                                  
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Red
                                          <input type="checkbox"name="color-option" id="Red"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark type1"style="background-color:Red;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="gray" data-option-value="Gray" data-available="12">
                                    
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Gray
                                          <input type="checkbox"name="color-option" id="Gray"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark1 type1"style="background-color:Gray;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="yellow" data-option-value="Yellow" data-available="10">
                              
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Yellow
                                          <input type="checkbox"name="color-option" id="Yellow"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark1 type1"style="background-color:Yellow;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="orange" data-option-value="Orange" data-available="5">
                                    
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Orange
                                          <input type="checkbox"name="color-option" id="Orange"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark1 type1"style="background-color:Orange;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                                
                                  
                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="gold" data-option-value="Gold" data-available="3">
                                  
                                      <div class="color-options">
                                        <label class="color-custom-check-box"style=" font-size:1.3rem;">Gold
                                          <input type="checkbox"name="color-option" id="Gold"onClick="addSizeItemToList(this.id)"class="filterInput">
                                          <span class="checkmark1 type1"style="background-color:Gold;border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>
                        
                                </ul>

                              </div>
                            </div>
                          </div>
                                  <!-- mobile price filter -->
                          <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-price" aria-expanded="false" aria-controls="mob-cat-price">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>PRICE</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-price">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                            
                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="30-50" data-option-value="USD:30-USD:50" data-available="15">
                                          <input name="price" type="checkbox"id="$30-$50"value="$30-$50" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="$30-$50"class="px-2 size-label" class="">$30-$50</label>
                                      </div>
                                    </li>
                                                                        
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="50-100" data-option-value="USD:50-USD:100" data-available="154">
                                      
                                        <input name="price" type="checkbox"id="$50-$100"value="$50-$100" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="$50-$100"class="px-2 size-label" class="">$50-$100</label>
                                      </div>
                                    </li>
                                                                        
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="100-150" data-option-value="USD:100-USD:150" data-available="79">
                                  
                                        <input name="price" type="checkbox"id="$100-$150"value="$100-$150" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="$100-$150"class="px-2 size-label" class="">$100-$150</label>
        
                                      </div>
                                    </li>
                                                                        
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="150-200" data-option-value="USD:150-USD:200" data-available="8">
                                  
                                        <input name="price" type="checkbox"id="$150-$200"value="$150-$200" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="$150-$200"class="px-2 size-label" class="">$150-$200</label>
                                        
                                      </div>
                                    </li>
                            
                                </ul>
                                
                              </div>
                            </div>
                          </div>
                                <!-- mobile dress length filter -->
                          <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-length" aria-expanded="false" aria-controls="mob-cat-length">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>DRESS LENGTH</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-length">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                            
                                                                        
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="midi" data-option-value="vt::Dresses::Dress Length::Midi" data-available="148">
                                      
                                        <input name="DressLength" type="checkbox"id="Midi"value="Midi" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Midi"class="px-2 size-label" class="">Midi</label>

                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="mini" data-option-value="vt::Dresses::Dress Length::Mini" data-available="90">
                                      
                                        <input name="DressLength" type="checkbox"id="Mini"value="Mini" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Mini"class="px-2 size-label" class="">Mini</label>
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="maxi" data-option-value="vt::Dresses::Dress Length::Maxi" data-available="18">
                                      
                                        <input name="DressLength" type="checkbox"id="Maxi"value="Maxi" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Maxi"class="px-2 size-label" class="">Maxi</label>

                                      </div>
                                    </li>
                            
                                </ul>

                              </div>
                            </div>
                          </div>
                                  <!-- mobile Sleeve Length filter -->
                          <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-sleeveeLength" aria-expanded="false" aria-controls="mob-cat-sleeveeLength">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>SLEEVE LENGTH</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-sleeveeLength">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="sleeveless" data-option-value="vt::Dresses::Sleeve Length::Sleeveless" data-available="112">
                                      
      
                                        <input name="SleeveLength" type="checkbox"id="Sleeveless"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Sleeveless"class="px-2 size-label" class="">Sleeveless</label>
                                      </div>
                                    </li>
                                                                
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="long-sleeve" data-option-value="vt::Dresses::Sleeve Length::Long Sleeve" data-available="87">
                                      
                                        <input name="SleeveLength" type="checkbox"id="Long Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Long Sleeve"class="px-2 size-label" class="">Long Sleeve</label>
      
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="short-sleeve" data-option-value="vt::Dresses::Sleeve Length::Short Sleeve" data-available="47">
                                      
                                        <input name="SleeveLength" type="checkbox"id="Short Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Short Sleeve"class="px-2 size-label" class="">Short Sleeve</label>
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="3-4th-sleeve" data-option-value="vt::Dresses::Sleeve Length::3-4th Sleeve" data-available="9">
                                                                        
                                        <input name="SleeveLength" type="checkbox"id="3-4th Sleeve"value="Sleeveless" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="3-4th Sleeve"class="px-2 size-label" class="">3-4th Sleeve</label>
                                      </div>
                                    </li>
                            
                                </ul>

                              </div>
                            </div>
                          </div>
                                  <!-- mobile nekline filter -->
                          <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-neckline" aria-expanded="false" aria-controls="mob-cat-neckline">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>NECKLINE</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-neckline">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start  align-items-center" data-filter-options-items="">                                                              

                                                                
                                    <li data-clickable-option-li=""class="m2 p-4">


                                      <div class="rowTypeOptions d-flex justify-content-start w-100">
                                        <input name="Neckline" type="checkbox"id="Sweetheart Neck"value="Sweetheart Neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Sweetheart Neck"class="px-2 size-label" class="">Sweetheart Neck</label>
                                      </div>
                                      
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      
                                      
                                      <div class="rowTypeOptions d-flex w-100">
                                        <input name="Neckline" type="checkbox"id="Cowl"value="Cowl" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Cowl"class="px-2 size-label" class="">Cowl</label>
                                      </div>
      
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                                                    <div class="rowTypeOptions d-flex w-100">
                                        <input name="Neckline" type="checkbox"id="Square Neck"value="Cowl" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Square Neck"class="px-2 size-label" class="">Square Neck</label>
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                        <input name="Neckline" type="checkbox"id="V Neck"value="V Neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="V Neck"class="px-2 size-label" class="">V Neck</label>
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      
      
                                      <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                        <input name="Neckline" type="checkbox"id="Crewneck"value="Crewneck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Crewneck"class="px-2 size-label" class="">Crewneck</label>
                                      </div>
                                      
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      
                                        <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                        <input name="Neckline" type="checkbox"id="Scoop Nec"value="Scoop Nec" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Scoop Nec"class="px-2 size-label" class="">Scoop Nec</label>
                                        </div>
      
                                      
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                        <input name="Neckline" type="checkbox"id="Highneck"value="Highneck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Highneck"class="px-2 size-label" class="">Highneck</label>
                                      </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                    
      
                                      <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                        <input name="Neckline" type="checkbox"id="Off Shoulder"value="Off Shoulder" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Off Shoulder"class="px-2 size-label" class="">Off Shoulder</label>
                                      </div>
                                      
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      
      
                                      <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                        <input name="Neckline" type="checkbox"id="One Shoulder"value="One Shoulderr" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="One Shoulder"class="px-2 size-label" class="">One Shoulder</label>
                                      </div>
      
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
      
                                    
      
                                      <div class="newfilter-checkbox rowTypeOptions d-flex w-100">
                                        <input name="Neckline" type="checkbox"id="Plunge Neckr"value="Plunge Neck" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Plunge Neckr"class="px-2 size-label" class="">Plunge Neck</label>
                                      </div>
                                      
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
      
                                      
                                      
                                      <div class="rowTypeOptions d-flex w-100">
                                        <input name="Neckline" type="checkbox"id="Collared"value="Collared" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                        <label for="Collared"class="px-2 size-label" class="">Collared</label>
                                      </div>
      
                                    </li>
                            
                                </ul>

                              </div>
                            </div>
                            
                          </div>
                                  <!-- mobile nekline filter -->
                          <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-pattern" aria-expanded="false" aria-controls="mob-cat-pattern">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>PATTERN</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-pattern">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              

                                  
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      <div class="newfilter-checkbox" data-clickable-option="" data-option-short-value="solid" data-option-value="vt::Dresses::Pattern::Solid" data-available="149">
                                        
                                  

                                        <div class="rowTypeOptions d-flex justify-content-start w-100">
                                          <input name="Pattern" type="checkbox"id="Solid"value="Solid" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                          <label for="Solid"class="px-2 size-label" class="">Solid</label>
                                        </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                    

                                        <div class="rowTypeOptions d-flex justify-content-start w-100">
                                            <input name="Pattern" type="checkbox"id="Floral"value="Floral" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                            <label for="Floral"class="px-2 size-label" class="">Floral</label>
                                        </div>

                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      

                                        <div class="rowTypeOptions d-flex justify-content-start w-100">
                                            <input name="Pattern" type="checkbox"id="Floral Small"value="Floral Small" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                            <label for="Floral Small"class="px-2 size-label" class="">Floral Small</label>
                                        </div>
                                      
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      

                                        <div class="rowTypeOptions d-flex justify-content-start w-100">
                                            <input name="Pattern" type="checkbox"id="Lace"value="Lace" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                            <label for="Lace"class="px-2 size-label" class="">Lace</label>
                                        </div>
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      

                                        <div class="rowTypeOptions d-flex justify-content-start w-100">
                                            <input name="Pattern" type="checkbox"id="Sequin"value="Sequin" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                            <label for="Sequin"class="px-2 size-label" class="">Sequin</label>
                                        </div>
                                      
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      

                                      <div class="rowTypeOptions d-flex justify-content-start w-100">
                                            <input name="Pattern" type="checkbox"id="Texture"value="Texture" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                            <label for="Texture"class="px-2 size-label" class="">Texture</label>
                                      </div>
                                      
                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">
                                      
                                      <div class="rowTypeOptions d-flex justify-content-start w-100">
                                            <input name="Pattern" type="checkbox"id="Animal Print"value="Animal Print" class="px-2 size-checkbox filterInput"onClick="addSizeItemToList(this.id)">
                                            <label for="Animal Print"class="px-2 size-label" class="">Animal Print</label>
                                      </div>

                                    </li>
                                  
                                    
                                    <li data-clickable-option-li=""class="m2 p-4">

                                      <div class="rowTypeOptions d-flex justify-content-start w-100">
                                            <input name="Pattern" type="checkbox"id="Stripe"value="Stripe" class="px-2 filterInput size-checkbox"onClick="addSizeItemToList(this.id)">
                                            <label for="Stripe"class="px-2 size-label" class="">Stripe</label>
                                      </div>
                                      
                                    </li>
                            
                                </ul>

                              </div>
                            </div>

                          </div>
                                  <!-- mobile nekline filter -->
                          <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-sortby" aria-expanded="false" aria-controls="mob-cat-sortby">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>SORT BY</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-sortby">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">   

                                    <li data-value="manual"class="m2 p-4">
                                      <label class="custom-radio">Featured
                                        <input class="bySortRadios  filterInput" type="radio"id="Featured" name="sortby" value="manual"onClick="SortByFun(this.id)" >
                                        <span class="checkmark"></span>
                                      </label>
                                    </li>
                                    <li data-value="popularity"class="m2 p-4">
                                      <label class="custom-radio">Popularity
                                        <input class="bySortRadios filterInput" type="radio" name="sortby"id="Popularity" value="popularity"onClick="SortByFun(this.id)">
                                        <span class="checkmark"></span>
                                      </label>
                                    </li>
                                    <li data-value="price-ascending"class="m2 p-4">
                                      <label class="custom-radio">Price: Low to High
                                        <input class="bySortRadios filterInput" type="radio" name="sortby"id="Price: Low to High" value="price-ascending"onClick="SortByFun(this.id)">
                                        <span class="checkmark"></span>
                                      </label>
                                    </li>
                                    <li data-value="price-descending"class="m2 p-4">
                                      <label class="custom-radio">Price: High to Low
                                        <input class="bySortRadios filterInput" type="radio" name="sortby"id="Price: High to Low" value="price-descending"onClick="SortByFun(this.id)">
                                        <span class="checkmark"></span>
                                      </label>
                                    </li>
                                    <li data-value="created-ascending"class="m2 p-4">
                                      <label class="custom-radio">Oldest to Newest
                                        <input class="bySortRadios filterInput" type="radio" name="sortby"id="Oldest to Newest" value="created-ascending"onClick="SortByFun(this.id)">
                                        <span class="checkmark"></span>
                                      </label>
                                    </li>
                                    <li data-value="created-descending"class="m2 p-4">
                                      <label class="custom-radio ">Newest to Oldest
                                        <input type="radio" name="sortby"id="Newest to Oldest" value="created-descending"onClick="SortByFun(this.id)"class="bySortRadios filterInput">
                                        <span class="checkmark"></span>
                                      </label>
                                    </li>
                                    <li data-value="title-ascending"class="m2 p-4">
                                      <label class="custom-radio">A-Z
                                        <input class="bySortRadios filterInput" type="radio" name="sortby"id="A-Z" value="title-ascending"onClick="SortByFun(this.id)">
                                        <span class="checkmark"></span>
                                      </label>
                                    </li>
                                    <li data-value="title-descending"class="m2 p-4">
                                      <label class="custom-radio">Z-A
                                        <input  class="bySortRadios filterInput" type="radio" name="sortby" id="Z-A" value="title-descending"onClick="SortByFun(this.id)">
                                        <span class="checkmark"></span>
                                      </label>
                                    </li>
                            
                                </ul>

                              </div>
                            </div>

                          </div>
                          
                      </div>

                    </div>

                  </div>

              </div>
          </div>
          


         
          <div class=" mx-auto product__card__section">
                              <!-- Selected Filter section  -->
          <div class="SelectedFilterArea mx-2">

            <div class=" selectedFilterSection d-flex justify-content-start align-items-center flex-wrap
            mx-auto my-0" id="selectedFilterSection">
              <!-- selected filtering items will be shown here -->
            </div>

            <div id="clearAllButton" class=" mx-2 my-auto d-none">
              <p onClick="clearAll()" class="m-0" style="pointer: coursor;">ClearAll</p>
            </div>

          </div>
                            <!-- ############### Product card will be here start ############-->
                                      <!-- single cards wrapper  -->
            <div class="d-flex justify-content-center align-items-center flex-wrap">
  
              @if($products && $products->total() >0 )

                @foreach($products as $product)
                            <!-- single card  -->

                    <?php 
                    
                    $sizes =  explode('|', $product->size);
                   
                    ?>
                    <div class="product-card mx-2 my-4">

                      <div class="p-card-img mx-auto">

                        <a href="#" onclick="redirectProduct('{{$product->id}}','yes')" style="width:100%;height:100%"><img  src="{{$product->image}}" alt="" alt="{{$product->name}}" title="{{$product->name}}" style="width:100%;height:100%"></a>  
                        
                        <div class="offPrice ml-4 mt-3 d-flex justify-content-center align-items-center">
                          <!-- discount offer  -->

                          @if($product->price>0)
                              <?php 

                              $saving = ($product->sale_price*100)/ $product->price;
                              $saving = 100-(int)$saving;
                              ?>
                              @if($saving >0)
                          <span>($saving)%</span>
                          @endif
                          @endif

                        </div>  

                        <div class="d-flex justify-content-center align-items-center mx-1 iconsSection py-1">

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

                      <div class="infoPopUp px-3 mx-2 pt-1">

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
                              <a onclick="redirectProduct('{{$product->id}}','no')"><span class="font-weight-bold productTitle">
                                {{$product->name}}
                              </span></a>
                        </div>

                        <div class="productType d-flex justify-content-start align-items-start">
                            <a href="">
                              <span class="productTypeList">
                                Turtleneck Dress - Black Ctnmb
                              </span></a> 
                        </div>

                        <div class="productPrice">
                           @if($product->sale_price && $product->sale_price !="")

                            <span class="price">${{$product->price}}</span><span class="discount pl-4">${{$product->sale_price}}</span>
                          @else
                            <span class="price">${{$product->price}}</span>
                          @endif
                        </div>

                        <div class="storeInfo d-flex justify-content-start align-items-center">

                          <div class="p-card-externalLink mx-2 d-flex justify-content-center align-items-center" title=""data-toggle="tooltip" data-placement="top" >
                            <a href=""><i class="fas fa-link storeLink"></i></a>   
                          </div>

                          <div class="storeName pl-3">
                            <a  href='{{$product->store_url}}' target="_blank" class="storeTitle text-capitalize">{{$product->store_name}}</a>
                          </div>

                        </div>

                      </div>

                    </div>
                            <!-- single card  -->
                      
                @endforeach

                
              @endif

            </div>
          </div>



    </div>


                      



@endsection






