<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- bootstrab --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>macrotronics</title>
    {{-- scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</head>
<style>
    /* Font sizes. */
    :root {
        --font-size-sm: 12px;
    }

    /* colors */
    :root {
        --white: #ffffff;
        --gray-dark: #6d6e71;
        --green: #8ecd58;
        --gray-light: #f5f5f5;
    }

    .top-bar {
        background-color: var(--gray-light);
    }

    .top-bar p {
        font-size: var(--font-size-sm);

    }

    .social {
        display: flex;
    flex-direction: row-reverse;    }

    .sign-btn {
        color: var(--white);
        background-color: var(--gray-dark);
        border: 1px solid var(--white);
        border-bottom-left-radius: 8px;
        border-top-left-radius: 8px;
        padding: 6px 0;
        text-align: center;
        width: 70px;
    }

    .login-btn {
        background-color: var(--green);
        color: var(--white);
        border: 1px solid var(--white);
        border-left: none;
        border-bottom-right-radius: 8px;
        border-top-right-radius: 8px;
        float: left;
        padding: 6px 0;
        text-align: center;
        width: 70px;
    }

</style>

<body>
    {{-- top header (sign in) --}}

        <div class="container-fluid">
            <div class="row  top-bar">
                <div class="col-md-8 d-flex">
                    <p>Welcome Guest!</p>
                    <button class="sign-btn">Sign Up</button>
                    <button class="login-btn">Sign In</button>
                    <p>Ghazir, Kfarehbab Main Road, +961 71 854621, +961 9 853008, +961 9 853927, +961 9 853327</p>

                </div>
                <div class="col-md-4 social">
                    <a>ghgh</a>
                </div>
               

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/logo.png" alt="Macrotronics" width="500" height="90">

                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>
            </div>


        {{-- end container --}}
    </div>

</body>

</html>
