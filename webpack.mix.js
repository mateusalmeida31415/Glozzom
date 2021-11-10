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
    //bootstrap 4.6.1
    .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css')
    //Folha de estilo personalizado
    .sass('resources/sass/style.scss', 'public/css')
    //popper
    .js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps()
    // jquery
    .js('node_modules/jquery/dist/jquery.js', 'public/js')
    .vue();
    // .sass('resources/sass/app.scss', 'public/css');
