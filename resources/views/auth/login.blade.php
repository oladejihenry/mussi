@extends('main')

@section('body')

<section class="section-padding">
    <h1 style="text-align:center; padding-bottom:20px;">Log In Here!</h1>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-box">
        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <div class="form-group">
                <input type="text" value="{{old('email')}}" name="email" placeholder="Enter Email or Username" required autofocus>
                
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter Password" required autocomplete="current-password">
            </div>
            <button class="btn">{{ __('Log in') }}</button>
            <br>
            <hr>
            <br>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
                </a>
                <br>
            @endif
        </form>
    </div>
</section>

@endsection