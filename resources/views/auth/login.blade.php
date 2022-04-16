@extends('layouts.auth')


@section('content')
    <div class="bg order-1 order-md-2" style="background-image: url('{{ 'assets' }}/auth/images/bg_1.jpg');">
    </div>
    <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <div class="mb-4">
                        <h3>Sign In</h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                            adipisicing. @if (Auth::guest())
                                do this
                            @else
                                do that
                            @endif
                        </p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group first">
                            <label for="username">Username</label>
                            <input type="email" name="user_email" class="form-control" id="username">
                        </div>
                        @error('user_email')
                            <p class="text-danger">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        <div class="form-group last mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password">

                        </div>
                        @error('password')
                            <p class="text-danger">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror

                        <div class="d-flex mb-5 align-items-center">
                            <label class="control control--checkbox mb-0"><span class="caption">Remember
                                    me</span>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />
                                <div class="control__indicator"></div>
                            </label>
                            <span class="ml-auto">
                                <a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password</a>
                            </span>
                        </div>

                        <input type="submit" value="Log In" class="btn btn-block btn-primary">

                        {{-- <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span> --}}

                        {{-- <div class="social-login">
                            <a href="#" class="facebook btn d-flex justify-content-center align-items-center">
                                <span class="icon-facebook mr-3"></span> Login with Facebook
                            </a>
                            <a href="#" class="twitter btn d-flex justify-content-center align-items-center">
                                <span class="icon-twitter mr-3"></span> Login with Twitter
                            </a>
                            <a href="#" class="google btn d-flex justify-content-center align-items-center">
                                <span class="icon-google mr-3"></span> Login with Google
                            </a>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
