@extends('layout.main')

@section('container')
    <!doctype html>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.104.2">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
        <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
        {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.3/dist/full.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" /> --}}

        {{-- <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        </style> --}}

        <!-- Custom styles for this template -->
        <link href="/css/signin.css" rel="stylesheet">
    </head>

    <body class="text-center">

        <main class="form-signin w-100 m-auto">
            <form action="/session/login/create" method="POST">
                @csrf
                <img class="mb-4" src="/img/hos.png" alt="" width="150" height="150">
                <h1 class="h3 mb-3 fw-normal text-light">Welcome back</h1>
                <br>
                <br>
                <div class="form mb-3">
                    <input style="height: 40px; border-radius: 5px; font-size: 15px;" type="email" value="{{ Session::get('email') }}" name="email" id="email"
                        class="form-control" placeholder="What your email?">
                    {{-- <label class="text-light" for="email">What your email?</label> --}}
                </div>
                
                <div class="form mb-5">
                    <input style="height: 40px; border-radius: 5px; font-size: 15px;" type="password" class="form-control" id="password" name="password" placeholder="What your password?">
                    {{-- <label for="password">What your password?</label> --}}
                </div>

                {{-- <div class="checkbox mb-3 text-light">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> --}}

                <button style="background-color: #34C6DA; width: 80%" class="btn btn-lg text-light" type="submit">Login</button>
                <div class="mt-3 text-center text-light">
                    <p>Don't have an account? <a style="color: #34C6DA; text-decoration: none;" href="/session/register/all">Register</a></p>
                </div>
            </form>
        </main>



    </body>

    </html>
@endsection
