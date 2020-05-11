const mix = require('laravel-mix');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Mix JS Files
mix.js([
    'resources/js/app.js',
    'resources/js/custom.js'
  ],
  'public/dist/js/app.js'
)
.sass(
    'resources/scss/custom.scss',
    'public/dist/css/custom.css'
);

// LIVE
if (mix.inProduction()) {
    mix
        .styles([
            'public/assets/css/loaders/loader-pulse.css',
            'public/assets/css/theme.css',
            'public/dist/css/custom.css',
             /* And so on and so on */
          ],
          'public/assets/css/combined.min.css'
        )
        .combine([
            'public/assets/js/jquery.min.js',
            'public/assets/js/popper.min.js',
            'public/assets/js/bootstrap.js',

            'public/assets/js/aos.js',
            'public/assets/js/clipboard.min.js',
            'public/assets/js/jquery.fancybox.min.js',
            'public/assets/js/flatpickr.min.js',
            'public/assets/js/flickity.pkgd.min.js',
            'public/assets/js/ion.rangeSlider.min.js',
            'public/assets/js/isotope.pkgd.min.js',
            'public/assets/js/jarallax.min.js',
            'public/assets/js/jarallax-video.min.js',
            'public/assets/js/jarallax-element.min.js',
            'public/assets/js/jquery.countdown.min.js',
            'public/assets/js/jquery.smartWizard.min.js',
            'public/assets/js/plyr.polyfilled.min.js',
            'public/assets/js/prism.js',
            'public/assets/js/scrollMonitor.js',
            'public/assets/js/smooth-scroll.polyfills.min.js',
            'public/assets/js/svg-injector.umd.production.js',
            'public/assets/js/twitterFetcher_min.js',
            'public/assets/js/typed.min.js',
            'public/assets/js/theme.js',

            // and so on and so on
          ],
          'public/assets/js/combined.min.js'
        )
        .version()
        .purgeCss();
}
// DEV / LOCAL
else {
    // mix.purgeCss();
}
