@extends('layouts.app')
@section('content')

<div id="container">

    <div class="container">
		<!--Breadcrumbs-->
	 	<ul class="breadcrumb">
		    <li><a href="/home"><i class="fa fa-home"></i></a></li>
		  
		      <li><a href="/advance-search">Advance Search</a></li>
		
	  	</ul>

		<div class="row" style="margin-top: 50px">
			<div class="col-lg-12">
				<h3>
					Advance Search 
				</h3>
				<hr/>
			</div>
	        <div class="col-lg-3">
	            <div class="form-group">
                    <label class="control-label" for="parent_cateogry" style="font-weight: bold">Gender</label>
                    <select name="parent_category" id="parent_category" class="form-control search-select" required="">
                        <option value="">All Genders</option>

                        @foreach($parent_categories as $pc)
                        <option value="{{$pc->parent_category_slug}}">{{$pc->parent_category_name}} </option>
                        @endforeach
                    </select>
	            </div>
	        </div>
	        <div class="col-lg-12">
		        <div class=" row filter_data" id="filter_data">

		        </div>
		    </div>

			<!-- Products Listing View -->
			@include('products.products_listing')

		</div>

	</div>
</div>

<script type="text/javascript">
	
	 $("#parent_category").change(function(event){

      event.preventDefault();
      let parent_category_id = $("#parent_category").val();
      let _token = $("meta[name='csrf-token']").attr('content');

      $.ajax({
        url:"{{route('get_gender_filters')}}",
        type:"get",
        data:{
          parent_category_id : parent_category_id,
          _token : _token
        },
        success:function(response){
         	$("#filter_data").html(response);
        }

      });
  });
</script>

@endsection

