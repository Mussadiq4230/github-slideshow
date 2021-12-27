@extends('layouts.app')

@section('content')
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

<div class="row my-4 mx-3">
  <div class="col-md-12">
    <ul class="breadcrumb">
      <li><a href="/home"><i class="fa fa-home"></i></a></li>
      @foreach($breadcrumbs as $key=>$value)
      <li><a href="{{$key}}">{{$value}}</a></li>
      @endforeach
    </ul>
  </div>
</div>



<link rel="stylesheet" type="text/css" href="{{asset('css/filtersStyles.css')}}">
<script type="text/javascript" src="{{asset('js/categoryProduct.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/single__product.css')}}">


<div class=" d-flex flex-wrap mx-auto justify-content-center align-items-center mt-5">   

   <!-- option#01 -->
   <a href="/shop/{{$selected_offer->offer_type_slug}}" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
    <div class="searching__icons d-flex justify-content-center align-items-center">
      <!-- <i class="far fa-user fa-4x"></i> -->
      <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
    </div>
    <p class="mb-0 pt-3 searching__shortcuts__title text-center">All Genders</p>
  </a>

  <!-- option#01 -->
  <a href="/shop/women?offer_type%5B%5D={{$selected_offer->id}}" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
    <div class="searching__icons d-flex justify-content-center align-items-center">
      <!-- <i class="far fa-user fa-4x"></i> -->
      <img src="{{asset('image/icons/women.png')}}" alt="" style="height:100%;width:100%;">
    </div>
    <p class="mb-0 pt-3 searching__shortcuts__title text-center">Women</p>
  </a>

  <!-- option#01 -->
  <a href="/shop/men?offer_type%5B%5D={{$selected_offer->id}}" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
    <div class="searching__icons d-flex justify-content-center align-items-center">
      <!-- <i class="far fa-user fa-4x"></i> -->
      <img src="{{asset('image/icons/men.png')}}" alt="" style="height:100%;width:100%;">
    </div>
    <p class="mb-0 pt-3 searching__shortcuts__title text-center">Men</p>
  </a>

  <!-- option#01 -->
  <a href="/shop/girls?offer_type%5B%5D={{$selected_offer->id}}" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
    <div class="searching__icons d-flex justify-content-center align-items-center">
      <!-- <i class="far fa-user fa-4x"></i> -->
      <img src="{{asset('image/icons/girl.png')}}" alt="" style="height:100%;width:100%;">
    </div>
    <p class="mb-0 pt-3 searching__shortcuts__title text-center">Girls</p>
  </a>

  <!-- option#01 -->
  <a href="/shop/boys?offer_type%5B%5D={{$selected_offer->id}}" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
    <div class="searching__icons d-flex justify-content-center align-items-center">
      <!-- <i class="far fa-user fa-4x"></i> -->
      <img src="{{asset('image/icons/boy.png')}}" alt="" style="height:100%;width:100%;">
    </div>
    <p class="mb-0 pt-3 searching__shortcuts__title text-center">Boys</p>
  </a>

  <!-- option#01 -->
  <a href="/shop/baby-boys?offer_type%5B%5D={{$selected_offer->id}}" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
    <div class="searching__icons d-flex justify-content-center align-items-center">
      <!-- <i class="far fa-user fa-4x"></i> -->
      <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
    </div>
    <p class="mb-0 pt-3 searching__shortcuts__title text-center">Baby Boy</p>
  </a>

  <!-- option#01 -->
  <a href="/shop/baby-girls?offer_type%5B%5D={{$selected_offer->id}}" class="searching__shortcut d-flex flex-column justify-content-center align-items-center p-4 mr-3">
    <div class="searching__icons d-flex justify-content-center align-items-center">
      <!-- <i class="far fa-user fa-4x"></i> -->
      <img src="{{asset('image/icons/baby.png')}}" alt="" style="height:100%;width:100%;">
    </div>
    <p class="mb-0 pt-3 searching__shortcuts__title text-center">Baby Girl</p>
  </a>

</div>

<!-- Products Filter View  -->
@include('products.products_filter')




<script type="text/javascript">


  function  submitForm( filter="",value="", type=""){


    var tot_num_filters = 0;
    if(filter == "price_range"){
      $("#min_price").val("");
      $("#max_price").val("");
    }

    if(filter == "price"){
      $("input[name=price_range]").prop("checked",false);
    }



    if(type == "mobile"){

      if(tot_num_filters == 0 && filter !="price_range"){
         // $('#main_form_mobile').attr('action', '$form_url/'+value);
       }

       $("#main_form_mobile").submit();

     }else{

      if(tot_num_filters == 0 && filter !="price_range"){
         // $('#main_form').attr('action', '$form_url/'+value);
       }

       $("#main_form").submit();
     }
   }


   function hideModal2(){

    $("#mdoalallvalue").modal('hide');
  }

  function loadTabData(){

    let _token   = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
      url: "{{route('create_filter_modal_content')}}",
      type:"GET",
      data:{
        _token: _token,  request_data:<?php echo json_encode($request_data); ?>
      },
      success:function(response){

        if(response && response !="") {

          $("#content-div").html(response);
          $("#mdoalallvalue").modal('show');
        }
      },
    });
  }

  function removeFilter(class_name="",id=""){

    if(class_name !="" ){

      $('input:checkbox:checked.'+class_name).map(function(){

       this.checked=false;
     });

      $('#'+class_name+"_filter").remove();
      
    }else{

      if(id == 'size_type'){
       $("input[name=size_type]").val("");
       $('#size_type_remove').remove();

     }else{
       $("input[name=price_range]").prop("checked",false);
       $('#'+id).remove();
     }

   }

   $("#main_form").submit();
 }

 function clearAll()
 {
  let allOptions = document.querySelectorAll(".filterInput");
  allOptions.forEach(opt=>{
    opt.checked=false;
  })
  document.getElementById("selectedFilterSection").innerHTML ="";
  filterItemCount =0;
  showHideClearBtn();
}

</script>


@endsection


