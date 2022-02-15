@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="flex-div">
        <div class="name-content">
          <h1 class="logo">Students Details</h1>
          <p>Please Signup to your dashboard.</p><br>
          <form action="{{url('/welcome')}}"><button class="create-account btn btn-primary btn-raised" type="submit"><i class="fa-solid fa-circle-left"></i> Back Home</button></form>
        </div>
        
        <form method="POST" class="aform" action="{{ route('register') }}">
            @csrf
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="name" autofocus>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email" autofocus>
            <input id="password" type="password" name="password" required placeholder="password" autocomplete="current-password">
            <input id="password-confirm" type="password" name="password_confirmation" required placeholder="confirm password" autocomplete="new-password">
            <button class="login" type="submit">Register</button>
            <hr>
            <a href="{{ url('/login') }}"><button type="button" class="create-account">Already have an account ? Sign in</button></a>
        </form>
    </div>
</div>
@endsection
