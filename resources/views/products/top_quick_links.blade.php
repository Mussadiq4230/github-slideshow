    <style>
       
       .searching__shortcut:hover .searching__icons,
       .searching__shortcut:hover .searching__shortcuts__title
       {
           color:blue;
       }
       .searching__shortcut:hover
       {
           border-bottom:2px solid blue;
           
       }
       .searching__shortcuts__title
       {
           font-size: 1.5rem;
           font-weight: 500;
           color:black;
       }
       .searching__icons
       {
           padding:15px;
       }
       .searching__icons
       {
           height:90px;
           width:90px;
       }
       .searching__icons2
       {
           height:90px;
           width:100px;
       }
       
  </style>
   

  <!--IF CATEGORY IS WOMEN -->
  @if(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == "women" && !isset($selected_our_category->category_slug))

    <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">
             
                  <!-- option#01 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/casual" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons d-flex justify-content-center align-items-center">
              <!-- <i class="far fa-user fa-4x"></i> -->
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Casual</p>
      </a>
                  <!-- option#02 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/cocktail" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Cocktail</p>
      </a>

                  <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/women" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Formal</p>
      </a>

      <!-- option#03 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/jumper" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Jumper</p>
      </a>

                                            <!-- option# baby -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/jumpsuits" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
              <!-- <img src="{{asset('image/icons/babyLine.png')}}" alt="" style="height:100%;width:100%;"> -->
              <!-- <i class="fas fa-baby fa-4x"></i> -->
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Jumpsuits</p>
      </a>

    </div>


  <!-- IF CATEGORY IS MEN -->
  @elseif(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == 'men' && !isset($selected_our_category->category_slug))

      <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">       
                    
        <!-- option#01 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/casual" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons d-flex justify-content-center align-items-center">
                <!-- <i class="far fa-user fa-4x"></i> -->
                <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Casual</p>
        </a>

        <!-- option#04 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/formal" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Formal</p>
        </a>

        <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/jumper" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Jumper</p>
        </a>
      
        <!-- option# baby -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/jumpsuits" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Jumpsuits</p>
        </a>

        <!-- option#02 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/suits-tuxedos" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Suits & Tuxedos</p>
        </a>

      </div>

      <!-- IF CATEGORY IS GIRLS -->
  @elseif(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == 'girls' && !isset($selected_our_category->category_slug))

      <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">       
                    
        <!-- option#01 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/formal" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons d-flex justify-content-center align-items-center">
                <!-- <i class="far fa-user fa-4x"></i> -->
                <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Formal</p>
        </a>

        <!-- option#04 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/casual" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Casual</p>
        </a>

        <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/party" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Party</p>
        </a>
      
        <!-- option# baby -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/flower-girl" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Flower Girl</p>
        </a>

        <!-- option#02 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/jumpsuits" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Jumpsuits</p>
        </a>

         <!-- option#02 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/jumper" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Jumper</p>
        </a>

      </div>


  <!-- IF CATEGORY IS BOYS -->
  @elseif(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == 'boys' && !isset($selected_our_category->category_slug))

      <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">       
       
        <!-- option#04 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/casual" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Casual</p>
        </a>

        <!-- option#01 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/formal" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons d-flex justify-content-center align-items-center">
                <!-- <i class="far fa-user fa-4x"></i> -->
                <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Formal</p>
        </a>

         <!-- option#02 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/jumper" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Jumper</p>
        </a>

        <!-- option#02 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/jumpsuits" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Jumpsuits</p>
        </a>

         <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/suits-tuxedos" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">Suits & Tuxedos</p>
        </a>
      

      </div>

  <!-- IF CATEGORY IS BABY BOYS -->
  @elseif(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == 'baby-boys' && !isset($selected_our_category->category_slug))

      <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">       
       
        <!-- option#04 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/new-born" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">New Born</p>
        </a>

        <!-- option#01 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/0-3-m" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons d-flex justify-content-center align-items-center">
                <!-- <i class="far fa-user fa-4x"></i> -->
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">0-3 m</p>
        </a>

         <!-- option#02 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/3-6-m" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">3-6 m</p>
        </a>

        <!-- option#02 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/6-9-m" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">6-9 m</p>
        </a>

         <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/12-18-m" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">12-18 m</p>
        </a>


         <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/18-24-m" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">18-24 m</p>
        </a>

         <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/2t" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">2t</p>
        </a>

         <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/3t" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">3t</p>
        </a>

         <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/4t" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">4t</p>
        </a>
      

      </div>

       <!-- IF CATEGORY IS BABY BOYS -->
  @elseif(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == 'baby-girls' && !isset($selected_our_category->category_slug))

    <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">       
       
        <!-- option#04 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/new-born" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">New Born</p>
        </a>

        <!-- option#01 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/0-3-m" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons d-flex justify-content-center align-items-center">
                <!-- <i class="far fa-user fa-4x"></i> -->
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">0-3 m</p>
        </a>

         <!-- option#02 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/3-6-m" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">3-6 m</p>
        </a>

        <!-- option#02 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/6-9-m" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">6-9 m</p>
        </a>

         <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/12-18-m" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">12-18 m</p>
        </a>


         <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/18-24-m" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">18-24 m</p>
        </a>

         <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/2t" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">2t</p>
        </a>

         <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/3t" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">3t</p>
        </a>

         <!-- option#03 -->
        <a href="/shop/{{$selected_parent_category->parent_category_slug}}/4t" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
            <div class="searching__icons  d-flex justify-content-center align-items-center">
                <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
            </div>
            <p class="mb-0 pt-3 searching__shortcuts__title text-center">4t</p>
        </a>
      
    </div>

     <!-- IF CATEGORY IS WOMEN AND CATEGORY IS SELECTED -->
  @elseif(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == 'women' && isset($selected_our_category->category_slug) && $selected_our_category->category_slug != "")

    <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">       
       
      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?size_type=petites" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Petite Size</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?size_type=regular" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Regular Size</p>
      </a>
      

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?size_type=tall" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Tall Size</p>
      </a>
      
       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?size_type=plus" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Plus Size</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=1" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Floor Length</p>
      </a>


        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=2" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">High Low</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=3" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Maxi</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=4" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Midi</p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=5" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Mini</p>
      </a>
      
       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?occasion%5B%5D=27" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Bridal</p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?occasion%5B%5D=30" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Evening Dress</p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?occasion%5B%5D=35" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Party</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?occasion%5B%5D=31" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Graduation</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?occasion%5B%5D=36" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Wedding</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?occasion%5B%5D=37" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Work</p>
      </a>

    </div>


      <!-- IF CATEGORY IS MEN AND CATEGORY IS SELECTED -->
  @elseif(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == 'men' && isset($selected_our_category->category_slug) && $selected_our_category->category_slug !="")

    <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">       
       
      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?fit_type%5B%5D=1" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Fitted</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?fit_type%5B%5D=2" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Loose</p>
      </a>
      

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?fit_type%5B%5D=3" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Straight</p>
      </a>
      
        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=11" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Regular</p>
      </a>


        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=13" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Tall</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=12" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Short</p>
      </a>

      
       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=53" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">2 Piece Suit</p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=54" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">3 Piece Suit</p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=56" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Dressing Gown</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=57" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Swimwear</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=58" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Tracksuit</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?occasion%5B%5D=15" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Club/Night Out</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?occasion%5B%5D=16" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Holiday</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?occasion%5B%5D=17" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Lounge</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?occasion%5B%5D=18" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Party</p>
      </a>

    </div>


     <!-- IF CATEGORY IS BABY GIRLS AND CATEGORY IS NEW BORN, 0-3 M, 3-6 M, 6-9 M, 9-12 M, 12-18 M, 18-24 M, 2t, 3t, 4t -->
  @elseif(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == 'baby-girls' && isset($selected_our_category->category_slug) && $selected_our_category->category_slug !="" )

    <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">       
       
      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=62" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">A-line</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=63" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Babygrow</p>
      </a>
      

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=64" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Bodycon</p>
      </a>
      
        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=65" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Fit & Flare</p>
      </a>


        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=66" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Gown</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=72" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">One-piece</p>
      </a>

      
       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?embellishment%5B%5D=29" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Ruffles</p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?collar%5B%5D=54" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Frilled Collar </p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?collar%5B%5D=56" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Round Collar</p>
      </a>

    </div>


     <!-- IF CATEGORY IS BABY BOYS AND CATEGORY IS NEW BORN, 0-3 M, 3-6 M, 6-9 M, 9-12 M, 12-18 M, 18-24 M, 2t, 3t, 4t -->
  @elseif(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == 'baby-boys' && isset($selected_our_category->category_slug) &&  $selected_our_category->category_slug !="")

    <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">       
       
      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=62" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">A-line</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=63" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Babygrow</p>
      </a>
      

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=64" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Bodycon</p>
      </a>
      
        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=65" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Fit & Flare</p>
      </a>


        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=66" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Gown</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=72" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">One-piece</p>
      </a>

      
       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?embellishment%5B%5D=29" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Ruffles</p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?collar%5B%5D=54" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Frilled Collar </p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?collar%5B%5D=56" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Round Collar</p>
      </a>

    </div>

    <!-- IF CATEGORY IS GIRLS AND CATEGORY IS SELECTED -->
  @elseif(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == 'girls' && isset($selected_our_category->category_slug) && $selected_our_category->category_slug !="")

    <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">       
       
      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?collar%5B%5D=27" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Frilled Collar</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?collar%5B%5D=28" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Rounded Collar</p>
      </a>
      

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?collar%5B%5D=29" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Turn-down Collar</p>
      </a>
      
        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=6" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Floor Length</p>
      </a>


        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=7" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">High Low</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=8" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Maxi</p>
      </a>

      
       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=9" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Midi</p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=10" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Mini</p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=28" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">A-line</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?material%5B%5D=59" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Silk</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?material%5B%5D=43" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Cotton</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?neckline%5B%5D=40" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">V Neck</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?neckline%5B%5D=34" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Round Neck</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?size_type=regular" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Regular Size</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?size_type=petites" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Petite Size</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?size_type=tall" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Tall Size</p>
      </a>


        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?size_type=plus" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Plus Size</p>
      </a>

    </div>


      <!-- IF CATEGORY IS BOYS AND CATEGORY IS SELECTED -->
  @elseif(isset($selected_parent_category->parent_category_slug) && $selected_parent_category->parent_category_slug == 'boys' && isset($selected_our_category->category_slug) && $selected_our_category->category_slug !="")

    <div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">       
       
      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=34" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Regular</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=35" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Short</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_length%5B%5D=36" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Tall</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=76" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">2 Piece Set</p>
      </a>

          <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=77" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">3 Piece Set</p>
      </a>

          <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=81" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Outfit & Sets</p>
      </a>

          <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=82" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Overall</p>
      </a>

            <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=83" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Tracksuit</p>
      </a>

         <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=84" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Tuxedo</p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?dress_style%5B%5D=85" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Swimsuit</p>
      </a>

      <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?feature%5B%5D=24" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">All Seasons</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?feature%5B%5D=27" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Easy Care</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?feature%5B%5D=28" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Hooded</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?feature%5B%5D=30" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Lightweight</p>
      </a>

       <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?feature%5B%5D=32" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Quick Dry</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?feature%5B%5D=35" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Stretch</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?feature%5B%5D=36" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Waster Resistance</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?fit_type%5B%5D=32" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Quick Dry</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?fit_type%5B%5D=4" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Loose</p>
      </a>

        <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?fit_type%5B%5D=5" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Oversized</p>
      </a>

         <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?fit_type%5B%5D=6" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Regular</p>
      </a>

         <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?fit_type%5B%5D=7" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Relaxed</p>
      </a>

         <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?fit_type%5B%5D=8" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Skinny</p>
      </a>

         <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?fit_type%5B%5D=9" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Slim</p>
      </a>

           <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?material%5B%5D=165" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Cotton</p>
      </a>

         <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?material%5B%5D=188" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Polyester</p>
      </a>

          <!-- option#04 -->
      <a href="/shop/{{$selected_parent_category->parent_category_slug}}/{{$selected_our_category->category_slug}}?material%5B%5D=177" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
          <div class="searching__icons  d-flex justify-content-center align-items-center">
              <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
          </div>
          <p class="mb-0 pt-3 searching__shortcuts__title text-center">Fleece</p>
      </a>



  @endif
