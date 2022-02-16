@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="text-align:center; font-size:22px">

            <div class="card-header">{{ __('UserPage') }}</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{ __('You are logged in!') }}
            </div>


        </div>
        <div style="display:flex;justify-content:center">
            <button style="padding:30px;background-color:#333;color:#fff;width:20%">
                <a style="color:#fff;text-decoration:none" href="/user/{{ Auth::user()->name }}" class="nav-link">profile</a>
            </button>
        </div>
    </div>

</div>
</div>
@endsection