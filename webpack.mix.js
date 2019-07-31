<<<<<<< HEAD
const mix = require('laravel-mix');
=======
let mix = require('laravel-mix');
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf

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

<<<<<<< HEAD
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
=======
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
