@extends('layouts.app')

@section('content')
<div class="card">
    <div class="left">
        <div class="img">
            <img src="https://img.freepik.com/free-vector/new-user-online-registration-sign-up-concept-tiny-characters-signing-up-huge-smartphone-with-secure-password-login-account-mobile-app-web-access-cartoon-people-vector-illustration_87771-11429.jpg?w=740" alt="">
        </div>
    </div>
    <div class="right">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1>User signIn</h1>
            <div class="container">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                


            </div>

            <div>
                <button type="submit" class="signupbtn">
                    {{ __('signIn') }}
                </button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection