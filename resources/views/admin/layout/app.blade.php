<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Auth</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <style>
        *,
        ::after,
        ::before {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        }
        html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: transparent;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -ms-overflow-style: scrollbar;
        scroll-behavior: smooth;
        font-size: 20px;
        }
        body {
        margin: 0;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        font-family: Inter, sans-serif;
        overflow-x: hidden;
        }

        .auth {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        user-select: none;
        }
        .auth-container {
        width: 400px;
        margin: 0 auto;
        position: relative;
        }
        .auth-logo {
        width: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin-bottom: 20px;
        }
        .auth-logo img {
        width: 100%;
        height: auto;
        object-fit: contain;
        object-position: center;
        pointer-events: none;
        }
        .auth-form {
        width: 100%;
        background: white;
        box-shadow: 0 4px 10px #0000001f;
        padding: 25px;
        border-radius: 10px;
        margin-bottom: 30px;
        position: relative;
        }
        .auth-form h1 {
        margin: 0;
        line-height: normal;
        font-size: 30px;
        font-family: "inherit";
        font-weight: 900;
        margin-bottom: 20px;
        }
        .auth-input {
        width: 100%;
        position: relative;
        margin-bottom: 15px;
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;
        }
        .auth-input label {
        font-weight: 800;
        font-family: "inherit";
        font-size: 16px;
        margin-bottom: 5px;
        color: #2a353e;
        line-height: normal;
        }
        .auth-input input {
        width: 100%;
        height: 40px;
        border-radius: 10px;
        border: 2px solid #d5d5d5;
        outline: none;
        appearance: none;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: left;
        transition: all 200ms ease-in-out;
        padding: 10px;
        }
        .auth-input input:hover,
        .auth-input input:focus {
        border-color: #0064ff;
        }
        .auth-reset {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #0064ff;
        font-weight: 800;
        font-family: "inherit";
        transition: all 200ms ease;
        }
        .auth-reset:hover {
        opacity: 0.8;
        }
        .auth-btn {
        width: 100%;
        height: 40px;
        background: #0064ff;
        border: none;
        border-radius: 9999px;
        outline: none;
        appearance: none;
        position: relative;
        color: white;
        font-weight: 800;
        font-family: "inherit";
        font-size: 15px;
        letter-spacing: 1px;
        transition: all 200ms ease-in-out;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        }
        .auth-btn:hover,
        .auth-btn:focus {
        background: #007eff;
        }
        .auth-bottom {
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: #2d323c;
        font-weight: 800;
        font-family: "inherit";
        transition: all 200ms ease;
        text-align: center;
        line-height: normal;
        }
        .auth-bottom a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #0064ff;
        font-weight: 800;
        font-family: "inherit";
        margin-left: 5px;
        }
        .auth-bottom a:hover {
        opacity: 0.8;
        }

        .auth-input.error input {
        border-color: red;
        }
        .auth-input.error .auth-error {
        margin: 0;
        margin-top: 6px;
        color: red;
        font-family: "inherit";
        font-weight: bold;
        font-size: 15px;
        line-height: normal;
        }

    </style>
</head>

<body>
    @yield('content')
</body>

</html>
