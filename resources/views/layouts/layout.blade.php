<!DOCTYPE HTML>
<!--
 Spatial by TEMPLATED
 templated.co @templatedco
 Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Spatial by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}" />
</head>

<body class="landing">
    @yield('header')

    @yield('banner')

    @yield('session_one')

    @yield('session_two')

    @yield('session_three')

    @yield('session_four')

    {{-- @yield('banner') --}}

    <!-- Scripts -->
    <script src="{{ asset("public/js/jquery.min.js") }}"></script>
    <script src="{{ asset("public/js/skel.min.js") }}"></script>
    <script src="{{ asset("public/js/util.js") }}"></script>
    <script src="{{ asset("public/js/main.js") }}"></script>

</body>

</html>
