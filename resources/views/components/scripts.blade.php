{{-- scripts --}}
@if(App::environment('production'))
	<script src="{{ mix('assets/js/combined.min.js') }}"></script>
@else

    <script src="{{ asset('assets/js/bundle/jquery-3.3.1.min.js') }}"></script> {{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
    <script src="{{ asset('assets/js/bundle/popper.min.js') }}"></script> {{-- Bootstrap JS File --}}
    <script src="{{ asset('assets/js/bundle/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle/morphext.min.js') }}"></script> {{-- Morphtext JS File --}}
    <script src="{{ asset('assets/js/bundle/jquery.flip.min.js') }}"></script> {{-- Flip JS File --}}
    <script src="{{ asset('assets/js/bundle/jquery.appear.js') }}"></script> {{-- Appear JS File --}}
    <script src="{{ asset('assets/js/bundle/isotope.pkgd.min.js') }}"></script> {{-- Isotop gallery --}}
    <script src="{{ asset('assets/js/bundle/jquery.cubeportfolio.min.js') }}"></script> {{-- Cube Portfolio JS File --}}
    <script src="{{ asset('assets/js/bundle/jquery.matchHeight-min.js') }}"></script> {{-- Equal Height JS File --}}

    <script src="{{ asset('assets/js/bundle/parallaxie.min.js') }}"></script> {{-- Parallax Background --}}
    {{-- <script src="{{ asset('assets/js/bundle/particles.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/bundle/jquery.fancybox.min.js') }}"></script> {{-- Fancy Box JS File --}}
    <script src="{{ asset('assets/js/bundle/swiper.min.js') }}"></script> {{-- Swiper JS File --}}
    <script src="{{ asset('assets/js/bundle/owl.carousel.js') }}"></script> {{-- Owl Carousel JS File --}}
    <script src="{{ asset('assets/js/bundle/wow.js') }}"></script> {{-- Wow JS File --}}
    <script src="{{ asset('assets/js/bundle/TweenMax.min.js') }}"></script> {{-- Tween Max Animation File --}}
    <script src="{{ asset('assets/js/bundle/headroom.js') }}"></script> {{-- Headroom Nav File --}}

    {{-- Revolution Slider --}}
    <script src="{{ asset('assets/js/bundle/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle/revolution/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle/revolution/jquery.themepunch.revolution.contdown.min.js') }}"></script>

    {{-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) --}}
    <script src="{{ asset('assets/js/bundle/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundle/revolution/extensions/revolution.extension.video.min.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script> --}}
    {{-- <script src="js/maps.min.js"></script> --}}
    <script src="{{ asset('assets/js/bundle/functions.js') }}"></script>

@endif
