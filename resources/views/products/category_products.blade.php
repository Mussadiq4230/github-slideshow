        <!-- ########          Brief Description of this page ########  -->
          <!-- 1 topBanner (styles in single__product.css)
          2 Filter Section (styles in filterStyles.css page)
          3 selected Filter Items and clear button (styles in filterStyles.css and javascript in categoryProduct.js) 
          4 single product cards (styles in single__product.css)
          5 icons this code used some icons (path: public\image\icons)
          6 images (path: '../image/banner/bannerImg.jpg')              -->


  @extends('layouts.app')
  @section('content')
  <div class="row my-4 mx-3">
    <div class="col-md-8">
     <ul class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i></a></li>
        @foreach($breadcrumbs as $key=>$value)
          <li><a href="{{$key}}">{{$value}}</a></li>
        @endforeach
      </ul>
    </div>
    <div class="col-md-4">
      @if($selected_id && $selected_id !="")
        <button class="btn btn-primary" type="button" style="float: right !important" onclick="setCategoryAlert('{{$selected_id}}','{{$nature}}')">
          <i class="fa fa-bell"></i> Set Alert For {{$selected}}
        </button>
      @endif
    </div>
  </div>

  <!-- Top Quick Links View -->
  @include('products.top_quick_links')


  <link rel="stylesheet" type="text/css" href="{{asset('css/filtersStyles.css')}}">
  <script type="text/javascript" src="{{asset('js/categoryProduct.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/single__product.css')}}">

  <!-- Products Filter View -->
  @include('products.products_filter')




  <script type="text/javascript">

    var tot_num_filters = '{{$total_num_filters}}';


    function  submitForm( filter="",value="", type=""){

      

      if(filter == "price_range"){
        $("#min_price").val("");
        $("#max_price").val("");
      }

      if(filter == "price"){
        $("input[name=price_range]").prop("checked",false);
      }

     

      if(type == "mobile"){

        if(tot_num_filters == 0 && filter !="price_range"){
         $('#main_form_mobile').attr('action', '{{$form_url}}/'+value);
        }

       $("#main_form_mobile").submit();

      }else{

        if(tot_num_filters == 0 && filter !="price_range"){
         $('#main_form').attr('action', '{{$form_url}}/'+value);
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


