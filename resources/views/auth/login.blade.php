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
              <li class="menu-active">
                  <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>

              <li class="">
                  <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
      @endguest
          
        </ul>
      </nav><!-- #nav-menu-container -->
              
            </div>
          </header><!-- #header -->  

    <div class="login">
        <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
                        @csrf
              <h1>Login Form</h1>
              <div>
                <!-- <input type="text" class="form-control" placeholder="Username" required="" /> -->
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              </div>

              <div>
                   <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif              
             </div>

              <div class="form-check">
                <button type="submit" class="btn btn-default submit">{{ __('Login') }}</button>
                <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Midland Inn!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
    </div>
</div>



@endsection
