const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss','public/assets/css')
    .sass('resources/sass/clubs.scss','public/assets/css')
    .sass('resources/sass/home.scss', 'public/assets/css')
    .sass('resources/sass/who.scss', 'public/assets/css')
    .sass('resources/sass/loading.scss','public/assets/css')



