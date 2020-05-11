{{-- scripts --}}
@if(App::environment('production'))
	<script src="{{ mix('assets/js/combined.min.js') }}"></script>
@else

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="{{ asset('assets/js/clipboard.min.js') }}"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="{{ asset('assets/js/flatpickr.min.js') }}"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="{{ asset('assets/js/flickity.pkgd.min.js') }}"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="{{ asset('assets/js/jarallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jarallax-video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jarallax-element.min.js') }}"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.smartWizard.min.js') }}"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="{{ asset('assets/js/plyr.polyfilled.min.js') }}"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="{{ asset('assets/js/prism.js') }}"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="{{ asset('assets/js/scrollMonitor.js') }}"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="{{ asset('assets/js/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="{{ asset('assets/js/svg-injector.umd.production.js') }}"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="{{ asset('assets/js/twitterFetcher_min.js') }}"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="{{ asset('assets/js/typed.min.js') }}"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="{{ asset('assets/js/theme.js') }}"></script>

@endif

<!-- Removes page load animation when window is finished loading -->
<script type="text/javascript">
    window.addEventListener("load",function(){document.querySelector('body').classList.add('loaded');});
</script>
