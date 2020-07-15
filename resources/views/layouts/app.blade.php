<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <!-- Author -->
        <meta name="author" content="Corporate Happiness GmbH">
        <!-- description -->
        <meta name="description" content="">
        <!-- keywords -->
        <meta name="keywords" content="">

        <title>@yield('title')</title>

        <!-- <link rel="icon" href="<%= BASE_URL %>favicon.ico"> -->
        <link href="https://dreamteam-survey.s3.eu-central-1.amazonaws.com/images/logo/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link href="https://dreamteam-survey.s3.eu-central-1.amazonaws.com/images/logo/favicon/favicon.svg" rel="icon" type="image/svg+xml" sizes="any">
        <link href="https://dreamteam-survey.s3.eu-central-1.amazonaws.com/images/logo/favicon/favicon.png" rel="icon" type="image/png" sizes="any">

        @include('components.styles')

        <!-- Google Recaptcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        @if(env('GOOGLE_ANALYTICS_ENABLED', false) && env('GOOGLE_ANALYTICS_TRACKING_ID'))
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-18710254-3"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
              gtag('config', env('GOOGLE_ANALYTICS_TRACKING_ID'));
            </script>
        @endif

	</head>
	<body data-spy="scroll" data-target=".navbar-nav" data-offset="90">

        @include('components.loader')

        @if(!env('APP_UNDER_CONSTRUCTION'))
            @include('components.header')
        @endif

		{{-- animsition-overlay start --}}
		<main class="animsition-overlay" data-animsition-overlay="true">
            @include('components.messages')

            @yield('content')

        </main>{{-- animsition-overlay end --}}

        @if(!env('APP_UNDER_CONSTRUCTION'))
            @include('components.footer')
        @endif

        @include('cookieConsent::index')

        @include('components.scripts')
    </body>
</html>
