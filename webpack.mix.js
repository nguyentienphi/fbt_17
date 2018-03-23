let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
mix.js('resources/assets/js/jquery-3.3.1.min.js', 'public/js')
   .sass('resources/assets/css/form.css', 'public/css');
mix.styles([
    'resources/assets/css/bootstrap-theme.min.css',
    'resources/assets/css/bootstrap.min.css',
    ], 'public/css/all.min.css');
mix.copy('resources/assets/image', 'public/image');

