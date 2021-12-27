<span onclick="hideModalById('modal_product_alert')" style="float: right;
	cursor: pointer;
	color: #000;" >
	<i style="font-size: 21px;" class="fas fa-times"></i>
</span>

<div class="row " style="padding:10px">

	<div class="col-sm-12">
		<center>
			<h3 style="font-weight: normal;">Receive email alerts when the price drops for</h3>
			<h3 style="margin-top:15px;font-weight: bold">
				
				@if($type == 1)
					
					{{$product->name}}

				@elseif($type == 2)

					@if($parent_category && isset($parent_category->parent_category_name))

						{{$parent_category->parent_category_name}}

					@endif

					@if($our_category && isset($our_category->category_name))
						 > {{$our_category->category_name}}
					@endif

				@elseif($type == 3)

					@if($store)
						{{$store->store_name}}
					@endif
				@endif
			</h3>
		</center>
		<br/>
		
		@if(isset($product) && $type == 1)

			<div class="col-md-5">
				
				<img class="img-thumbnail" title="{{$product->name}}" alt="{{$product->name}}" src="{{$product->image}}">
				
			</div>
			<div class="col-md-7">
				<form method="post" id="save_alert_form" action="{{route('save_alert')}}">
				
					<label>Send me alerts on email</label>

					@if(Session::get('user'))	
						<div class="form-group">
							<input type="text" class="form-control" name="alert_email" value="{{Session::get('user')->email}}" placeholder="Email">
						</div>
						<br/>
						<input type="hidden" name="user_id" value="{{Session::get('user')->id}}" />
					@else
						<div class="form-group">
							<input type="text" class="form-control" name="alert_email" value="" placeholder="Email">
						</div>
						<br/>
						<p>
							<b>Note: </b> If you do not have an account. Setting this alert will create an account for you.
							You will get email with login details shortly.
						</p>

					@endif

					<input type="hidden" name="alert_type" value="Product"/>
					<input type="hidden" name="product_id" value="{{$product->id}}" />
					  {!! csrf_field() !!}
					<button type="button" class="btn btn-primary" onclick="save_alert('#save_alert_form')"> Set Alert </button>
					<br/><br/>
						<p>
							You can access your   
							<a href="/email_alerts">
								<b>Email Alerts</b>
							</a> 
							here.
						</p>
				</form>
			</div>

		@elseif(isset($store) && $type == 3)

			<div class="col-md-5">
			
				<img class="img-thumbnail" title="{{$store->store_name}}" alt="{{$store->store_name}}" src="/logos/<?=$store->store_logo?>">
		
			</div>
			<div class="col-md-7">
				<form method="post" id="save_alert_form" action="{{route('save_alert')}}">
				
					<label>Send me alerts on email</label>

					@if(Session::get('user'))	
						<div class="form-group">
							<input type="text" class="form-control" name="alert_email" value="{{Session::get('user')->email}}" placeholder="Email">
						</div>
						<br/>
						<input type="hidden" name="user_id" value="{{Session::get('user')->id}}" />
					@else
						<div class="form-group">
							<input type="text" class="form-control" name="alert_email" value="" placeholder="Email">
						</div>
						<br/>
						<p>
							<b>Note: </b> If you do not have an account. Setting this alert will create an account for you.
							You will get email with login details shortly.
						</p>

					@endif

					<input type="hidden" name="alert_type" value="Store"/>
					<input type="hidden" name="store_id" value="{{$store->id}}" />
					  {!! csrf_field() !!}
					<button type="button" class="btn btn-primary" onclick="save_alert('#save_alert_form')"> Set Alert </button>
					<br/><br/>
						<p>
							You can access your   
							<a href="/email_alerts">
								<b>Email Alerts</b>
							</a> 
							here.
						</p>
				</form>
			</div>

		@elseif($type == 2 && isset($our_category))

			<div class="col-md-12">
			<form method="post" id="save_alert_form" action="{{route('save_alert')}}">
			
				<label>Send me alerts on email</label>

				@if(Session::get('user'))	
					
					<div class="form-group col-sm-6 email_alert">
						<input type="text" class="form-control" id="alert_email" name="alert_email" value="{{Session::get('user')->email}}" placeholder="Email">
						
					</div>
					<div class="col-md-6">
						
					</div>
					<br/>
					<input type="hidden" name="user_id" value="{{Session::get('user')->id}}" />
				
				@else
					
					<div class="form-group col-sm-6 email_alert" >
						<input type="text" class="form-control" id="alert_email" name="alert_email" value="" placeholder="Email" required="">
					
					</div>
					<div class="col-md-6">
					
					</div>

					<br/>
					<div class="col-md-12">
						<p>
							<b>Note: </b> If you do not have an account. Setting this alert will create an account for you.
							You will get email with login details shortly.
						</p>
					</div>

				@endif
				<p style="display: none" id="alert_email_message" class="text-danger">Email is required!</p>
				<input type="hidden" name="alert_type" value="Category"/>
				<input type="hidden" name="our_category_id" value="{{isset($our_category->id) ? $our_category->id: ''}}" />
				<input type="hidden" name="parent_category_id" value="{{$parent_category->id}}" />
				  {!! csrf_field() !!}
				<button type="button" class="btn btn-primary" onclick="save_alert('#save_alert_form')"> Set Alert </button>
				<br/><br/>
					<p>
						You can access your   
						<a href="/email_alerts">
							<b>Email Alerts</b>
						</a> 
						here.
					</p>
			</form>
		</div>

		@endif

	</div>

</div>


