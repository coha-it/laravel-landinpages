{{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css"> --}}
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

@if(App::environment('production'))
	<link href="{{ mix('assets/css/combined.min.css') }}" rel="stylesheet" type="text/css">
@else
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/before-after-img.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bundle/yellow.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
@endif
