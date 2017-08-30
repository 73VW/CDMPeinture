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

mix.js('resources/assets/js/app.js', 'public/js');
mix.js([
    'resources/assets/agency/js/jqBootstrapValidation.js',
    'resources/assets/agency/js/contact_me.js',
    'resources/assets/agency/js/agency.js'], 'public/js/agency.js');
mix.js('resources/assets/startbootstrap-sb-admin-master/js/sb-admin.js', 'public/js/sbadmin.js');

mix.sass('resources/assets/sass/app.scss',  'public/css');
mix.sass('resources/assets/agency/scss/agency.scss',  'public/css');
mix.sass('resources/assets/startbootstrap-sb-admin-master/scss/sb-admin.scss',  'public/css');
mix.copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css', 'public/css');
