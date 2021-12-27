
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

<div class="col-lg-3" id="category_div">
  <div class="form-group">
    <label class="control-label" for="category_name" style="font-weight: bold">Select Category</label>
    <select name="category_name" id="category_name" class="search-select2 form-control" required="">
      <option value="">Select</option>
      @foreach($all_counts['our_cateogry'] as $category)
      <option value="{{$category->count_id}}">{{$category->count_name}} 
        @if($category->total_count >0)
        ({{$category->total_count}})
        @endif
      </option>
      @endforeach

    </select>
  </div>
</div>

<div class="col-lg-3" id="category_div">
  <div class="form-group">
    <label class="control-label" for="category_name" style="font-weight: bold">Select Online Store</label>
    <select name="category_name" id="category_name" class="search-select2 form-control" required="">
      <option value="">Select</option>
      @foreach($other_counts['store'] as $store)
      <option value="{{$store->count_id}}">{{$store->count_name}} 
        @if($store->total_count >0)
        ({{$store->total_count}})
        @endif
      </option>
      @endforeach

    </select>
  </div>
</div>

  <div class="col-lg-3" id="category_div">
  <div class="form-group">
    <label class="control-label" for="category_name" style="font-weight: bold">Select Brand</label>
    <select name="category_name" id="category_name" class="search-select2 form-control" required="">
      <option value="">Select</option>
      @foreach($other_counts['brand'] as $brand)
      <option value="{{$brand->count_id}}">{{$brand->count_name}} 
        @if($brand->total_count >0)
        ({{$brand->total_count}})
        @endif
      </option>
      @endforeach

    </select>
  </div>

  <div class="col-lg-3" id="category_div">
  <div class="form-group">
    <label class="control-label" for="category_name" style="font-weight: bold">Select Brand</label>
    <select name="category_name" id="category_name" class="search-select2 form-control" required="">
      <option value="">Select</option>
      @foreach($other_counts['color_map'] as $color_map)
      <option value="{{$color_map->count_id}}">{{$color_map->count_name}} 
        @if($color_map->total_count >0)
        ({{$color_map->total_count}})
        @endif
      </option>
      @endforeach
    </select>
  </div>
<script type="text/javascript">
    $(".search-select2").selectize({
          sortField: 'text'
      });
</script>