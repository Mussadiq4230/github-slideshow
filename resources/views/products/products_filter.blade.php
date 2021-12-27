<div class=" filters__section__body my-4 mx-3">
      <?php 
      $total_filters = 0;
      $brands = [];
      $stores = [];
      $dress_lengths = [];
      $dress_styles = [];
      $dress_lengths = [];
      $sleeve_types = [];
      $sleeve_lengths = [];
      $materials = [];
      $necklines = [];
      $patterns = [];
      $color_maps = [];
      $sizes = []; 

      $garment_cares = [];
      $fastening_types = [];
      $seasons = [];
      $cuff_styles = [];
      $collars = [];

      $embellishments = [];
      $characters = [];
      $closures = [];
      $features = [];
      $fit_types = []; 
      $offer_types = [];
      $themes = [];

      ?>
       <form action="{{$_SERVER['PATH_INFO']}}" action="get" id="main_form"> 
  
      <!--  filter for large screen start d-none -->
      <div class="row w-100 mx-auto my-4">

        <div id="filters-panel" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
          <div class="filters-panel__container " data-filters-panel-holder="">

            <!-- Brands  -->
            @if(isset($other_counts['brand']))
              <?php
              $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Size" data-filter-options-name-fs="Size">
                <div class="filter-option__title" data-filter-options-title="">
                  Brands 
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($other_counts['brand'] as $brand)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="Cocktail"   data-option-value="Cocktail" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$brand->count_slug}}" 
                        name="brand[]"   onchange="submitForm('','{{$brand->count_slug}}')"  id="{{$brand->count_slug}}{{$brand->count_id}}" value="{{$brand->count_id}}"
                         <?php if(isset($request_data->brand) && in_array($brand->count_id, $request_data->brand) ){ 
                            $brands[] = $brand;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="brand" class="px-2 size-label"> {{$brand->count_name}} ({{$brand->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>

            @endif

             <!-- Online Stores  -->
            @if(isset($other_counts['store']))
               <?php
              $total_filters++;
              ?>
               <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Online Stores" data-filter-options-name-fs="Online Stores">
                <div class="filter-option__title" data-filter-options-title="">
                  Online Stores 
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($other_counts['store'] as $store)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$store->count_id}}"   data-option-value="{{$store->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$store->count_slug}}" 
                        name="store[]" onchange="submitForm(this.id,'{{$store->count_slug}}')"  id="{{$store->count_slug}}{{$store->count_id}}" value="{{$store->count_id}}"
                         <?php if(isset($request_data->store) && in_array($store->count_id, $request_data->store) ){ 
                            $stores[] = $store;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="store" class="px-2 size-label"> {{$store->count_name}} ({{$store->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            @endif

             <!-- Special Offers  -->
               <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Special Offers" data-filter-options-name-fs="Special Offers">
                <div class="filter-option__title" data-filter-options-title="">
                  Special Offers
                </div>
                 <?php
              $total_filters++;
              ?>
                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($other_counts['offer_type'] as $offer_type)
                      
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$offer_type->count_id}}"   data-option-value="{{$offer_type->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$offer_type->count_slug}}" 
                        name="offer_type[]"  onchange="submitForm(this.id,'{{$offer_type->count_slug}}')"  id="{{$offer_type->count_slug}}{{$offer_type->count_id}}" value="{{$offer_type->count_id}}"
                         <?php if(isset($request_data->offer_type) && in_array($offer_type->count_id, $request_data->offer_type) ){ 
                              $offer_types[] = $offer_type;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="offer_type" class="px-2 size-label"> {{$offer_type->count_name}} ({{$offer_type->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>

              <!-- Dress Style  -->
              <?php 
              if(isset($all_counts['dress_style']) &&  !(isset($all_counts['dress_style'][0])  && count($all_counts['dress_style']) == 1   && $all_counts['dress_style'][0]->count_name == "Unspecified" && $all_counts['dress_style'][0]->total_count <1)){
              ?>
               <?php
              $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Dress Style" data-filter-options-name-fs="Dress Style">
                <div class="filter-option__title" data-filter-options-title="">
                  Dress Style
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['dress_style'] as $dress_style)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$dress_style->count_id}}"   data-option-value="{{$dress_style->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$dress_style->count_slug}}" 
                        name="dress_style[]" name="dress_style_id"   onchange="submitForm(this.id,'{{$dress_style->count_slug}}')"  id="{{$dress_style->count_slug}}{{$dress_style->count_id}}" value="{{$dress_style->count_id}}"
                         <?php if(isset($request_data->dress_style) && in_array($dress_style->count_id, $request_data->dress_style) ){ 
                            $dress_styles[] = $dress_style;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="dress_style" class="px-2 size-label"> {{$dress_style->count_name}} ({{$dress_style->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>

            
            <!-- Dress Length  -->
            <?php 
              if(isset($all_counts['dress_length']) &&  !(isset($all_counts['dress_length'][0])  && count($all_counts['dress_length']) == 1   && $all_counts['dress_length'][0]->count_name == "Unspecified" && $all_counts['dress_length'][0]->total_count <1)){
              ?>

               <?php
              $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Dress Length" data-filter-options-name-fs="Dress Length">
                <div class="filter-option__title" data-filter-options-title="">
                  Dress Length
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['dress_length'] as $dress_length)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$dress_length->count_id}}"   data-option-value="{{$dress_length->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$dress_length->count_slug}}" 
                        name="dress_length[]"    onchange="submitForm(this.id,'{{$dress_length->count_slug}}')"  id="{{$dress_length->count_slug}}{{$dress_length->count_id}}" value="{{$dress_length->count_id}}"
                         <?php if(isset($request_data->dress_length) && in_array($dress_length->count_id, $request_data->dress_length) ){ 
                            $dress_lengths[] = $dress_length;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="dress_length" class="px-2 size-label"> {{$dress_length->count_name}} ({{$dress_length->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


            <!-- Pattern  -->
            <?php 
              if(isset($all_counts['pattern']) &&  !(isset($all_counts['pattern'][0])  && count($all_counts['pattern']) == 1   && $all_counts['pattern'][0]->count_name == "Unspecified" && $all_counts['pattern'][0]->total_count <1)){
              ?>

               <?php
              $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Pattern" data-filter-options-name-fs="Pattern">
                <div class="filter-option__title" data-filter-options-title="">
                  Pattern
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['pattern'] as $pattern)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$pattern->count_id}}"   data-option-value="{{$pattern->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$pattern->count_slug}}" 
                        name="pattern[]"   onchange="submitForm(this.id,'{{$pattern->count_slug}}')"  id="{{$pattern->count_slug}}{{$pattern->count_id}}" value="{{$pattern->count_id}}"
                         <?php if(isset($request_data->pattern) && in_array($pattern->count_id, $request_data->pattern) ){ 
                            $patterns[] = $pattern;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="pattern" class="px-2 size-label"> {{$pattern->count_name}} ({{$pattern->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


            <!-- Neckline  -->
            <?php 
              if(isset($all_counts['neckline']) &&  !(isset($all_counts['neckline'][0])  && count($all_counts['neckline']) == 1   && $all_counts['neckline'][0]->count_name == "Unspecified" && $all_counts['neckline'][0]->total_count <1)){
              ?>

               <?php
              $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Neckline" data-filter-options-name-fs="Neckline">
                <div class="filter-option__title" data-filter-options-title="">
                  Neckline
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['neckline'] as $neckline)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$neckline->count_id}}"   data-option-value="{{$neckline->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$neckline->count_slug}}" 
                        name="neckline[]"    onchange="submitForm(this.id,'{{$neckline->count_slug}}')"  id="{{$neckline->count_slug}}{{$neckline->count_id}}" value="{{$neckline->count_id}}"
                         <?php if(isset($request_data->neckline) && in_array($neckline->count_id, $request_data->neckline) ){ 
                          $necklines[] = $neckline;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="neckline" class="px-2 size-label"> {{$neckline->count_name}} ({{$neckline->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


             <!-- Sleeve Length  -->
            <?php 
              if(isset($all_counts['sleeve_length']) &&  !(isset($all_counts['sleeve_length'][0])  && count($all_counts['sleeve_length']) == 1   && $all_counts['sleeve_length'][0]->count_name == "Unspecified" && $all_counts['sleeve_length'][0]->total_count <1)){
              ?>

               <?php
              $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Sleeve Length" data-filter-options-name-fs="Sleeve Length">
                <div class="filter-option__title" data-filter-options-title="">
                  Sleeve Length
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['sleeve_length'] as $sleeve_length)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$sleeve_length->count_id}}"   data-option-value="{{$sleeve_length->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$sleeve_length->count_slug}}" 
                        name="sleeve_length[]"   onchange="submitForm(this.id,'{{$sleeve_length->count_slug}}')"  id="{{$sleeve_length->count_slug}}{{$sleeve_length->count_id}}" value="{{$sleeve_length->count_id}}"
                         <?php if(isset($request_data->sleeve_length) && in_array($sleeve_length->count_id, $request_data->sleeve_length) ){
                            $sleeve_lengths[] = $sleeve_length;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="sleeve_length" class="px-2 size-label"> {{$sleeve_length->count_name}} ({{$sleeve_length->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


            <!-- Sleeve Type  -->
            <?php 
              if(isset($all_counts['sleeve_type']) &&  !(isset($all_counts['sleeve_type'][0])  && count($all_counts['sleeve_type']) == 1   && $all_counts['sleeve_type'][0]->count_name == "Unspecified" && $all_counts['sleeve_type'][0]->total_count <1)){
              ?>

               <?php
              $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Sleeve Type" data-filter-options-name-fs="Sleeve Type">
                <div class="filter-option__title" data-filter-options-title="">
                  Sleeve Type
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['sleeve_type'] as $sleeve_type)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$sleeve_type->count_id}}"   data-option-value="{{$sleeve_type->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$sleeve_type->count_slug}}" 
                        name="sleeve_type[]"   onchange="submitForm(this.id,'{{$sleeve_type->count_slug}}')"  id="{{$sleeve_type->count_slug}}{{$sleeve_type->count_id}}" value="{{$sleeve_type->count_id}}"
                         <?php if(isset($request_data->sleeve_type) && in_array($sleeve_type->count_id, $request_data->sleeve_type) ){
                            $sleeve_types[] = $sleeve_type;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="sleeve_type" class="px-2 size-label"> {{$sleeve_type->count_name}} ({{$sleeve_type->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


               <!-- Embellishment  -->
            <?php 
              if(isset($all_counts['embellishment']) &&  !(isset($all_counts['embellishment'][0])  && count($all_counts['embellishment']) == 1   && $all_counts['embellishment'][0]->count_name == "Unspecified" && $all_counts['embellishment'][0]->total_count <1)){
              ?>

               <?php
              $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Embellishment" data-filter-options-name-fs="Embellishment">
                <div class="filter-option__title" data-filter-options-title="">
                  Embellishment
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['embellishment'] as $embellishment)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$embellishment->count_id}}"   data-option-value="{{$embellishment->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$embellishment->count_slug}}" 
                        name="embellishment[]"   onchange="submitForm(this.id,'{{$embellishment->count_slug}}')"  id="{{$embellishment->count_slug}}{{$embellishment->count_id}}" value="{{$embellishment->count_id}}"
                         <?php if(isset($request_data->embellishment) && in_array($embellishment->count_id, $request_data->embellishment) ){ 
                            $embellishments[] = $embellishment;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="embellishment" class="px-2 size-label"> {{$embellishment->count_name}} ({{$embellishment->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


            <!-- Material  -->
            <?php 
              if(isset($all_counts['material']) &&  !(isset($all_counts['material'][0])  && count($all_counts['material']) == 1   && $all_counts['material'][0]->count_name == "Unspecified" && $all_counts['material'][0]->total_count <1)){
              ?>

               <?php
              $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Material" data-filter-options-name-fs="Material">
                <div class="filter-option__title" data-filter-options-title="">
                  Material
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['material'] as $material)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$material->count_id}}"   data-option-value="{{$material->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$material->count_slug}}" 
                        name="material[]"  onchange="submitForm(this.id,'{{$material->count_slug}}')"  id="{{$material->count_slug}}{{$material->count_slug}}" value="{{$material->count_id}}"
                         <?php if(isset($request_data->material) && in_array($material->count_id, $request_data->material) ){ 
                            $materials[] = $material;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="material" class="px-2 size-label"> {{$material->count_name}} ({{$material->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


            <!-- Character  -->
            <?php 
              if(isset($all_counts['character']) &&  !(isset($all_counts['character'][0])  && count($all_counts['character']) == 1   && $all_counts['character'][0]->count_name == "Unspecified" && $all_counts['character'][0]->total_count <1)){
              ?>

               <?php
              $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Character" data-filter-options-name-fs="Character">
                <div class="filter-option__title" data-filter-options-title="">
                  Character
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['character'] as $character)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$character->count_id}}"   data-option-value="{{$character->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$character->count_slug}}" 
                        name="character[]"    onchange="submitForm(this.id,'{{$character->count_slug}}')"  id="{{$character->count_slug}}{{$character->count_id}}" value="{{$character->count_id}}"
                         <?php if(isset($request_data->character) && in_array($character->count_id, $request_data->character) ){ 

                            $characters[] = $character;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="character" class="px-2 size-label">{{$character->count_id}} {{$character->count_name}} ({{$character->total_count}})</label>

                      </div>
                    </li>

                    @endforeach
                   
                  </ul>
                </div>
              </div>
            <?php 

            } ?>

        @if($total_filters >= 11)
        <?php 
        $total_filters = 0;
        ?>
          </div>
        </div>

        <div id="filters-panel" style="border-top: 0px;" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
          <div class="filters-panel__container " data-filters-panel-holder="">
        @endif

            <!-- Closure  -->
            <?php 
              if(isset($all_counts['closure']) &&  !(isset($all_counts['closure'][0])  && count($all_counts['closure']) == 1   && $all_counts['closure'][0]->count_name == "Unspecified" && $all_counts['closure'][0]->total_count <1)){
              
              $total_filters++;

              ?>


              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Closure" data-filter-options-name-fs="Closure">
                <div class="filter-option__title" data-filter-options-title="">
                  Closure
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['closure'] as $closure)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$closure->count_id}}"   data-option-value="{{$closure->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$closure->count_slug}}" 
                        name="closure[]"  onchange="submitForm(this.id,'{{$closure->count_slug}}')"  id="{{$closure->count_slug}}{{$closure->count_id}}" value="{{$closure->count_id}}"
                         <?php if(isset($request_data->closure) && in_array($closure->count_id, $request_data->closure) ){ 
                            $closures[] = $closure;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="closure" class="px-2 size-label"> {{$closure->count_name}} ({{$closure->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


            @if($total_filters >= 11)
            <?php 
            $total_filters = 0;
            ?>
              </div>
            </div>

            <div id="filters-panel" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
              <div class="filters-panel__container " data-filters-panel-holder="">
            @endif

            <!-- Feature  -->
            <?php 
              if(isset($all_counts['feature']) &&  !(isset($all_counts['feature'][0])  && count($all_counts['feature']) == 1   && $all_counts['feature'][0]->count_name == "Unspecified" && $all_counts['feature'][0]->total_count <1)){
              
              $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Feature" data-filter-options-name-fs="Feature">
                <div class="filter-option__title" data-filter-options-title="">
                  Feature
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['feature'] as $feature)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$feature->count_id}}"   data-option-value="{{$feature->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$feature->count_slug}}" 
                        name="feature[]"   onchange="submitForm(this.id,'{{$feature->count_slug}}')"  id="{{$feature->count_slug}}{{$feature->count_id}}" value="{{$feature->count_id}}"
                         <?php if(isset($request_data->feature) && in_array($feature->count_id, $request_data->feature) ){ 
                            $features[] = $feature;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="feature" class="px-2 size-label"> {{$feature->count_name}} ({{$feature->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>

            @if($total_filters >= 11)
            <?php 
            $total_filters = 0;
            ?>
              </div>
            </div>

            <div id="filters-panel" style="border-top: 0px;" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
              <div class="filters-panel__container " data-filters-panel-holder="">
            @endif


             <!-- Fit Type  -->
            <?php 
              if(isset($all_counts['fit_type']) &&  !(isset($all_counts['fit_type'][0])  && count($all_counts['fit_type']) == 1   && $all_counts['fit_type'][0]->count_name == "Unspecified" && $all_counts['fit_type'][0]->total_count <1)){
                
                $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Fit Type" data-filter-options-name-fs="Fit Type">
                <div class="filter-option__title" data-filter-options-title="">
                  Fit Type
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['fit_type'] as $fit_type)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$fit_type->count_id}}"   data-option-value="{{$fit_type->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$fit_type->count_slug}}" 
                        name="fit_type[]"   onchange="submitForm(this.id,'{{$fit_type->count_slug}}')"  id="{{$fit_type->count_slug}}{{$fit_type->count_id}}" value="{{$fit_type->count_id}}"
                         <?php if(isset($request_data->fit_type) && in_array($fit_type->count_id, $request_data->fit_type) ){ 
                            $fit_types[] = $fit_type;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="fit_type" class="px-2 size-label"> {{$fit_type->count_name}} ({{$fit_type->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


            @if($total_filters >= 11)
            <?php 
            $total_filters = 0;
            ?>
              </div>
            </div>

            <div id="filters-panel" style="border-top: 0px;" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
              <div class="filters-panel__container " data-filters-panel-holder="">
            @endif

            <!-- Occasion  -->
            <?php 
              if(isset($all_counts['occasion']) &&  !(isset($all_counts['occasion'][0])  && count($all_counts['occasion']) == 1   && $all_counts['occasion'][0]->count_name == "Unspecified" && $all_counts['occasion'][0]->total_count <1)){
             
             $total_filters++; 
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Occasion" data-filter-options-name-fs="Occasion">
                <div class="filter-option__title" data-filter-options-title="">
                  Occasion
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['occasion'] as $occasion)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$occasion->count_id}}"   data-option-value="{{$occasion->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$occasion->count_slug}}" 
                        name="occasion[]"  onchange="submitForm(this.id,'{{$occasion->count_slug}}')"  id="{{$occasion->count_slug}}{{$occasion->count_id}}" value="{{$occasion->count_id}}"
                         <?php if(isset($request_data->occasion) && in_array($occasion->count_id, $request_data->occasion) ){ 
                            $occasions[] = $occasion;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="occasion" class="px-2 size-label"> {{$occasion->count_name}} ({{$occasion->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>

              @if($total_filters >= 11)
            <?php 
            $total_filters = 0;
            ?>
              </div>
            </div>

            <div id="filters-panel" style="border-top: 0px;" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
              <div class="filters-panel__container " data-filters-panel-holder="">
            @endif

             <!-- Themes  -->
            <?php 
              if(isset($all_counts['theme']) &&  !(isset($all_counts['theme'][0])  && count($all_counts['theme']) == 1   && $all_counts['theme'][0]->count_name == "Unspecified" && $all_counts['theme'][0]->total_count <1)){
              
                $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Theme" data-filter-options-name-fs="Theme">
                <div class="filter-option__title" data-filter-options-title="">
                  Theme
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['theme'] as $theme)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$theme->count_id}}"   data-option-value="{{$theme->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$theme->count_slug}}" 
                        name="theme[]"  onchange="submitForm(this.id,'{{$theme->count_slug}}')"  id="{{$theme->count_slug}}{{$theme->count_id}}" value="{{$theme->count_id}}"
                         <?php if(isset($request_data->theme) && in_array($theme->count_id, $request_data->theme) ){ 
                            $themes[] = $theme;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="theme" class="px-2 size-label"> {{$theme->count_name}} ({{$theme->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


            @if($total_filters >= 11)
            <?php 
            $total_filters = 0;
            ?>
              </div>
            </div>

            <div id="filters-panel" style="border-top: 0px;" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
              <div class="filters-panel__container " data-filters-panel-holder="">
            @endif

             <!-- Cuff Style  -->
            <?php 
              if(isset($all_counts['cuff_style']) &&  !(isset($all_counts['cuff_style'][0])  && count($all_counts['cuff_style']) == 1   && $all_counts['cuff_style'][0]->count_name == "Unspecified" && $all_counts['cuff_style'][0]->total_count <1)){
              
                $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Cuff Style" data-filter-options-name-fs="Cuff Style">
                <div class="filter-option__title" data-filter-options-title="">
                  Cuff Style
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['cuff_style'] as $cuff_style)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$cuff_style->count_id}}"   data-option-value="{{$cuff_style->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$cuff_style->count_slug}}" 
                        name="cuff_style[]" onchange="submitForm(this.id,'{{$cuff_style->count_slug}}')"  id="{{$cuff_style->count_slug}}{{$cuff_style->count_id}}" value="{{$cuff_style->count_id}}"
                         <?php if(isset($request_data->cuff_style) && in_array($cuff_style->count_id, $request_data->cuff_style) ){ 
                            $cuff_styles[] = $cuff_style;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="cuff_style" class="px-2 size-label"> {{$cuff_style->count_name}} ({{$cuff_style->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>

            @if($total_filters >= 11)
            <?php 
            $total_filters = 0;
            ?>
              </div>
            </div>

            <div id="filters-panel" style="border-top: 0px;" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
              <div class="filters-panel__container " data-filters-panel-holder="">
            @endif


               <!-- Fastening Type  -->
            <?php 
              if(isset($all_counts['fastening_type']) &&  !(isset($all_counts['fastening_type'][0])  && count($all_counts['fastening_type']) == 1   && $all_counts['fastening_type'][0]->count_name == "Unspecified" && $all_counts['fastening_type'][0]->total_count <1)){
              
                $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Fastening Type" data-filter-options-name-fs="Fastening Type">
                <div class="filter-option__title" data-filter-options-title="">
                  Fastening Type
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['fastening_type'] as $fastening_type)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$fastening_type->count_id}}"   data-option-value="{{$fastening_type->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$fastening_type->count_slug}}" 
                        name="fastening_type[]"  onchange="submitForm(this.id,'{{$fastening_type->count_slug}}')"  id="{{$fastening_type->count_slug}}{{$fastening_type->id}}" value="{{$fastening_type->count_id}}"
                         <?php if(isset($request_data->fastening_type) && in_array($fastening_type->count_id, $request_data->fastening_type) ){ 
                            $fastening_types[] = $fastening_type;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="fastening_type" class="px-2 size-label"> {{$fastening_type->count_name}} ({{$fastening_type->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


             @if($total_filters >= 11)
            <?php 
            $total_filters = 0;
            ?>
              </div>
            </div>

            <div id="filters-panel" style="border-top: 0px;" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
              <div class="filters-panel__container " data-filters-panel-holder="">
            @endif


               <!-- Collar  -->
            <?php 
              if(isset($all_counts['collar']) &&  !(isset($all_counts['collar'][0])  && count($all_counts['collar']) == 1   && $all_counts['collar'][0]->count_name == "Unspecified" && $all_counts['collar'][0]->total_count <1)){
              
                $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Collar" data-filter-options-name-fs="Collar">
                <div class="filter-option__title" data-filter-options-title="">
                  Collar
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($all_counts['collar'] as $collar)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$collar->count_id}}"   data-option-value="{{$collar->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$collar->count_slug}}" 
                        name="collar[]"  onchange="submitForm(this.id,'{{$collar->count_slug}}')"  id="{{$collar->count_slug}}{{$collar->count_id}}" value="{{$collar->count_id}}"
                         <?php if(isset($request_data->collar) && in_array($collar->count_id, $request_data->collar) ){ 
                            $collars[] = $collar;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="collar" class="px-2 size-label"> {{$collar->count_name}} ({{$collar->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


            @if($total_filters >= 11)
            <?php 
            $total_filters = 0;
            ?>
              </div>
            </div>

            <div id="filters-panel" style="border-top: 0px;" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
              <div class="filters-panel__container " data-filters-panel-holder="">
            @endif


            <!-- Color -->
              @if(isset($colors))
               <?php 
                $total_filters++;
                ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="isp-color-family" data-filter-options-type-fs="Isp-color-family" data-filter-options-name-fs="Color Family">
                <div class="filter-option__title" data-filter-options-title="">Color</div>
                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">


                    <?php  $i=0;?>
                    @foreach($colors as $color)
                   
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>

                      <li data-clickable-option-li="">
                      <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="{{$color->count_name}}" data-option-value="{{$color->count_name}}" data-available="{{$color->id}}">
                        <div class="color-options">
                          <label class="color-custom-check-box d-flex justify-content-start align-items-center"style=" font-size:1.3rem;">{{$color->color_name}}
                            <input type="checkbox" name="color[]" id="{{$color->color_map_slug}}{{$color->id}}"   onchange="submitForm(this.id,'{{$color->color_map_slug}}')" class="filterInput {{$color->color_map_slug}}" value="{{$color->id}}"
                             <?php if(isset($request_data->color) && in_array($color->id, $request_data->color)){ 
                              $color_maps[] = $color;
                              ?> checked='checked' <?php }?> 
                            >
                            <span class="checkmark1 "style="background:{{$color->color_code}};border:1px solid black;"></span>
                          </label>
                        </div>

                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>

              @endif

            @if($total_filters >= 11)
            <?php 
            $total_filters = 0;
            ?>
              </div>
            </div>

            <div id="filters-panel" style="border-top: 0px;" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
              <div class="filters-panel__container " data-filters-panel-holder="">
            @endif

            <?php 
            $total_filters++;
            ?>

               <!-- Season  -->
            <?php 
              if(isset($other_counts['season']) &&  !(isset($all_counts['season'][0])  && count($other_counts['season']) == 1   && $all_counts['season'][0]->count_name == "Unspecified" && $all_counts['season'][0]->total_count <1)){
              
                $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Season" data-filter-options-name-fs="Season">
                <div class="filter-option__title" data-filter-options-title="">
                  Season
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($other_counts['season'] as $season)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$season->count_id}}"   data-option-value="{{$season->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$season->count_slug}}" 
                        name="season[]" name="season_id"   onchange="submitForm(this.id,'{{$season->count_slug}}')"  id="{{$season->count_slug}}{{$season->count_id}}" value="{{$season->count_id}}"
                         <?php if(isset($request_data->season) && in_array($season->count_id, $request_data->season) ){ 
                            $seasons[] = $season;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="season" class="px-2 size-label"> {{$season->count_name}} ({{$season->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>

                   @if($total_filters >= 11)
            <?php 
            $total_filters = 0;
            ?>
              </div>
            </div>

            <div id="filters-panel" style="border-top: 0px;" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
              <div class="filters-panel__container " data-filters-panel-holder="">
            @endif

            <?php 
            $total_filters++;
            ?>

               <!-- Season  -->
            <?php 
            if(isset($other_counts['size_map']) &&  !(isset($all_counts['size_map'][0])  && count($other_counts['size_map']) == 1   && $all_counts['size_map'][0]->count_name == "Unspecified" && $all_counts['size_map'][0]->total_count <1)){
              
                $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Size" data-filter-options-name-fs="Size">
                <div class="filter-option__title" data-filter-options-title="">
                  Size
                </div>

                <div class="filter-option__container" data-filter-options-container="">

                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0;

                     ?>

                    @foreach($other_counts['size_map'] as $size)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>

                      <li data-clickable-option-li="">
                         <!-- onClick="addSizeItemToList(this.id)" -->
                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$size->count_id}}"   data-option-value="{{$size->count_id}}" data-available="256">
                          <input type="checkbox" class="px-2 size-checkbox filterInput {{$size->count_slug}}" 
                          name="size[]"    onchange="submitForm(this.id,'{{$size->count_slug}}')"  id="{{$size->count_slug}}{{$size->count_id}}" value="{{$size->count_id}}"
                           <?php if(isset($request_data->size) && in_array($size->count_id, $request_data->size) ){ 
                              $sizes[] = $size;
                            ?> checked='checked' <?php }?>  
                          >
                          <label for="size" class="px-2 size-label"> {{$size->count_name}} ({{$size->total_count}})</label>
                        </div>
                      </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


               @if($total_filters >= 11)
            <?php 
            $total_filters = 0;
            ?>
              </div>
            </div>

            <div id="filters-panel" style="border-top: 0px;" class="filters-panel hidden--mobile loaded mx-auto" data-filters-panel="">
              <div class="filters-panel__container " data-filters-panel-holder="">
            @endif

            <?php 
            $total_filters++;
            ?>




               <!-- Garment Care  -->
            <?php 
              if(isset($other_counts['garment_care']) &&  !(isset($all_counts['garment_care'][0])  && count($other_counts['garment_care']) == 1   && $all_counts['garment_care'][0]->count_name == "Unspecified" && $all_counts['garment_care'][0]->total_count <1)){
              
                $total_filters++;
              ?>
              <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="size" data-filter-options-type-fs="Garment Care" data-filter-options-name-fs="Garment Care">
                <div class="filter-option__title" data-filter-options-title="">
                  Garment Care
                </div>

                <div class="filter-option__container" data-filter-options-container="">
                  <ul class="filter-option__items" data-filter-options-items="">

                    <?php $i=0; ?>

                    @foreach($other_counts['garment_care'] as $garment_care)
                    
                      @if($i >5)
                        <?php  break; ?>
                      @endif
                      <?php $i++;?>
                    <li data-clickable-option-li="">
                       <!-- onClick="addSizeItemToList(this.id)" -->
                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{$garment_care->count_id}}"   data-option-value="{{$garment_care->count_id}}" data-available="256">
                        <input type="checkbox" class="px-2 size-checkbox filterInput {{$garment_care->count_slug}}" 
                        name="garment_care[]"  onchange="submitForm(this.id,'{{$garment_care->count_slug}}')"  id="{{$garment_care->count_slug}}{{$garment_care->count_id}}" value="{{$garment_care->count_id}}"
                         <?php if(isset($request_data->garment_care) && in_array($garment_care->count_id, $request_data->garment_care) ){ 
                            $garment_cares[] = $garment_care;
                          ?> checked='checked' <?php }?>  
                        >
                        <label for="garment_care" class="px-2 size-label"> {{$garment_care->count_name}} ({{$garment_care->total_count}})</label>
                      </div>
                    </li>

                    @endforeach

                  </ul>
                </div>
              </div>
            <?php 

            } ?>


            <!-- Price -->
            <div class="filters-panel__option filter-option" data-filter-options="" data-filter-options-type="price" data-filter-options-type-fs="Price" data-filter-options-name-fs="Price">
              <div class="filter-option__title" data-filter-options-title="">Price</div>
              <div class="filter-option__container" data-filter-options-container="">
                <ul class="filter-option__items" data-filter-options-items="">



                  <li data-clickable-option-li="">
                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="0-10" data-option-value="USD:0-USD:10" data-available="15">
                    <input type="radio" class="radio" 
                      <?php if(isset($request_data->price_range) && $request_data->price_range == '0-10'){ ?> checked='checked' <?php }?>  
                      onchange="submitForm('price_range')" id="price_range" name="price_range" value="0-10"  >
                      <label for="$0-$10"class="px-2 size-label" class="">$0-$10</label>
                    </div>
                  </li>


                  <li data-clickable-option-li="">
                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="10-30" data-option-value="USD:10-USD:30" data-available="15">
                    <input type="radio" class="radio" 
                      <?php if(isset($request_data->price_range) && $request_data->price_range == '10-30'){ ?> checked='checked' <?php }?>  
                      onchange="submitForm('price_range')" id="price_range" name="price_range" value="10-30"  >
                      <label for="$10-$30"class="px-2 size-label" class="">$10-$30</label>
                    </div>
                  </li>


                  <li data-clickable-option-li="">
                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="30-50" data-option-value="USD:30-USD:50" data-available="15">
                    <input type="radio" class="radio" 
                      <?php if(isset($request_data->price_range) && $request_data->price_range == '30-50'){ ?> checked='checked' <?php }?>  
                      onchange="submitForm('price_range')" id="price_range" name="price_range" value="30-50"  >
                      <label for="$30-$50"class="px-2 size-label" class="">$30-$50</label>
                    </div>
                  </li>


                  <li data-clickable-option-li="">
                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="50-100" data-option-value="USD:50-USD:100" data-available="154">

                      <input
                      <?php if(isset($request_data->price_range) && $request_data->price_range == '50-100'){ ?> checked='checked' <?php }?>  
                       type="radio" class="radio" onchange="submitForm('price_range')" name="price_range" id="price_range" value="50-100">
                      <label for="$50-$100"class="px-2 size-label" class="">$50-$100</label>
                    </div>
                  </li>


                  <li data-clickable-option-li="">
                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="100-200" data-option-value="USD:100-USD:200" data-available="79">

                      <input
                     <?php if(isset($request_data->price_range) && $request_data->price_range == '100-200'){ ?> checked='checked' <?php }?> 
                     type="radio" class="radio" onchange="submitForm('price_range')" name="price_range" id="price_range" value="100-200" />
                      <label for="$100-$200"class="px-2 size-label" class="">$100-$200</label>

                    </div>
                  </li>


                  <li data-clickable-option-li="">
                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="200-500" data-option-value="USD:200-USD:500" data-available="8">

                      <input
                     <?php if(isset($request_data->price_range) && $request_data->price_range == '200-500'){ ?> checked='checked' <?php }?> 
                     type="radio" class="radio" onchange="submitForm('price_range')" name="price_range" id="price_range" value="200-500" />
                      <label for="$200-$500"class="px-2 size-label" class="">$200-$500</label>

                    </div>
                  </li>


                   <li data-clickable-option-li="">
                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="500-1000" data-option-value="USD:500-USD:1000" data-available="8">

                      <input
                     <?php if(isset($request_data->price_range) && $request_data->price_range == '500-1000'){ ?> checked='checked' <?php }?> 
                     type="radio" class="radio" onchange="submitForm('price_range')" name="price_range" id="price_range"  value="500-1000" />
                      <label for="$500-$1000"class="px-2 size-label" class="">$500-$1000</label>

                    </div>
                  </li>

                 

                </ul>
              </div>
            </div>   

          </div>
        </div>

        <!-- IF  size_type is selected -->
        @if(isset($request_data->size_type) && $request_data->size_type !="")
        <input type="hidden" value="{{$request_data->size_type}}" name="size_type" id="size_type" />
        @endif
      </form>

      <form action="{{$_SERVER['PATH_INFO']}}" action="get" id="main_form_mobile"> 

                <!-- Medium and Mobile screen filter options start -->
                <div class=" row cat-mobile-filter-nav mx-2 mb-2" id="mobile-filters-div">

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

                             <!-- mobile brand filter -->
                          @if(isset($other_counts['brand']))
                          
                          <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-brand" aria-expanded="false" aria-controls="mob-cat-brand">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>BRANDS</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-brand">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                <?php $i=0; ?>

                                @foreach($other_counts['brand'] as $brand)
                                
                                  @if($i >5)
                                    <?php  break; ?>
                                  @endif
                                  <?php $i++;?>

                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($brand->count_name)}}" data-option-value="vt::Dresses::Brand::{{$brand->count_name}}" data-available="{{$brand->count_id}}">


                                      <input name="brand[]" type="checkbox" id="{{$brand->count_slug}}{{$brand->count_id}}" value="{{$brand->count_id}}" class="px-2 size-checkbox filterInput {{$brand->count_slug}}" onchange="submitForm('','{{$brand->count_slug}}','mobile')"
                                        <?php if(isset($request_data->brand) && in_array($brand->count_id, $request_data->brand) ){ 
                                          ?> checked='checked' <?php }?> 
                                      >
                                      <label for="{{$brand->count_name}}"class="px-2 size-label" class="">{{$brand->count_name}} ({{$brand->total_count}})</label>
                                    </div>
                                  </li>

                                @endforeach

                                </ul>

                              </div>
                            </div>
                          </div>
                          <!-- mobile brand filter -->
                          @endif


                            <!-- mobile store filter -->
                          @if(isset($other_counts['store']))
                          
                          <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-store" aria-expanded="false" aria-controls="mob-cat-store">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>ONLINE STORES</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-store">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                <?php $i=0; ?>

                                @foreach($other_counts['store'] as $store)
                                
                                  @if($i >5)
                                    <?php  break; ?>
                                  @endif
                                  <?php $i++;?>
                                  
                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($store->count_name)}}" data-option-value="vt::Dresses::Store::{{$store->count_name}}" data-available="{{$store->count_id}}">


                                      <input name="store[]" type="checkbox" id="{{$store->count_slug}}{{$store->count_id}}" value="{{$store->count_id}}" class="px-2 size-checkbox filterInput {{$store->count_slug}}" onchange="submitForm('','{{$store->count_slug}}','mobile')"
                                        <?php if(isset($request_data->store) && in_array($store->count_id, $request_data->store) ){ 
                                          ?> checked='checked' <?php }?> 
                                      >
                                      <label for="{{$store->count_name}}"class="px-2 size-label" class="">{{$store->count_name}} ({{$store->total_count}})</label>
                                    </div>
                                  </li>

                                @endforeach

                                </ul>

                              </div>
                            </div>
                          </div>
                          <!-- mobile store filter -->
                          @endif



                        <!-- mobile size filter -->
                        
                          @if(isset($other_counts['size_map']) &&  !(isset($all_counts['size_map'][0])  && count($other_counts['size_map']) == 1   && $all_counts['size_map'][0]->count_name == "Unspecified" && $all_counts['size_map'][0]->total_count <1))

                          
                            <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-size_map" aria-expanded="false" aria-controls="mob-cat-size_map">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>SIZE</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-size_map">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                <?php $i=0; ?>

                                @foreach($other_counts['size_map'] as $size_map)
                                
                                  @if($i >5)
                                    <?php  break; ?>
                                  @endif
                                  <?php $i++;?>
                                  
                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($size_map->count_name)}}" data-option-value="vt::Dresses::Size::{{$size_map->count_name}}" data-available="{{$size_map->count_id}}">


                                      <input name="size[]" type="checkbox" id="{{$size_map->count_slug}}{{$size_map->count_id}}" value="{{$size_map->count_id}}" class="px-2 size-checkbox filterInput {{$size_map->count_slug}}" onchange="submitForm('','{{$size_map->count_slug}}','mobile')"
                                         <?php if(isset($request_data->size) && in_array($size_map->count_id, $request_data->size) ){ ?> checked='checked' <?php }?> 
                                       >
                                      <label for="{{$size_map->count_name}}"class="px-2 size-label" class="">{{$size_map->count_name}} ({{$size_map->total_count}})</label>
                                    </div>
                                  </li>

                                @endforeach

                                </ul>

                              </div>
                            </div>
                          </div>

                          @endif



                          <!-- mobile color filter -->
                          @if(isset($colors))

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

                                  @foreach($colors as $color)

                                  <li data-clickable-option-li=""class="m2 p-4">
                                    <div class="newfilter-checkbox has-hex dark-check" data-clickable-option="" data-option-short-value="{{strtolower($color->color_name)}}" data-option-value="{{$color->color_name}}" data-available="{{$color->id}}">
                                      <div class="color-options">
                                        <label class="color-custom-check-box d-flex justify-content-start align-items-center"style=" font-size:1.3rem;">{{$color->color_name}}
                                          <input type="checkbox" name="color[]" id="{{$color->color_name}}{{$color->id}}" onchange="submitForm('','{{$color->color_map_slug}}','mobile')" value="{{$color->id}}" class="filterInput {{$color->color_map_slug}}"
                                                  <?php if(isset($request_data->color) && in_array($color->id, $request_data->color) ){ ?> checked='checked' <?php }?> 
                                          >
                                          <span class="checkmark1 "style="background-color:{{$color->color_code}};border:1px solid black;"></span>
                                        </label>
                                      </div>

                                    </div>
                                  </li>

                                  @endforeach
                                  
                                </ul>

                              </div>
                            </div>
                          </div>
                          @endif

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

                                  <li data-clickable-option-li="" class="mr-3 mt-3">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="0-10" data-option-value="USD:0-USD:10" data-available="15">
                                    <input type="radio" class="radio" 
                                      <?php if(isset($request_data->price_range) && $request_data->price_range == '0-10'){ ?> checked='checked' <?php }?>  
                                      onchange="submitForm('price_range','','mobile')" id="price_range" name="price_range" value="0-10"  >
                                      <label for="$0-$10"class="px-2 size-label" class="">$0-$10</label>
                                    </div>
                                  </li>


                                  <li data-clickable-option-li="" class="mr-3 mt-3">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="10-30" data-option-value="USD:10-USD:30" data-available="15">
                                    <input type="radio" class="radio" 
                                      <?php if(isset($request_data->price_range) && $request_data->price_range == '10-30'){ ?> checked='checked' <?php }?>  
                                      onchange="submitForm('price_range','','mobile')" id="price_range" name="price_range" value="10-30"  >
                                      <label for="$10-$30"class="px-2 size-label" class="">$10-$30</label>
                                    </div>
                                  </li>


                                  <li data-clickable-option-li="" class="mr-3 mt-3">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="30-50" data-option-value="USD:30-USD:50" data-available="15">
                                    <input type="radio" class="radio" 
                                      <?php if(isset($request_data->price_range) && $request_data->price_range == '30-50'){ ?> checked='checked' <?php }?>  
                                      onchange="submitForm('price_range','','mobile')" id="price_range" name="price_range" value="30-50"  >
                                      <label for="$30-$50"class="px-2 size-label" class="">$30-$50</label>
                                    </div>
                                  </li>


                                  <li data-clickable-option-li="" class="mr-3 mt-3">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="50-100" data-option-value="USD:50-USD:100" data-available="154">

                                      <input
                                      <?php if(isset($request_data->price_range) && $request_data->price_range == '50-100'){ ?> checked='checked' <?php }?>  
                                       type="radio" class="radio" onchange="submitForm('price_range','','mobile')" name="price_range" id="price_range" value="50-100">
                                      <label for="$50-$100"class="px-2 size-label" class="">$50-$100</label>
                                    </div>
                                  </li>


                                  <li data-clickable-option-li="" class="mr-3 mt-3">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="100-200" data-option-value="USD:100-USD:200" data-available="79">

                                      <input
                                     <?php if(isset($request_data->price_range) && $request_data->price_range == '100-200'){ ?> checked='checked' <?php }?> 
                                     type="radio" class="radio" onchange="submitForm('price_range','','mobile')" name="price_range" id="price_range" value="100-200" />
                                      <label for="$100-$200"class="px-2 size-label" class="">$100-$200</label>

                                    </div>
                                  </li>


                                  <li data-clickable-option-li="" class="mr-3 mt-3">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="200-500" data-option-value="USD:200-USD:500" data-available="8">

                                      <input
                                     <?php if(isset($request_data->price_range) && $request_data->price_range == '200-500'){ ?> checked='checked' <?php }?> 
                                     type="radio" class="radio" onchange="submitForm('price_range','','mobile')" name="price_range" id="price_range" value="200-500" />
                                      <label for="$200-$500"class="px-2 size-label" class="">$200-$500</label>

                                    </div>
                                  </li>


                                   <li data-clickable-option-li="" class="mr-3 mt-3">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="500-1000" data-option-value="USD:500-USD:1000" data-available="8">

                                      <input
                                     <?php if(isset($request_data->price_range) && $request_data->price_range == '500-1000'){ ?> checked='checked' <?php }?> 
                                     type="radio" class="radio" onchange="submitForm('price_range','','mobile')" name="price_range" id="price_range" value="500-1000" />
                                      <label for="$500-$1000"class="px-2 size-label" class="">$500-$1000</label>

                                    </div>
                                  </li>

                                </ul>
                                
                              </div>
                            </div>
                          </div>

                          
                          <!-- mobilae offer type filter -->
                             <div class="mob-filter-option w-100 mt-4">
                            <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-offer_type" aria-expanded="false" aria-controls="mob-cat-offer_type">
                              <div class="d-flex justify-content-between align-items-center px-5">
                                <div>OFFER TYPE</div>
                                <div><i class="fas fa-plus"></i></div>
                              </div>
                            </button>
                            
                            <div class="collapse w-100" id="mob-cat-offer_type">
                              <div class="card card-body cat-filter-card-body">

                                <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                <?php $i=0; ?>

                                @foreach($other_counts['offer_type'] as $offer_type)
                                
                                  @if($i >5)
                                    <?php  break; ?>
                                  @endif
                                  <?php $i++;?>
                                  
                                  <li data-clickable-option-li="" class="m2 p-4">
                                    <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($offer_type->count_name)}}" data-option-value="vt::Dresses::Offer Type::{{$offer_type->count_name}}" data-available="{{$offer_type->count_id}}">


                                      <input name="offer_type[]" type="checkbox" id="{{$offer_type->count_slug}}{{$offer_type->count_id}}" value="{{$offer_type->count_id}}" class="px-2 size-checkbox filterInput {{$offer_type->count_slug}}"  onchange="submitForm('','{{$offer_type->count_slug}}','mobile')" 
                                         <?php if(isset($request_data->offer_type) && in_array($offer_type->count_id, $request_data->offer_type) ){ ?> checked='checked' <?php }?> 
                                       >
                                      <label for="{{$offer_type->count_name}}"class="px-2 size-label" class="">{{$offer_type->count_name}} ({{$offer_type->total_count}})</label>
                                    </div>

                                  </li>

                                @endforeach

                                </ul>

                              </div>
                            </div>
                          </div>

                          <!-- mobile dress style filter -->
                          <?php 
                          if(isset($all_counts['dress_style']) &&  !(isset($all_counts['dress_style'][0])  && count($all_counts['dress_style']) == 1   && $all_counts['dress_style'][0]->count_name == "Unspecified" && $all_counts['dress_style'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-dress_style" aria-expanded="false" aria-controls="mob-cat-dress_style">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>DRESS STYLE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-dress_style">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['dress_style'] as $dress_style)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($dress_style->count_name)}}" data-option-value="vt::Dresses::Dress Style::{{$dress_style->count_name}}" data-available="{{$dress_style->count_id}}">


                                        <input name="dress_style[]" type="checkbox" id="{{$dress_style->count_slug}}{{$dress_style->count_id}}" value="{{$dress_style->count_id}}" class="px-2 size-checkbox filterInput {{$dress_style->count_slug}}"  onchange="submitForm('','{{$dress_style->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->dress_style) && in_array($dress_style->count_id, $request_data->dress_style) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$dress_style->count_name}}"class="px-2 size-label" class="">{{$dress_style->count_name}} ({{$dress_style->total_count}})</label>
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>



                          <!-- mobile dress length filter -->
                          <?php 
                          if(isset($all_counts['dress_length']) &&  !(isset($all_counts['dress_length'][0])  && count($all_counts['dress_length']) == 1   && $all_counts['dress_length'][0]->count_name == "Unspecified" && $all_counts['dress_length'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-dress_length" aria-expanded="false" aria-controls="mob-cat-dress_length">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>DRESS LENGTH</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-dress_length">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['dress_length'] as $dress_length)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($dress_length->count_name)}}" data-option-value="vt::Dresses::Dress Length::{{$dress_length->count_name}}" data-available="{{$dress_length->count_id}}">


                                        <input name="dress_length[]" type="checkbox" id="{{$dress_length->count_slug}}{{$dress_length->count_id}}" value="{{$dress_length->count_id}}" class="px-2 size-checkbox filterInput {{$dress_length->count_slug}}"  onchange="submitForm('','{{$dress_length->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->dress_length) && in_array($dress_length->count_id, $request_data->dress_length) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$dress_length->count_name}}"class="px-2 size-label" class="">{{$dress_length->count_name}} ({{$dress_length->total_count}})</label>
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                             <!-- mobile fit type filter -->
                          <?php 
                          if(isset($all_counts['fit_type']) &&  !(isset($all_counts['fit_type'][0])  && count($all_counts['fit_type']) == 1   && $all_counts['fit_type'][0]->count_name == "Unspecified" && $all_counts['fit_type'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-fit_type" aria-expanded="false" aria-controls="mob-cat-fit_type">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>FIT TYPE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-fit_type">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['fit_type'] as $fit_type)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($fit_type->count_name)}}" data-option-value="vt::Dresses::Fit Type::{{$fit_type->count_name}}" data-available="{{$fit_type->count_id}}">


                                        <input name="fit_type[]" type="checkbox" id="{{$fit_type->count_slug}}{{$fit_type->count_id}}" value="{{$fit_type->count_id}}" class="px-2 size-checkbox filterInput {{$fit_type->count_slug}}"  onchange="submitForm('','{{$fit_type->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->fit_type) && in_array($fit_type->count_id, $request_data->fit_type) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$fit_type->count_name}}"class="px-2 size-label" class="">{{$fit_type->count_name}} ({{$fit_type->total_count}})</label>
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                          <!-- mobile material filter -->
                          <?php 
                          if(isset($all_counts['material']) &&  !(isset($all_counts['material'][0])  && count($all_counts['material']) == 1   && $all_counts['material'][0]->count_name == "Unspecified" && $all_counts['material'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-material" aria-expanded="false" aria-controls="mob-cat-material">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>MATERIAL</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-material">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['material'] as $material)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($material->count_name)}}" data-option-value="vt::Dresses::Material::{{$material->count_name}}" data-available="{{$material->count_id}}">


                                        <input name="material[]" type="checkbox" id="{{$material->count_slug}}{{$material->count_id}}" value="{{$material->count_id}}" class="px-2 size-checkbox filterInput {{$material->count_slug}}"  onchange="submitForm('','{{$material->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->material) && in_array($material->count_id, $request_data->material) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$material->count_name}}"class="px-2 size-label" class="">{{$material->count_name}} ({{$material->total_count}})</label>
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                          <!-- mobile neckline filter -->
                          <?php 
                          if(isset($all_counts['neckline']) &&  !(isset($all_counts['neckline'][0])  && count($all_counts['neckline']) == 1   && $all_counts['neckline'][0]->count_name == "Unspecified" && $all_counts['neckline'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-neckline" aria-expanded="false" aria-controls="mob-cat-neckline">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>NECKLINE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-neckline">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['neckline'] as $neckline)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($neckline->count_name)}}" data-option-value="vt::Dresses::Neckline::{{$neckline->count_name}}" data-available="{{$neckline->count_id}}">


                                        <input name="neckline[]" type="checkbox" id="{{$neckline->count_slug}}{{$neckline->count_id}}" value="{{$neckline->count_id}}" class="px-2 size-checkbox filterInput {{$neckline->count_slug}}"  onchange="submitForm('','{{$neckline->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->neckline) && in_array($neckline->count_id, $request_data->neckline) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$neckline->count_name}}"class="px-2 size-label" class="">{{$neckline->count_name}} ({{$neckline->total_count}})</label>
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                          <!-- mobile patern filter -->
                          <?php 
                          if(isset($all_counts['pattern']) &&  !(isset($all_counts['pattern'][0])  && count($all_counts['pattern']) == 1   && $all_counts['pattern'][0]->count_name == "Unspecified" && $all_counts['pattern'][0]->total_count <1)){
                          ?>
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
                                  <?php $i=0; ?>

                                  @foreach($all_counts['pattern'] as $pattern)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($pattern->count_name)}}" data-option-value="vt::Dresses::Pattern::{{$pattern->count_name}}" data-available="{{$pattern->count_id}}">

                                        <input name="pattern[]" type="checkbox" id="{{$pattern->count_slug}} {{$pattern->count_id}}" value="{{$pattern->count_id}}" class="px-2 size-checkbox filterInput {{$pattern->count_slug}}"  onchange="submitForm('','{{$pattern->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->pattern) && in_array($pattern->count_id, $request_data->pattern) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$pattern->count_name}}"class="px-2 size-label" class="">{{$pattern->count_name}} ({{$pattern->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>

                          
                          <!-- mobile sleeve type filter -->
                          <?php 
                          if(isset($all_counts['sleeve_type']) &&  !(isset($all_counts['sleeve_type'][0])  && count($all_counts['sleeve_type']) == 1   && $all_counts['sleeve_type'][0]->count_name == "Unspecified" && $all_counts['sleeve_type'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-sleeve_type" aria-expanded="false" aria-controls="mob-cat-sleeve_type">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>SLEEVE TYPE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-sleeve_type">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['sleeve_type'] as $sleeve_type)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($sleeve_type->count_name)}}" data-option-value="vt::Dresses::Sleeve Type::{{$sleeve_type->count_name}}" data-available="{{$sleeve_type->count_id}}">

                                        <input name="sleeve_type[]" type="checkbox" id="{{$sleeve_type->count_slug}}{{$sleeve_type->count_id}}" value="{{$sleeve_type->count_id}}" class="px-2 size-checkbox filterInput {{$sleeve_type->count_slug}}"  onchange="submitForm('','{{$sleeve_type->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->sleeve_type) && in_array($sleeve_type->count_id, $request_data->sleeve_type) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$sleeve_type->count_name}}"class="px-2 size-label" class="">{{$sleeve_type->count_name}} ({{$sleeve_type->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                         <!-- mobile sleeve length filter -->
                          <?php 
                          if(isset($all_counts['sleeve_length']) &&  !(isset($all_counts['sleeve_length'][0])  && count($all_counts['sleeve_length']) == 1   && $all_counts['sleeve_length'][0]->count_name == "Unspecified" && $all_counts['sleeve_length'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-sleeve_length" aria-expanded="false" aria-controls="mob-cat-sleeve_length">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>SLEEVE LENGTH</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-sleeve_length">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['sleeve_length'] as $sleeve_length)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($sleeve_length->count_name)}}" data-option-value="vt::Dresses::Sleeve Length::{{$sleeve_length->count_name}}" data-available="{{$sleeve_length->count_id}}">

                                        <input name="sleeve_length[]" type="checkbox" id="{{$sleeve_length->count_slug}}{{$sleeve_length->count_id}}" value="{{$sleeve_length->count_id}}" class="px-2 size-checkbox filterInput {{$sleeve_length->count_slug}}"  onchange="submitForm('','{{$sleeve_length->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->sleeve_length) && in_array($sleeve_length->count_id, $request_data->sleeve_length) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$sleeve_length->count_name}}"class="px-2 size-label" class="">{{$sleeve_length->count_name}} ({{$sleeve_length->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                          <!-- mobile embellishment filter -->
                          <?php 
                          if(isset($all_counts['embellishment']) &&  !(isset($all_counts['embellishment'][0])  && count($all_counts['embellishment']) == 1   && $all_counts['embellishment'][0]->count_name == "Unspecified" && $all_counts['embellishment'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-embellishment" aria-expanded="false" aria-controls="mob-cat-embellishment">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>EMBELLISHMENT</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-embellishment">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['embellishment'] as $embellishment)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($embellishment->count_name)}}" data-option-value="vt::Dresses::Embellishment::{{$embellishment->count_name}}" data-available="{{$embellishment->count_id}}">

                                        <input name="embellishment[]" type="checkbox" id="{{$embellishment->count_slug}}{{$embellishment->count_id}}" value="{{$embellishment->count_id}}" class="px-2 size-checkbox filterInput {{$embellishment->count_slug}}"  onchange="submitForm('','{{$embellishment->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->embellishment) && in_array($embellishment->count_id, $request_data->embellishment) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$embellishment->count_name}}"class="px-2 size-label" class="">{{$embellishment->count_name}} ({{$embellishment->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                          <!-- mobile character filter -->
                          <?php 
                          if(isset($all_counts['character']) &&  !(isset($all_counts['character'][0])  && count($all_counts['character']) == 1   && $all_counts['character'][0]->count_name == "Unspecified" && $all_counts['character'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-character" aria-expanded="false" aria-controls="mob-cat-character">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>CHARACTER</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-character">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['character'] as $character)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($character->count_name)}}" data-option-value="vt::Dresses::Character::{{$character->count_name}}" data-available="{{$character->count_id}}">

                                        <input name="character[]" type="checkbox" id="{{$character->count_slug}}{{$character->count_id}}" value="{{$character->count_id}}" class="px-2 size-checkbox filterInput {{$character->count_slug}}"  onchange="submitForm('','{{$character->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->character) && in_array($character->count_id, $request_data->character) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$character->count_name}}"class="px-2 size-label" class="">{{$character->count_name}} ({{$character->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                          <!-- mobile closure filter -->
                          <?php 
                          if(isset($all_counts['closure']) &&  !(isset($all_counts['closure'][0])  && count($all_counts['closure']) == 1   && $all_counts['closure'][0]->count_name == "Unspecified" && $all_counts['closure'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-closure" aria-expanded="false" aria-controls="mob-cat-closure">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>CLOUSRE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-closure">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['closure'] as $closure)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($closure->count_name)}}" data-option-value="vt::Dresses::Closure::{{$closure->count_name}}" data-available="{{$closure->count_id}}">

                                        <input name="closure[]" type="checkbox" id="{{$closure->count_slug}}{{$closure->count_id}}" value="{{$closure->count_id}}" class="px-2 size-checkbox filterInput {{$closure->count_slug}}"   onchange="submitForm('','{{$closure->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->closure) && in_array($closure->count_id, $request_data->closure) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$closure->count_name}}"class="px-2 size-label" class="">{{$closure->count_name}} ({{$closure->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                           <!-- mobile feature filter -->
                          <?php 
                          if(isset($all_counts['feature']) &&  !(isset($all_counts['feature'][0])  && count($all_counts['feature']) == 1   && $all_counts['feature'][0]->count_name == "Unspecified" && $all_counts['feature'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-feature" aria-expanded="false" aria-controls="mob-cat-feature">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>FEATURE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-feature">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['feature'] as $feature)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($feature->count_name)}}" data-option-value="vt::Dresses::Feature::{{$feature->count_name}}" data-available="{{$feature->count_id}}">

                                        <input name="feature[]" type="checkbox" id="{{$feature->count_slug}}{{$feature->count_id}}" value="{{$feature->count_id}}" class="px-2 size-checkbox filterInput {{$feature->count_slug}}"  onchange="submitForm('','{{$feature->count_slug}}','mobile')"  
                                           <?php if(isset($request_data->feature) && in_array($feature->count_id, $request_data->feature) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$feature->count_name}}"class="px-2 size-label" class="">{{$feature->count_name}} ({{$feature->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                           <!-- mobile occasion filter -->
                          <?php 
                          if(isset($all_counts['occasion']) &&  !(isset($all_counts['occasion'][0])  && count($all_counts['occasion']) == 1   && $all_counts['occasion'][0]->count_name == "Unspecified" && $all_counts['occasion'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-occasion" aria-expanded="false" aria-controls="mob-cat-occasion">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>OCCASION</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-occasion">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['occasion'] as $occasion)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($occasion->count_name)}}" data-option-value="vt::Dresses::Occasion::{{$occasion->count_name}}" data-available="{{$occasion->count_id}}">

                                        <input name="occasion[]" type="checkbox" id="{{$occasion->count_slug}}{{$occasion->count_id}}" value="{{$occasion->count_id}}" class="px-2 size-checkbox filterInput {{$occasion->count_slug}}"  onchange="submitForm('','{{$occasion->count_slug}}','mobile')"  
                                           <?php if(isset($request_data->occasion) && in_array($occasion->count_id, $request_data->occasion) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$occasion->count_name}}"class="px-2 size-label" class="">{{$occasion->count_name}} ({{$occasion->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                           <!-- mobile theme filter -->
                          <?php 
                          if(isset($all_counts['theme']) &&  !(isset($all_counts['theme'][0])  && count($all_counts['theme']) == 1   && $all_counts['theme'][0]->count_name == "Unspecified" && $all_counts['theme'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-theme" aria-expanded="false" aria-controls="mob-cat-theme">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>THEME</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-theme">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['theme'] as $theme)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($theme->count_name)}}" data-option-value="vt::Dresses::Occasion::{{$theme->count_name}}" data-available="{{$theme->count_id}}">

                                        <input name="theme[]" type="checkbox" id="{{$theme->count_slug}}{{$theme->count_id}}" value="{{$theme->count_id}}" class="px-2 size-checkbox filterInput {{$theme->count_slug}}"  onchange="submitForm('','{{$theme->count_slug}}','mobile')"  
                                           <?php if(isset($request_data->theme) && in_array($theme->count_id, $request_data->theme) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$theme->count_name}}"class="px-2 size-label" class="">{{$theme->count_name}} ({{$theme->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                           <!-- mobile cuff_style filter -->
                          <?php 
                          if(isset($all_counts['cuff_style']) &&  !(isset($all_counts['cuff_style'][0])  && count($all_counts['cuff_style']) == 1   && $all_counts['cuff_style'][0]->count_name == "Unspecified" && $all_counts['cuff_style'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-cuff_style" aria-expanded="false" aria-controls="mob-cat-cuff_style">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>CUFF STYLE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-cuff_style">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['cuff_style'] as $cuff_style)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($cuff_style->count_name)}}" data-option-value="vt::Dresses::Cuff Style::{{$cuff_style->count_name}}" data-available="{{$cuff_style->count_id}}">

                                        <input name="cuff_style[]" type="checkbox" id="{{$cuff_style->count_slug}}{{$cuff_style->count_id}}" value="{{$cuff_style->count_id}}" class="px-2 size-checkbox filterInput {{$cuff_style->count_slug}}"  onchange="submitForm('','{{$cuff_style->count_slug}}','mobile')"  
                                           <?php if(isset($request_data->cuff_style) && in_array($cuff_style->count_id, $request_data->cuff_style) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$cuff_style->count_name}}"class="px-2 size-label" class="">{{$cuff_style->count_name}} ({{$cuff_style->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>

 

                          <!-- mobile fastening type filter -->
                          <?php 
                          if(isset($all_counts['fastening_type']) &&  !(isset($all_counts['fastening_type'][0])  && count($all_counts['fastening_type']) == 1   && $all_counts['fastening_type'][0]->count_name == "Unspecified" && $all_counts['fastening_type'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-fastening_type" aria-expanded="false" aria-controls="mob-cat-fastening_type">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>FASTENING TYPE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-fastening_type">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['fastening_type'] as $fastening_type)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                      <li data-clickable-option-li="" class="m2 p-4">
                                        
                                        <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($fastening_type->count_name)}}" data-option-value="vt::Dresses::Fastening Type::{{$fastening_type->count_name}}" data-available="{{$fastening_type->count_id}}">

                                          <input name="fastening_type[]" type="checkbox" id="{{$fastening_type->count_slug}}{{$fastening_type->count_id}}" value="{{$fastening_type->count_id}}" class="px-2 size-checkbox filterInput {{$fastening_type->count_slug}}"  onchange="submitForm('','{{$fastening_type->count_slug}}','mobile')"  
                                             <?php if(isset($request_data->fastening_type) && in_array($fastening_type->count_id, $request_data->fastening_type) ){ ?> checked='checked' <?php }?> 
                                           >
                                          <label for="{{$fastening_type->count_name}}"class="px-2 size-label" class="">{{$fastening_type->count_name}} ({{$fastening_type->total_count}})</label>
                                        
                                        </div>

                                      </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>

                           <!-- mobile collar filter -->
                          <?php 
                          if(isset($all_counts['collar']) &&  !(isset($all_counts['collar'][0])  && count($all_counts['collar']) == 1   && $all_counts['collar'][0]->count_name == "Unspecified" && $all_counts['collar'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-collar" aria-expanded="false" aria-controls="mob-cat-collar">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>COLLAR</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-collar">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($all_counts['collar'] as $collar)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($collar->count_name)}}" data-option-value="vt::Dresses::Collar::{{$collar->count_name}}" data-available="{{$collar->count_id}}">

                                        <input name="collar[]" type="checkbox" id="{{$collar->count_slug}}{{$collar->count_id}}" value="{{$collar->count_id}}" class="px-2 size-checkbox filterInput {{$collar->count_slug}}"  onchange="submitForm('','{{$collar->count_slug}}','mobile')"  
                                           <?php if(isset($request_data->collar) && in_array($collar->count_id, $request_data->collar) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$collar->count_name}}"class="px-2 size-label" class="">{{$collar->count_name}} ({{$collar->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                                <!-- mobile season filter -->
                          <?php 
                          if(isset($other_counts['season']) &&  !(isset($other_counts['season'][0])  && count($other_counts['season']) == 1   && $other_counts['season'][0]->count_name == "Unspecified" && $other_counts['season'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                             
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-season" aria-expanded="false" aria-controls="mob-cat-season">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>COLLAR</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-season">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($other_counts['season'] as $season)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($season->count_name)}}" data-option-value="vt::Dresses::Season::{{$season->count_name}}" data-available="{{$season->count_id}}">

                                        <input name="season[]" type="checkbox" id="{{$season->count_slug}}{{$season->count_id}}" value="{{$season->count_id}}" class="px-2 size-checkbox filterInput {{$season->count_slug}}" onchange="submitForm('','{{$season->count_slug}}','mobile')" 
                                           <?php if(isset($request_data->season) && in_array($season->count_id, $request_data->season) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$season->count_name}}"class="px-2 size-label" class="">{{$season->count_name}} ({{$season->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                                  <!-- mobile garment_care filter -->
                          <?php 
                          if(isset($other_counts['garment_care']) &&  !(isset($other_counts['garment_care'][0])  && count($other_counts['garment_care']) == 1   && $other_counts['garment_care'][0]->count_name == "Unspecified" && $other_counts['garment_care'][0]->total_count <1)){
                          ?>
                            <div class="mob-filter-option w-100 mt-4">
                              <button class=" w-100 cat-filter-btn" type="button" data-toggle="collapse" data-target="#mob-cat-garment_care" aria-expanded="false" aria-controls="mob-cat-garment_care">
                                <div class="d-flex justify-content-between align-items-center px-5">
                                  <div>GARMENT CARE</div>
                                  <div><i class="fas fa-plus"></i></div>
                                </div>
                              </button>
                              
                              <div class="collapse w-100" id="mob-cat-garment_care">
                                <div class="card card-body cat-filter-card-body">

                                  <ul class="filter-option__items mob-size d-flex flex-wrap justify-content-start align-items-center" data-filter-options-items="">                                                              
                                  <?php $i=0; ?>

                                  @foreach($other_counts['garment_care'] as $garment_care)
                                  
                                    @if($i >5)
                                      <?php  break; ?>
                                    @endif
                                    <?php $i++;?>
                                    
                                    <li data-clickable-option-li="" class="m2 p-4">
                                      
                                      <div class="newfilter-checkbox d-flex" data-clickable-option="" data-option-short-value="{{strtolower($garment_care->count_name)}}" data-option-value="vt::Dresses::Garment Care::{{$garment_care->count_name}}" data-available="{{$garment_care->count_id}}">

                                        <input name="garment_care[]" type="checkbox" id="{{$garment_care->count_slug}}" value="{{$garment_care->count_id}}" class="px-2 size-checkbox filterInput" onchange="submitForm('','{{$garment_care->count_slug}}')" onClick="addSizeItemToList(this.id)"
                                           <?php if(isset($request_data->garment_care) && in_array($garment_care->count_id, $request_data->garment_care) ){ ?> checked='checked' <?php }?> 
                                         >
                                        <label for="{{$garment_care->count_name}}"class="px-2 size-label" class="">{{$garment_care->count_name}} ({{$garment_care->total_count}})</label>
                                      
                                      </div>

                                    </li>

                                  @endforeach

                                  </ul>

                                </div>
                              </div>
                            </div>


                          <?php 
                          }
                          ?>


                        <!-- mobile nekline filter -->
                         <!--    <div class="mob-filter-option w-100 mt-4">
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
 -->
                            <!--end of mobile filters list -->

                          </div>

                        </div>

                      </div>

                    </div>
                  </div>

                    <!-- IF  size_type is selected -->
                    @if(isset($request_data->size_type) && $request_data->size_type !="")
                    <input type="hidden" value="{{$request_data->size_type}}" name="size_type" id="size_type" />
                    @endif

                </form>


            <div class="col-md-12 product__card__section" style="margin-top:10px">
                <!-- Selected Filter section  -->
                <div class="SelectedFilterArea mx-2 row">
                  <?php 
                  $to_show_filter = false;
                  ?>
                  <div class="col-lg-12 selectedFilterSection d-flex justify-content-start align-items-center flex-wrap
                  my-0" id="selectedFilterSection">
                    
                  <!-- selected Price Range -->
                   <?php if(isset($request_data->price_range)){  $to_show_filter = true; ?>
                      
                    <div onclick="removeFilter('','price_range')" for="Loose" class="filterItems">
                        <div id="sizeLoose" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                            <span class="pr-3">Price Range: {{$request_data->price_range}}</span>
                            <i class="fas fa-times pl-3"></i>
                        </div>
                    </div>

                    <?php } ?> 


                  <!-- selected Size Type -->
                     <?php if(isset($request_data->size_type)){  $to_show_filter = true; ?>
                      
                    <div onclick="removeFilter('','size_type')" for="Loose" class="filterItems">
                        <div id="size_type_remove" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                            <span class="pr-3">Size Type: {{$request_data->size_type}}</span>
                            <i class="fas fa-times pl-3"></i>
                        </div>
                    </div>

                    <?php } ?> 

                      <!-- selected Brands -->
                    <?php if(isset($brands) && count($brands)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($brands as $brand)
                       <div onclick="removeFilter('{{$brand->count_slug}}')" for="{{$brand->count_slug}}" class="filterItems">
                          <div id="{{$brand->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$brand->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?> 

                      <!-- selected Online Store -->
                     <?php if(isset($stores) && count($stores)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($stores as $store)
                       <div onclick="removeFilter('{{$store->count_slug}}')" for="{{$store->count_slug}}" class="filterItems">
                          <div id="{{$store->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$store->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?> 

                      <!-- selected Offer Type -->
                     <?php if(isset($offer_types) && count($offer_types)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($offer_types as $offer_type)
                       <div onclick="removeFilter('{{$offer_type->count_slug}}')" for="{{$offer_type->count_slug}}" class="filterItems">
                          <div id="{{$offer_type->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$offer_type->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?> 

                      <!-- selected Dress Style -->
                     <?php if(isset($dress_styles) && count($dress_styles)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($dress_styles as $dress_style)
                       <div onclick="removeFilter('{{$dress_style->count_slug}}')" for="{{$dress_style->count_slug}}" class="filterItems">
                          <div id="{{$dress_style->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$dress_style->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?> 


                     <!-- selected Dress Length -->
                     <?php if(isset($dress_lengths) && count($dress_lengths)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($dress_lengths as $dress_length)
                       <div onclick="removeFilter('{{$dress_length->count_slug}}')" for="{{$dress_length->count_slug}}" class="filterItems">
                          <div id="{{$dress_length->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$dress_length->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?> 

                     <!-- selected Pattern -->
                     <?php if(isset($patterns) && count($patterns)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($patterns as $pattern)
                       <div onclick="removeFilter('{{$pattern->count_slug}}')" for="{{$pattern->count_slug}}" class="filterItems">
                          <div id="{{$pattern->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$pattern->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?> 


                     <!-- selected Neckline -->
                     <?php if(isset($necklines) && count($necklines)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($necklines as $neckline)
                       <div onclick="removeFilter('{{$neckline->count_slug}}')" for="{{$neckline->count_slug}}" class="filterItems">
                          <div id="{{$neckline->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$neckline->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                    <!-- selected Material -->
                     <?php if(isset($materials) && count($materials)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($materials as $material)
                       <div onclick="removeFilter('{{$material->count_slug}}')" for="{{$material->count_slug}}" class="filterItems">
                          <div id="{{$material->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$material->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                    <!-- selected Sleeve Type -->
                     <?php if(isset($sleeve_types) && count($sleeve_types)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($sleeve_types as $sleeve_type)
                       <div onclick="removeFilter('{{$sleeve_type->count_slug}}')" for="{{$sleeve_type->count_slug}}" class="filterItems">
                          <div id="{{$sleeve_type->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$sleeve_type->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                     <!-- selected Sleeve Length -->
                     <?php if(isset($sleeve_lengths) && count($sleeve_lengths)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($sleeve_lengths as $sleeve_length)
                       <div onclick="removeFilter('{{$sleeve_length->count_slug}}')"  for="{{$sleeve_length->count_slug}}" class="filterItems">
                          <div id="{{$sleeve_length->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$sleeve_length->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                    <!-- selected Embellishment -->
                     <?php if(isset($embellishments) && count($embellishments)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($embellishments as $embellishment)
                       <div  onclick="removeFilter('{{$embellishment->count_slug}}')" for="{{$embellishment->count_slug}}" class="filterItems">
                          <div id="{{$embellishment->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$embellishment->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                     <!-- selected Garment Care -->
                     <?php if(isset($garment_cares) && count($garment_cares)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($garment_cares as $garment_care)
                       <div onclick="removeFilter('{{$garment_care->count_slug}}')" for="{{$garment_care->count_slug}}" class="filterItems">
                          <div id="{{$garment_care->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$garment_care->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                     <!-- selected Closure -->
                     <?php if(isset($closures) && count($closures)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($closures as $closure)
                       <div onclick="removeFilter('{{$closure->count_slug}}')" for="{{$closure->count_slug}}" class="filterItems">
                          <div id="{{$closure->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$closure->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>

                      <!-- selected Season -->
                     <?php if(isset($seasons) && count($seasons)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($seasons as $season)
                       <div for="{{$season->count_slug}}" class="filterItems">
                          <div id="{{$season->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$season->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>

                    
                    <!-- selected Fit Type -->
                     <?php if(isset($fit_types) && count($fit_types)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($fit_types as $fit_type)
                       <div onclick="removeFilter('{{$fit_type->count_slug}}')" for="{{$fit_type->count_slug}}" class="filterItems">
                          <div id="{{$fit_type->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$fit_type->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                    <!-- selected Feature -->
                    <?php if(isset($features) && count($features)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($features as $feature)
                       <div onclick="removeFilter('{{$feature->count_slug}}')" for="{{$feature->count_slug}}" class="filterItems">
                          <div id="{{$feature->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$feature->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                      <!-- selected Theme -->
                    <?php if(isset($themes) && count($themes)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($themes as $theme)
                       <div onclick="removeFilter('{{$theme->count_slug}}')" for="{{$theme->count_slug}}" class="filterItems">
                          <div id="{{$theme->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$theme->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                      <!-- selected Fastening Type -->
                    <?php if(isset($fastening_types) && count($fastening_types)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($fastening_types as $fastening_type)
                       <div onclick="removeFilter('{{$fastening_type->count_slug}}')" for="{{$fastening_type->count_slug}}" class="filterItems">
                          <div id="{{$fastening_type->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$fastening_type->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                    <!-- selected Cuff Style -->
                    <?php if(isset($cuff_styles) && count($cuff_styles)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($cuff_styles as $cuff_style)
                       <div onclick="removeFilter('{{$cuff_style->count_slug}}')" for="{{$cuff_style->count_slug}}" class="filterItems">
                          <div id="{{$cuff_style->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$cuff_style->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                     <!-- selected Character -->
                    <?php 

                    if(isset($characters) && count($characters)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($characters as $character)
                       <div onclick="removeFilter('{{$character->count_slug}}')" for="{{$character->count_slug}}" class="filterItems">
                          <div id="{{$character->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$character->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                    <!-- selected Collar -->
                    <?php if(isset($collars) && count($collars)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($collars as $collar)
                       <div  onclick="removeFilter('{{$collar->count_slug}}')"  for="{{$collar->count_slug}}" class="filterItems">
                          <div id="{{$collar->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$collar->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>

                     <!-- selected Sizes -->
                    <?php if(isset($sizes) && count($sizes)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($sizes as $size)
                       <div  onclick="removeFilter('{{$size->count_slug}}')"  for="{{$size->count_slug}}" class="filterItems">
                          <div id="{{$size->count_slug}}_filter" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$size->count_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>


                     <!-- selected Colors -->
                    <?php if(isset($color_maps) && count($color_maps)>0){ 
                      $to_show_filter = true;
                      ?>

                      @foreach($color_maps as $color)
                       <div  onclick="removeFilter('{{$color->color_map_slug}}')"  for="{{$color->color_map_slug}}" class="filterItems">
                          <div id="{{$color->color_map_slug}}" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
                              <span class="pr-3">{{$color->color_name}}</span>
                              <i class="fas fa-times pl-3"></i>
                          </div>
                      </div>

                      @endforeach

                    <?php } ?>

                

                </div>

                    <div id="clearAllButton" class=" mx-2 my-auto d-none" 

                      <?php if($to_show_filter){ ?>
                        style="display:  block !important;background: none"                        
                      <?php }else{ ?>
                        style="display: none !important;background: none"
                      <?php } ?>

                    >
                     <a href="{{$_SERVER['PATH_INFO']}}"> 
                      <p onClick="clearAll()" class=" btn btn-danger m-0" style="pointer: coursor;">ClearAll</p>
                     </a>
                    </div>

                  </div>

                  <!-- Product Listing Here -->
                  @include('products.products_listing')
              </div>

            </div>



          </div>