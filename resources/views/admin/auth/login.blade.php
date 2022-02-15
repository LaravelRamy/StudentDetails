@extends('admin.layout.app')

@section('content')
<div class="container">
    <div class="auth">
        <div class="auth-container">
            <div class="auth-logo">
            <h1>Admin Login</h1>
            </div>
                <div class="box" style="border: 1px solid; margin-bottom: 20px; border-radius: 25px;">
                    <form role="form" method="POST" action="{{ url('/admin/login') }}" style=" margin:20px;">
                        {{ csrf_field() }}
                        <h1>Sign in</h1>
                        <hr>
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
                        <button type="submit" name="submit" class="auth-btn">Sign in</button>
                    </form>
                </div>
            <div class="auth-bottom">
            Don't have an account yet? <a href="{{ url('admin/register') }}">Create New</a>
            </div><br>
            <div  style="text-align: center;">
                <a href="{{ url('welcome') }}">Back home</a>
            </div>
        </div>
    </div>
</div>
@endsection
