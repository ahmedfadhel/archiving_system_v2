<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('partials._mainNav')
        <div >
            @if (!Auth::guest())
                @include('partials._sideNav')
            @endif
            
            <div class="container is-widescreen {{Auth::guest()?'is-guest':''}}" id="app">
                @yield('content')
            </div>
            
        </div>

        <!-- Scripts -->

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
        {{-- @yield('script1') --}}
    </body>
</html>
