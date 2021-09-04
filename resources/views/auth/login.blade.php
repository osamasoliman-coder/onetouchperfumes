@extends('website.ecommerce.layouts.ecommerce')
@section('content')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="account-heading mb-25">
                    <h2>Login</h2>
                </div>
                <div class="account-form form-style p-20 mb-30 bg-fff box-shadow">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <b>email address <span>*</span></b>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <b>Password <span>*</span></b>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="login-button">
                            <button type="submit" style="width: 200px;">SignIn</button>
                        </div>
                        <p style="margin-top: 20px;">Already don't have an Account? <a href="{{ url('/register') }}">SignUp</a></p>
                    </form>

                </div>
            </div>
    </div>
</section>

@endsection
