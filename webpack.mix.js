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
            'public/assets/css/bootstrap.min.css',
             /* And so on and so on */
          ],
          'public/assets/css/combined.min.css'
        )
        .combine([
            'public/assets/js/bundle/jquery-3.3.1.min.js',
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
