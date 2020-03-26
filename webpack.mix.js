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
    'resources/js/main.js',
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
            'public/assets/css/bootstrap.min.css',
            'public/assets/css/themify-icons.css',
            'public/assets/css/font-awesome.min.css',
            'public/assets/css/animate.min.css',
            'public/assets/css/cubeportfolio.min.css',
            'public/assets/css/jquery.fancybox.min.css',
            'public/assets/css/navigation.css',
            'public/assets/css/settings.css',
            'public/assets/css/swiper.min.css',
            'public/assets/css/owl.carousel.min.css',
            'public/assets/css/owl.theme.default.min.css',
            'public/assets/css/before-after-img.css',
            'public/assets/css/style.css',
         // 'public/assets/css/yellow.css',
            'public/dist/css/custom.css'
          ],
          'public/assets/css/combined.min.css'
        )
        .combine([
            'public/assets/js/bundle/jquery-3.3.1.min.js',
            'public/assets/js/bundle/popper.min.js',
            'public/assets/js/bundle/bootstrap.min.js',
            'public/assets/js/bundle/morphext.min.js',
            'public/assets/js/bundle/jquery.flip.min.js',
            'public/assets/js/bundle/jquery.appear.js',
            'public/assets/js/bundle/isotope.pkgd.min.js',
            'public/assets/js/bundle/jquery.cubeportfolio.min.js',
            'public/assets/js/bundle/jquery.matchHeight-min.js',
            'public/assets/js/bundle/parallaxie.min.js',
         // 'public/assets/js/bundle/particles.min.js',
            'public/assets/js/bundle/jquery.fancybox.min.js',
            'public/assets/js/bundle/swiper.min.js',
            'public/assets/js/bundle/owl.carousel.js',
            'public/assets/js/bundle/wow.js',
            'public/assets/js/bundle/TweenMax.min.js',
            'public/assets/js/bundle/headroom.js',

            'public/assets/js/bundle/revolution/jquery.themepunch.tools.min.js',
            'public/assets/js/bundle/revolution/jquery.themepunch.revolution.min.js',
            'public/assets/js/bundle/revolution/jquery.themepunch.revolution.contdown.min.js',

            'public/assets/js/bundle/revolution/extensions/revolution.extension.actions.min.js',
            'public/assets/js/bundle/revolution/extensions/revolution.extension.carousel.min.js',
            'public/assets/js/bundle/revolution/extensions/revolution.extension.kenburn.min.js',
            'public/assets/js/bundle/revolution/extensions/revolution.extension.layeranimation.min.js',
            'public/assets/js/bundle/revolution/extensions/revolution.extension.migration.min.js',
            'public/assets/js/bundle/revolution/extensions/revolution.extension.navigation.min.js',
            'public/assets/js/bundle/revolution/extensions/revolution.extension.parallax.min.js',
            'public/assets/js/bundle/revolution/extensions/revolution.extension.slideanims.min.js',
            'public/assets/js/bundle/revolution/extensions/revolution.extension.video.min.js',

            'public/assets/js/bundle/functions.js',
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
