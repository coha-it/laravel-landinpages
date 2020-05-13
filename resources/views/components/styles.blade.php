@if(App::environment('production'))
	<link href="{{ mix('assets/css/combined.min.css') }}" rel="stylesheet" type="text/css">
@else
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="stylesheet">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/font-awesome-5/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/font-awesome-5/css/regular.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/font-awesome-5/css/brands.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/font-awesome-5/css/solid.min.css') }}" />

    <!-- Begin loading animation -->
    <link href="{{ asset('assets/css/loaders/loader-pulse.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!-- End loading animation -->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />

    {{-- And so on and so on --}}
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
@endif
