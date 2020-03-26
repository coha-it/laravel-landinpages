<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <!-- Author -->
        <meta name="author" content="Dr. Oliver Haas">
        <!-- description -->
        <meta name="description" content="Die Corona-Krise ist hier und wir alle machen uns Sorgen. Um unsere Familie, unsere wirtschaftliche Existenz und natürlich um unsere Gesundheit. Deshalb bleiben wir zu Hause, waschen uns regelmäßig die Hände und nehmen Vitamin-Tabletten ein. Das sind alles wichtige Maßnahmen und können uns helfen, unser körperliches Immunsystem zu unterstützen. Doch was sind eigentlich die Folgen der Krise auf unser psychisches Wohlbefinden? Denn worüber sich viele Menschen in solch schweren Zeiten nicht bewusst sind, ist, dass wir neben unserem physischen Immunsystem auch ein psychisches Immunsystem haben.">
        <!-- keywords -->
        <meta name="keywords" content="corona, panik, angst, lösung">

        <title>@yield('title')</title>

        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicons/favicon.png') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">
        <link rel="icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">

        @include('components.styles')

	</head>
	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        @include('components.loader')
        @include('components.header')

		{{-- animsition-overlay start --}}
		<main class="animsition-overlay" data-animsition-overlay="true">

            @section('message')
                {{-- Messages --}}
            @show

            @yield('content')

            @section('contactform')
                {{-- @include('components.contactform') --}}
            @show
        </main>{{-- animsition-overlay end --}}

        @include('components.footer')
        @include('components.scripts')
    </body>
</html>
