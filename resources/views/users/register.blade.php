@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css"  href="{{asset('css/user.css')}}" />

<div id="container">
    <div class="container">

      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/login">Login</a></li>
      </ul>
      <!-- Breadcrumb End-->

      <div class="row">
        <!--Middle Part Start-->
      @foreach (['danger', 'success'] as $status)
  			@if(Session::has($status))
  			    <p class="alert alert-{{$status}}">{{ Session::get($status) }}</p>
  			@endif
  		@endforeach

        <div class="col-sm-9" id="content">
          <h1 class="title">Register Account</h1>
        	<form id="register-form" class="form-horizontal" action="{{route('do_registration')}}" method="post">
            <fieldset id="account">
              <legend>Your Personal Details</legend>
             <!--  <div style="display: none;" class="form-group required">
                <label class="col-sm-2 control-label">Customer Group</label>
                <div class="col-sm-10">
                  <div class="radio">
                    <label>
                      <input type="radio" checked="checked" value="1" name="customer_group_id">
                      Default</label>
                  </div>
                </div>
              </div> -->
              <div class="form-group required">
                <label for="input-firstname" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-5">
                	{!!$errors->first('first_name', '<p class="alert alert-danger alert-dismissible" role="alert">:message
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</p>') !!}
                  <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="{{old('first_name')}}" name="first_name" required="">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-lastname" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-5">
                	{!!$errors->first('last_name', '<p class="alert alert-danger alert-dismissible" role="alert">:message
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</p>') !!}
                  <input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="{{old('last_name')}}" name="last_name" required="">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-5">
                	{!!$errors->first('email', '<p class="alert alert-danger alert-dismissible" role="alert">:message
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</p>') !!}
                  <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="{{old('email')}}" name="email"  required="">
                </div>
              </div>  
              <div class="form-group required">
                <label class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                	{!!$errors->first('gender', '<p class="alert alert-danger alert-dismissible" role="alert">:message
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</p>') !!}
                	 <label class="radio-inline">
                    	<input type="radio" value="Female" name="gender"  @if(old('gender')=='Female') checked @endif>
                    	Female
                	</label>
                  	<label class="radio-inline">
                    	<input type="radio" value="Male" name="gender" @if(old('gender')=='Male') checked @endif>
                    	Male
                	</label>
                 
                	<label class="radio-inline">
                    	<input type="radio"  value="Other" name="gender" @if(old('gender')=='Other') checked @endif>
                    	Prefer not to mention.
                	</label>
                </div>
              </div>
              <div class="form-group required">
                <label for="input-date_of_birth" class="col-sm-2 control-label">Date of Birth</label>
                <div class="col-sm-3">
                	{!!$errors->first('date_of_birth', '<p class="alert alert-danger alert-dismissible" role="alert">:message
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</p>') !!}
                  <input type="date" class="form-control" id="input-date_of_birth" placeholder="Date of Birth" value="{{old('date_of_birth')}}" name="date_of_birth" required="">
                </div>
              </div>

            
              
            </fieldset>
            
            <fieldset>
            	<legend>Address Details</legend>

            	<div class="form-group ">
            		<label for="input-state" class="col-sm-2 control-label">State</label>
	                <div class="col-sm-3">
	                  <input type="text" class="form-control" id="input-state" placeholder="State" value="{{old('state')}}" name="state">
	                </div>
            	</div>

            	<div class="form-group ">
            		<label for="input-city" class="col-sm-2 control-label">City</label>
	                <div class="col-sm-4">
	                  <input type="text" class="form-control" id="input-city" placeholder="City" value="{{old('city')}}" name="city">
	                </div>
            	</div>

            	<div class="form-group ">
            		<label for="input-zip_code" class="col-sm-2 control-label">Zip Code</label>
	                <div class="col-sm-3">
	                  <input type="text" class="form-control" id="input-zip_code" placeholder="Zip Code" value="{{old('zip_code')}}" name="zip_code">
	                </div>
            	</div>

            	<div class="form-group ">
            		<label for="input-address" class="col-sm-2 control-label">Street Address</label>
	                <div class="col-sm-10">
	                  <input type="text" class="form-control" id="input-address" placeholder="Street Address" value="{{old('street_address')}}" name="street_address">
	                </div>
            	</div>

            	
            </fieldset>
            
            <fieldset>
              <legend>Your Password</legend>
              <div class="form-group required">
                <label for="input-password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-5">
                	{!!$errors->first('password', '<p class="alert alert-danger alert-dismissible" role="alert">:message
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</p>') !!}
                  <input type="password" class="form-control" id="input-password" placeholder="Password" value="{{old('password')}}" name="password" required="">
                </div>
              </div>
              <div class="form-group required">

                <label for="input-confirm" min="6" title="Minimum 6 Characters Required" class="col-sm-2 control-label">Password Confirm</label>
                <div class="col-sm-5">
                  	
                  	<input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="{{old('password_confirmation')}}" min="6" title="Minimum 6 Characters Required"  name="password_confirmation" required="">
                </div>
              </div>
              {!! csrf_field() !!}
            </fieldset>
           <!--  <fieldset>
              <legend>Newsletter</legend>
              <div class="form-group">
                <label class="col-sm-2 control-label">Subscribe</label>
                <div class="col-sm-10">
                  <label class="radio-inline">
                    <input type="radio" value="1" name="newsletter">
                    Yes</label>
                  <label class="radio-inline">
                    <input type="radio" checked="checked" value="0" name="newsletter">
                    No</label>
                </div>
              </div>
            </fieldset> -->
            <div class="buttons">
              <div class="pull-right">
                <input type="checkbox" value="1" name="agree" required="">
                &nbsp;I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a> &nbsp;
                <input type="submit"  class="btn btn-primary" value="Continue">
              </div>
            </div>
          </form>
        </div>
        <!--Middle Part End -->
        <div class="col-sm-3 xs-hidden">
           	<h2 class="subtitle">Registered User?</h2>
          	<p><strong>Login to Account</strong></p>
          	<p>If you are already register please <a href="/login">login</a>.</p>
          	<a href="/login" class="btn btn-primary">Login</a> 
        </div>
      </div>

  </div>
</div>

@endsection