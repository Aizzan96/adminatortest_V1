<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CUKAI JUALAN</title>
    <link rel="icon" type="image/png" href="{{asset ('images/head/money.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--fontawesome-->
    <link rel="stylesheet" href="{{asset('fontawesome-free/css/all.min.css')}}">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{asset('css/coreuicss/simplebar.css')}}">
    <!-- Main styles for this application-->
    <link href="{{asset('css/coreuicss/style.css')}}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="{{asset('css/coreuicss/prism.css')}}">
    <link href="{{asset('css/coreuicss/coreui-chartjs.css')}}" rel="stylesheet">
    <script>
        (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-KX4JH47');
    </script>
    <link href="{{asset('css/coreuicss/example.css')}}" rel="stylesheet">
</head>

<body>
    {{-- SIDEBAR --}}
    @include('layouts.sidebar')
    {{-- SIDEBAR END --}}


    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        {{-- Top part start--}}
        {{-- Header --}}
        <header class="header header-sticky mb-4">
            {{-- navbar start --}}
            @include('layouts.navbar')
            {{-- navbar ends --}}
            {{-- Header divider --}}
            {{-- header divider ends --}}
        </header>
        {{-- Header --}}
        {{-- top part ends --}}

        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">

                    @yield("content")

                </div>

            </div>

        </div>
        {{-- Footer start --}}
        @include('layouts.footer')
        {{-- Footer ends --}}

    </div>

    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('js/coreuijs/main.js')}}"></script>
    <script src="{{asset('js/coreuijs/coreui.bundle.min.js')}}"></script>
    <script src="{{asset('js/coreuijs/simplebar.min.js')}}"></script>
</body>

</html>
