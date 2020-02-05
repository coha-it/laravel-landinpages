<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @include('components.styles')
	</head>
	<body class="loader">
		@include('components.loader')
        @include('components.totop')
        @include('components.header')
        @include('components.navigation')

		<!-- animsition-overlay start -->
		<main class="animsition-overlay" data-animsition-overlay="true">
            @yield('content')
        </main><!-- animsition-overlay end -->

        @include('components.footer')
        @include('components.scripts')
    </body>
</html>
