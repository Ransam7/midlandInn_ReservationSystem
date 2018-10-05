@extends('layouts.app')

@section('content')

<header id="header">
            <div class="container app">

              <div id="logo" class="pull-left">
                <a href="#hero"><img src="{{asset('')}}" alt="" title="" /></img>MidLand Inn</a>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="#hero">Regna</a></h1>-->
              </div>

              <nav id="nav-menu-container">
        <ul class="nav-menu">
              <li class=""><a href="{{route('home')}}">Home</a></li>
      @guest          
              <li class="">
                  <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>

              <li class="menu-active">
                  <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
      @endguest
          
        </ul>
      </nav><!-- #nav-menu-container -->
              
            </div>
          </header><!-- #header -->

<div class="login_wrapper">
    @include('superAdmin.inc.messages')
    <div id="register" class="">
          <section class="login_content">
              
              <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h1>Create Account</h1>
                        <div>
                            <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}"  placeholder="First Name"  required autofocus>
                            @if ($errors->has('fname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div>
                            <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}"  placeholder="Last Name"  required autofocus>
                            @if ($errors->has('lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        <div>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Email Address" required>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div>
                            <input id="user_contact" type="text" class="form-control{{ $errors->has('user_contact') ? ' is-invalid' : '' }}" name="user_contact" value="{{ old('user_contact') }}"  placeholder="Contact"  required autofocus>
                            @if ($errors->has('user_contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_contact') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div>
                            <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}"  placeholder="Address"  required autofocus>
                            @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div>
                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}"  placeholder="Username"  required>
                            @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div>
                            <button type="submit" class="btn btn-default submit">{{ __('Register') }}</button>
                        </div>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
</div>
@endsection
