<span onclick="hideModalById('modal_product_price_history')" style="float: right;
	cursor: pointer;
	color: #000; " >
	<i style="font-size: 21px;" class="fas fa-times"></i>
</span>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


@if(isset($categories) && count($categories)>1)
<div class="row">
	<div id="content" class="col-md-12 ">
		<h2>Price History</h2>
		<hr/>
		
		<div style="">
		 <canvas id="priceComparison" style=""></canvas>
		</div>
	
	</div>


</div>
<cetner>
<div class="row " style="text-align: center" >
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6" style="margin-top: 20px">
		
			Highest
			<br/>
			${{$data['highest_price']}} ({{$data['highest_date']}})
		
	</div>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6" style="margin-top: 20px">
		
			Lowest
			<br/>
			${{$data['lowest_price']}} ({{$data['lowest_date']}})

	</div>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6" style="margin-top: 20px">
		
			Current Price
			<br/>
			<span style="color:red;font-weight: bold">
				${{$data['price_today']}}
			</span>
	
	</div>
</div>
</cetner>
<br/><br/>
<p>
	Note: Prices do not reflect promotions which discount on checkout.
</p>

@else
<div class="row" >
	<div class="col-md-12" style="height: 100px">
		<h2>Price History</h2>
		<hr/>
		<br/>
		<center>
			<h4 style="font-weight: 600">
				Price history not available.
			</h4>
		</center>
	</div>
</div>
@endif
<script>
  const labels = [
    @foreach($categories as $category)
    '{{$category}}',
    @endforeach
  ];

  const data = {
    labels: labels,
    datasets: [
    {
      label: 'Price',
      backgroundColor: '#f44836fa',
      borderColor: '#f44836fa',
      data: [
       @foreach(array_reverse($data['sale_price']) as $price)
       {{$price}},
       @endforeach ],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {
    	responsive:true,
    	 plugins: {
            title: {
                display: true,
                 padding: {
                    top: 10,
                    bottom: 30
                },
                 font: {
                        size: 16
                    },
                text: '{{$product_name->name}}'
            },   

            tooltip: {
              	  displayColors: false,
              	callbacks: {
                  label: function(context) {
                      var label = context.dataset.label || '';
                      if (context.parsed.y !== null) {
                          label = ' $' +context.parsed.y;
                      }
                      return label;
                  }
              }
          }
        },
         scales: {
          y: {
          	min:0,
            ticks: {
              stepSize: 20,
              callback: function (value, index, values) {
                return "$"+value ;
              }
            }
          }
        },
    }
  };

   const myChart = new Chart(
    document.getElementById('priceComparison'),
    config
  );
</script>