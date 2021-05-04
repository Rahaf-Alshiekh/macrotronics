<!DOCTYPE html>
<html>

<head>
    <title></title>


    {{-- bootstrab --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    {{-- font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    {{--  main css --}}
    <link href="{{ asset('css/main.css') }}?v={{ time() }}" rel="stylesheet">


    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
</head>

<body>
        <!--  Header Area Start  -->
        @include('layouts.header')

        <!-- Page Content  -->
        @yield('content')

        <!--  Footer Area Start  -->
        @include('layouts.footer')
        <!--  Footer Area End  -->

</body>

</html>