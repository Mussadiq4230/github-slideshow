@extends('layouts.app')

@section('content')

<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/account">My Account</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          @if(Session::has('success_message'))
            <p class="alert alert-success alert-dismissible" role="alert">
              {{Session::get('success_message')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </p>
          @endif
          
          <div class="row">
            <div class="col-sm-3">
             @include('users.my_account_bar')
            </div>
            <div class="col-sm-9">

              @foreach (['danger', 'success','warning'] as $status)
                @if(Session::has($status))
                    <p class="alert alert-{{$status}} alert-dismissible" role="alert">{{ Session::get($status) }} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button></p>
                @endif
              @endforeach

              <form id="register-form" action="{{route('do_account_update')}}" method="post">
                 <h2 class="subtitle">Personal Info</h2>
                <div  class="row">
                  <div class="col-md-4 required  form-group">
                    <label class="control-label" for="input-first_name">First Name</label>
                    {!!$errors->first('first_name', '<p class="text-danger ">:message</p>') !!}
                    <input type="text" name="first_name" value="{{$account->first_name}}" placeholder="First Name" id="input-first_name" class="form-control" required="" />
                  </div>

                   <div class="col-md-4 required  form-group">
                    <label class="control-label" for="input-last_name">Last Name</label>
                    {!!$errors->first('last_name', '<p class="text-danger ">:message</p>') !!}
                    <input type="text" name="last_name" value="{{$account->last_name}}" placeholder="Last Name" id="input-last_name" class="form-control" required="" />
                  </div>

                  <div class="col-sm-4 form-group ">
                    <label for="input-email" class=" control-label">E-Mail</label>
                    {!!$errors->first('email', '<p class="text-danger ">:message</p>') !!}
                    <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="{{$account->email}}" name="email"  disabled="" readonly="">
                  </div>  
                
                  <div class="col-md-8 form-group required">
                    <label class=" control-label">Gender</label>
                    <br/>
                    {!!$errors->first('gender', '<p class="text-danger ">:message</p>') !!}
                    <label class="radio-inline">
                        <input type="radio" value="Female" name="gender"  @if($account->gender == 'Female') checked='checked' @endif>
                        Female
                    </label>
                      <label class="radio-inline">
                        <input type="radio" value="Male" name="gender" @if($account->gender == 'Male') checked='checked' @endif>
                        Male
                    </label>
                   
                    <label class="radio-inline">
                        <input type="radio"  value="Other" name="gender" @if($account->gender == 'Other') checked='checked' @endif>
                        Prefer not to mention.
                    </label>
                  </div>

                  <div class="col-md-4 form-group required">
                    <label for="input-date_of_birth" class="control-label">Date of Birth</label>
                    {!!$errors->first('date_of_birth', '<p class="text-danger">:message</p>') !!}
                    <input type="date" class="form-control" id="input-date_of_birth" placeholder="Date of Birth" value="{{$account->date_of_birth}}" name="date_of_birth" required="">
                  </div>

                </div>

                <br/>

                <h2 class="subtitle">Address Details</h2>
                <div class="row">

                    <div class="form-group col-md-4 ">
                      <label for="input-state" class="control-label">State</label>
                      <input type="text" class="form-control" id="input-state" placeholder="State" value="{{$account->state}}" name="state">                    
                    </div>

                    <div class="form-group col-md-4 ">
                      <label for="input-city" class="control-label">City</label>
                      <input type="text" class="form-control" id="input-city" placeholder="City" value="{{$account->city}}" name="city">                    
                    </div>

                    <div class="form-group col-md-4 ">
                      <label for="input-zip_code" class="control-label">Zip Code</label>
                      <input type="text" class="form-control" id="input-zip_code" placeholder="Zip Code" value="{{$account->zip_code}}" name="zip_code">                    
                    </div>

                    <div class="form-group col-md-12">
                      <label for="input-address" class="control-label">Street Address</label>
                      <input type="text" class="form-control" id="input-address" placeholder="Street Address" value="{{$account->street_address}}" name="street_address">
                    </div>
                  </div>
                  
                  <br/>

                  <h2 class="subtitle">Change Password</h2>
                  <div class="row">

                     <div class="form-group col-md-4">
                      <label for="input-current_password" class="control-label">Current Password</label>
                      {!!$errors->first('current_password', '<p class="text-danger" role="alert">:message</p>') !!}
                      <input type="password" class="form-control" id="input-current_password" placeholder="Current Password" value="" name="current_password" >
                    </div>

                    <div class="form-group col-md-4">
                      <label for="input-password" class="control-label">Password</label>
                      {!!$errors->first('password', '<p class="text-danger" role="alert">:message</p>') !!}
                      <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password" >
                    </div>

                    <div class="form-group col-md-4">
                      <label for="input-confirm" min="6" title="Minimum 6 Characters Required" class="control-label">Password Confirm</label>    
                      <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="" min="6" title="Minimum 6 Characters Required"  name="password_confirmation" >
                    </div>
                  </div>
                  <input type="hidden" name="update_id" value={{$account->id}} />

                  {!! csrf_field() !!}
                  <br/>
                <div class="row">
                  <div class="col-md-4">
                    <input type="submit" value="Save Changes" class="btn btn-primary" />
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
       
      </div>    
    </div>
  </div>
@endsection