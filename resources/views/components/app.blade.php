<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="OPRIFS seeks to improve the economic livelihood of the poorest women and girls through self-help groups." />
    <meta name="keywords" content="Prevention,Rehabilitation,Integration,Female,Street Children" />

    <title>OPRIFS</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('oprifs_img/favicon_io/favicon.ico')}}" />
    <!-- Bootstrap -->
    <link href="{{asset('oprifs/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{asset('oprifs/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v3.0.6/css/line.html">
    <!-- Slider -->
    <link rel="stylesheet" href="{{asset('oprifs/css/tiny-slider.css')}}" />
    <!-- Main Css -->
    <link href="{{asset('oprifs/css/style.min.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{asset('oprifs/css/colors/default.css')}}" rel="stylesheet" id="color-opt">

    <!-- alphinejs -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->

    <style>
        .img-thumbnail-gallery {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            max-width: 350px;
            height: 200px;
        }
    </style>
</head>

<body>


    {{ $slot }}

    <script src="{{asset('oprifs/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('oprifs/js/tiny-slider.js')}}"></script>
    <script src="{{asset('oprifs/js/feather.min.js')}}"></script>
    <script src="{{asset('oprifs/js/switcher.js')}}"></script>
    <script src="{{asset('oprifs/js/plugins.init.js')}}"></script>
    <script src="{{asset('oprifs/js/app.js')}}"></script>


</body>

</html>