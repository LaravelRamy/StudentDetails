@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="flex-div">
        <div class="name-content">
          <h1 class="logo">Students Details</h1>
          <p>Please login to your dashboard.</p><br>
          <form action="{{url('/welcome')}}"><button class="create-account btn btn-primary btn-raised" type="submit"><i class="fa-solid fa-circle-left"></i> Back Home</button></form>
        </div>
        <form method="POST" class="bform" action="{{ route('login') }}">
            @csrf
            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="email" autofocus>
            <input id="password" type="password" name="password" placeholder="password" required autocomplete="current-password">
            <button class="login" type="submit">Log In</button>
            <hr>
            <a href="{{ url('/register') }}"><button type="button" class="create-account">Create New Account</button></a>
        </form>
      </div>
</div>
@endsection
