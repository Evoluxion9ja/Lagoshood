@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8 my-left-register">
                    <h1><strong>Register</strong></h1>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-5">
                                    <h1><strong>Join Now</strong></h1>
                                </div>
                                <div class="col-md-7">
                                    <span>
                                        <p class="text-left">Get movie updates and news delivered straight to your
                                            inbox when you subscribe to our newsletter
                                        </p>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <span>
                                            <p><b>Simply Complete The Form Below</b></p>
                                        </span>
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-outline-primary btn-sm">
                                                    {{ __('Contiuen') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <span>
                                        <p><b>Sign  up for free movie updates</b></p>
                                    </span>
                                    <span>
                                        <p>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    <small>Latest Movies</small>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    <small>New Series and Documentaries</small>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    <small>The best startcast</small>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    <small>Subscription promotions</small>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    <small>Lates star news</small>
                                                </label>
                                            </div>
                                        </p>
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            <small>Yes, I'd like to receive news and offers from the Lagoshood movies sites via e-mail. Your email address will not be sold or rented to third parties.</small>
                                        </label>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-right-register">
                    <h1 class="invisible">Already A Member?</h1>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Have an Account?</strong></h5>
                            <small><p>Sign in with an existing email</p></small>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-outline-primary btn-block btn-sm">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; margin-top:7px;">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Forgot Password?</strong></h5>
                                <small><p>Enter your e-mail and click "send password". You will receive an e-mail containing a link to easily and securely reset your password.</p></small>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-outline-primary btn-sm btn-block">
                                                {{ __('Send Password Reset Link') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
