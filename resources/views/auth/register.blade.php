@extends('website.ecommerce.layouts.ecommerce')
@section('content')

    <section class="py-5">
        <div class="container">
            <form method="POST" action="{{ route('login.users') }}">
                @csrf
                <div class="account-heading mb-25">
                    <h2>Sign Up</h2>
                </div>
                <div class="account-form form-style p-20 mb-30 bg-fff box-shadow">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <b>First name <span>*</span></b>
                            <input type="text" class="form-control" name="first_name" required autocomplete="email"
                                   autofocus>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <b>Last name <span>*</span></b>
                            <input type="text" class="form-control" name="last_name" required autocomplete="email"
                                   autofocus>
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <b>email address <span>*</span></b>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <p>Already Have an Account? <a href="{{ url('/login') }}">SignIn</a></p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <b>Mobile number <span>*</span></b>
                            <input type="number" class="form-control" name="mobile" required autofocus>
                            @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <b>Password <span>*</span></b>
                            <input id="password" type="password" class="form-control" name="password" required
                                   autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <b>Confirm password <span>*</span></b>
                            <input id="password" type="password" class="form-control" name="conf_password" required
                                   autocomplete="current-password">

                            @error('conf_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <div class="login-button" style="margin-top: 20px;">
                                <button type="submit" style="width: 100%;">Signup</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
