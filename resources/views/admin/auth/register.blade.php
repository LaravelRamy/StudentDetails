@extends('admin.layout.app')

@section('content')
<div class="container">
    <div class="auth">
        <div class="auth-container">
            <div class="auth-logo">
            <h1>Admin Register</h1>
            </div>
                <div class="box" style="border: 1px solid; margin-bottom: 20px; border-radius: 25px;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/register') }}" style="margin:20px;">
                        {{ csrf_field() }}
                        <h1>Register</h1>
                        <hr>
                        <div class="auth-input">
                            <label for="name">
                            Name
                            </label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" autofocus>
                        </div>
                        <div class="auth-input">
                            <label for="email">
                            E-Mail
                            </label>
                            <input id="email" type="email" class="" name="email" value="{{ old('email') }}" autofocus/>
                        </div>
                        <div class="auth-input">
                            <label for="password">
                            Password
                            </label>
                            <input id="password" type="password" class="" name="password">
                        </div>
                        <div class="auth-input">
                            <label for="confirm password">
                            Confirm Password
                            </label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>
                        <button type="submit" name="submit" class="auth-btn">Register</button>
                    </form>
                </div>
            <div class="auth-bottom">
                Already have an account? <a href="{{ url('admin/login') }}">Sign in</a>
            </div><br>
            <div  style="text-align: center;">
                <a href="{{ url('welcome') }}">Back home</a>
            </div>
        </div>
    </div>

</div>
@endsection
