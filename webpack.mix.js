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

mix.js();
/*
   .combine([
    'resources/assets/css/themes/all-themes.css',
    'resources/assets/css/main.css', 
    'resources/assets/css/style.css'
    ], 'public/css/custom-style.css')
*/