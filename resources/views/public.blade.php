<!DOCTYPE html>
<html>
<head>
    <title>{{ setting('app-name') }}</title>

    <!-- Meta -->
    <meta name="viewport" content="width=device-width">
    <meta name="token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ baseUrl('/') }}">
    <meta charset="utf-8">

    <!-- Styles and Fonts -->
    <link rel="stylesheet" href="{{ baseurl("css/styles.css") }}">
    <link rel="stylesheet" media="print" href="{{ baseurl("css/print-styles.css") }}">
    <link rel="stylesheet" href="{{ baseUrl("/libs/material-design-iconic-font/css/material-design-iconic-font.min.css") }}">

    <!-- Scripts -->
    <script src="{{ baseUrl("/libs/jquery/jquery.min.js") }}"></script>
    @include('partials/custom-styles')

    <!-- Custom user content -->
    @if(setting('app-custom-head'))
        {!! setting('app-custom-head') !!}
    @endif
</head>
<body class="@yield('body-class')" ng-app="bookStack">

@include('partials.notifications')

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <a href="{{ baseUrl('/') }}" class="logo">
                    @if(setting('app-logo', '') !== 'none')
                        <img class="logo-image" src="{{ setting('app-logo', '') === '' ? baseUrl('/logo.svg') : baseUrl(setting('app-logo', '')) }}" alt="Logo">
                    @endif
                    @if (setting('app-name-header'))
                        <span class="logo-text">{{ setting('app-name') }}</span>
                    @endif
                </a>
            </div>
            <div class="col-sm-6">
                <div class="float right">
                    <div class="links text-center">
                        @yield('header-buttons')
                    </div>
                    @if(isset($signedIn) && $signedIn)
                        @include('partials._header-dropdown', ['currentUser' => $currentUser])
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>

<section class="container">
    @yield('content')
</section>

<script src="{{ baseurl("js/common.js") }}"></script>
</body>
</html>
