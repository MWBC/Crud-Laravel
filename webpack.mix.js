const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .scripts('node_modules/jquery-validation/dist/jquery.validate.js', 'public/js/jquery.validate.js')
    .scripts('node_modules/jquery-validation/dist/additional-methods.js', 'public/js/additional-methods.js');



/*.sass('resources/views/scss/style.scss', 'public/site/style.css')
    .scripts('node_modules/jquery/dist/jquery.js', 'public/site/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootsrap.bundle.js', 'public/site/bootstrap.js');
*/
