<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>NTRA - Super-puper rent app!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Real Estate Website Landing Page" name="description" />
    <meta content="Real Estate, buy, sell, Rent, tailwind Css" name="keywords" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="2.2.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />

    <!-- Css -->
    <link href="/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="/assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
    <link href="/assets/libs/swiper/css/swiper.min.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link href="/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/tailwind.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dark:bg-slate-900">

<x-navbar/>
{{$slot}}


<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-green-600 text-white justify-center items-center"><i class="uil uil-arrow-up"></i></a>
<!-- Back to top -->

<!-- JAVASCRIPTS -->
<script src="../assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="../assets/libs/tobii/js/tobii.min.js"></script>
<script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="../assets/libs/swiper/js/swiper.min.js"></script>
<script src="../assets/libs/feather-icons/feather.min.js"></script>
<script src="../assets/js/plugins.init.js"></script>
<script src="../assets/js/app.js"></script>

<!-- JAVASCRIPTS -->
</body>
</html>
