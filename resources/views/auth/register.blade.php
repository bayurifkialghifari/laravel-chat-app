@extends('layouts.auth')

@section('content')
    <div class="contents order-2 order-md-2">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <div class="mb-4">
                        <h3>Sign Up</h3>
                        <p class="mb-4">Join us today.</p>
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
                            <label for="user_phone">Phone</label>
                            <input type="number" name="user_phone" class="form-control" id="user_phone">

                        </div>
                        @error('user_phone')
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
                            <p>
                                Already have an account ?
                                <span onclick="window.location.href='{{ route('login') }}'" class="text-primary"
                                    style="cursor: pointer">Login</span>
                            </p>
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
    <div class="bg order-1 order-md-1" style="background-image: url('{{ 'assets' }}/auth/images/bg_1.jpg');">
    </div>
@endsection
