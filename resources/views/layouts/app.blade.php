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

        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicons/favicon.png') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">
        <link rel="icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">

        @include('components.styles')

	</head>
	<body data-spy="scroll" data-target=".navbar-nav" data-offset="90">

        @include('components.loader')

        @include('components.header')

		{{-- animsition-overlay start --}}
		<main class="animsition-overlay" data-animsition-overlay="true">

            @include('components.messages')

            @yield('content')

        </main>{{-- animsition-overlay end --}}
        
        @include('components.footer')
        @include('components.scripts')
    </body>
</html>
