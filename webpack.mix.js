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

mix.js('resources/assets/js/app.js', 'public/js/app.js');
mix.js('resources/assets/js/devis.js', 'public/js');
mix.js('resources/assets/js/sb-admin.js', 'public/js/sbadmin.js');
mix.copy(['node_modules/jquery.easing/jquery.easing.min.js', 'node_modules/jquery/dist/jquery.js', 'node_modules/bootstrap/dist/js/bootstrap.min.js'], 'public/js');
mix.copy(['node_modules/startbootstrap-agency/js/agency.min.js', 'node_modules/startbootstrap-agency/js/contact_me.js', 'node_modules/startbootstrap-agency/js/jqBootstrapValidation.js'], 'public/js/agency');

mix.autoload({
  jquery: ['$', 'window.jQuery', 'jQuery'],
  moment: 'moment'
});

mix.sass('resources/assets/sass/app.scss',  'public/css');
mix.sass('resources/assets/sass/agency/agency.scss',  'public/css');
mix.sass('resources/assets/sass/sb-admin/sb-admin.scss',  'public/css');
mix.copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css', 'public/css');
mix.copy(['resources/assets/img/minus.png','resources/assets/img/plus.png'], 'public/images');
