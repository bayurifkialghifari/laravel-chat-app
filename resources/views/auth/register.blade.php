@extends('layouts.auth')

@section('content')
    <div class="bg order-2 order-md-1" style="background-image: url('{{ 'assets' }}/auth/images/bg_1.jpg');">
    </div>
    <div class="contents order-1 order-md-2">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <div class="mb-4">
                        <h3>Sign Up</h3>
                        <p class="mb-4">Join us today.
                        </p>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group first">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username">

                        </div>
                        @error('username')
                            <p class="text-danger">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror

                        <div class="form-group last mb-3">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" class="form-control" id="phone">

                        </div>
                        @error('phone')
                            <p class="text-danger">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror

                        <div class="form-group first">
                            <label for="email">Email</label>
                            <input type="email" name="user_email" class="form-control" id="email">
                        </div>

                        @error('user_email')
                            <p class="text-danger">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror

                        <div class="form-group first">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password">

                        </div>
                        @error('password')
                            <p class="text-danger">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror

                        <div class="form-group last mb-3">
                            <label for="password_confirmation">Repeat Password</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                id="password_confirmation">

                        </div>

                        <input type="submit" value="Register" class="btn btn-block btn-danger">

                        <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>

                        <div class="social-login">
                            <p> Already have an account ?</p>
                            <a href="{{ route('login') }}"
                                class="btn btn-block btn-primary d-flex justify-content-center align-items-center">
                                <span class="icon-user mr-3"></span> Login
                            </a>
                            {{-- <a href="#" class="facebook btn d-flex justify-content-center align-items-center">
                            <span class="icon-facebook mr-3"></span> Login with Facebook
                        </a>
                        <a href="#" class="twitter btn d-flex justify-content-center align-items-center">
                            <span class="icon-twitter mr-3"></span> Login with Twitter
                        </a>
                        <a href="#" class="google btn d-flex justify-content-center align-items-center">
                            <span class="icon-google mr-3"></span> Login with Google
                        </a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
