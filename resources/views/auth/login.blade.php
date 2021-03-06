@extends('layouts.auth')


@section('content')
    <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <div class="mb-4">
                        <h3>Sign In</h3>
                        <p class="mb-4">You must login to continue.</p>

                        @if (session('msg_inactive'))
                            <p class="text-danger">
                                {{ session('msg_inactive') }}
                            </p>
                            {{-- Re send email confirmation  --}}
                            <form action="{{ route('auth.resend_email_confirmation') }}" method="post">
                                @csrf
                                <input type="hidden" name="email" value="{{ session('email') }}">
                                <button type="submit" class="btn btn-danger btn-sm">Resend Email</button>
                            </form>
                        @endif

                        @if (session('msg_register'))
                            <p class="text-success">
                                {!! session('msg_register') !!}
                            </p>
                        @endif
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group first">
                            <label for="email">Email</label>
                            <input type="email" name="user_email" class="form-control" id="email">
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
                                <a href="" class="forgot-pass">Forgot Password</a>
                            </span>
                        </div>

                        <input type="submit" value="Log In" class="btn btn-block btn-primary">

                        <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>

                        <div class="social-login">
                            <a href="{{ route('register') }}"
                                class="google btn d-flex justify-content-center align-items-center">
                                <span class="icon-user mr-3"></span> Create New Account
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg order-1 order-md-2" style="background-image: url('{{ 'assets' }}/auth/images/bg_1.jpg');">
    </div>
@endsection
