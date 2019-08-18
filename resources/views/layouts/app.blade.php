<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Student MS') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch"
          href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito"
          rel="stylesheet"
          type="text/css">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link type="text/css"
          rel="stylesheet"
          href="{{ mix('css/app.css') }}">

</head>

<body>
    <div id="app">

        @include('layouts.nav')

        <main class="py-4 container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    @yield('content')

                </div>
            </div>
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/site.js') }}"></script>

    @yield('script')


</body>

</html>