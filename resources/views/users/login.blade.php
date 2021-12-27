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
              @if(Session::has('success_message'))
                <p class="alert alert-success alert-dismissible" role="alert">
                  {{Session::get('success_message')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </p>
              @endif
              @if($errors->any())
                {{ implode('', $errors->all('<p class="alert alert-danger alert-dismissible" role="alert">:message
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </p>')) }}
              @endif
              <h2 class="subtitle">Returning Customer</h2>
              <p><strong>Already have an account?</strong></p>
              <form id="register-form" class="form-horizontal " action="{{route('do_login')}}" method="post">
                <div class=" form-group col-sm-12 required">
                  <label class="control-label" for="input-email">E-Mail Address</label>
                  <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" required="" />
                </div>
                <div class=" col-md-12 form-group required">
                  <label class="control-label" for="input-password">Password</label>
                  <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" required="" />
                  <br />
                  <a href="/forget_password">Forgotten Password</a>
                </div>
                {!! csrf_field() !!}
                <input type="submit" value="Login" class="btn btn-primary" />
              </form>
            </div>
          </div>
        </div>
       
      </div>    
    </div>
  </div>
@endsection