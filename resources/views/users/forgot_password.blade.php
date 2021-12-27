@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css"  href="{{asset('css/user.css')}}" />
<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/forget_password">Request New Password</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
        
          <h1 class="title">Account Login</h1>
          <div class="row">
            <div class="col-sm-6">
              <h2 class="subtitle">New User</h2>
              <p><strong>Register Account</strong></p>
              <p>By creating an account you will be able to add your favourite ads, whishlists, customized ads alerts.</p>
              <a href="/register" class="btn btn-primary">Continue</a> 
            </div>
            <div class="col-sm-6">

               @foreach (['danger', 'success','warning'] as $status)
                @if(Session::has($status))
                    <p class="alert alert-{{$status}} alert-dismissible" role="alert">{{ Session::get($status) }} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button></p>
                @endif
              @endforeach
              
              @if($errors->any())
                {{ implode('', $errors->all('<p class="alert alert-danger alert-dismissible" role="alert">:message
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </p>')) }}
              @endif
              <h2 class="subtitle">Request New Password</h2>
              <p><strong>Enter your registered email below.</strong></p>
              <form id="register-form" class="form-horizontal " action="{{route('change_password')}}" method="post">
              
                <div class="form-group required">
                  <label class="control-label" for="input-email">Email</label>
                  <input type="email" name="email" value="" placeholder="Registered Email" id="input-email" class="form-control" required="" />
                 
                </div>
                {!! csrf_field() !!}
                <input type="submit" value="Submit" class="btn btn-primary" />
              </form>
            </div>
          </div>
        </div>
       
      </div>    
    </div>
  </div>
@endsection