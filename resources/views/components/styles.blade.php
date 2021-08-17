<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="preload" as="style">

@if(App::environment('production'))
	<link href="{{ mix('assets/css/combined.min.css') }}" rel="stylesheet" type="text/css">
@else
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/font-awesome-5/fontawesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/font-awesome-5/regular.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/font-awesome-5/brands.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/font-awesome-5/solid.min.css') }}" />

    <!-- Begin loading animation -->
    <link href="{{ asset('assets/css/loaders/loader-pulse.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!-- End loading animation -->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />

    {{-- And so on and so on --}}
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
@endif
