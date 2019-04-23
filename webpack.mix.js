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

/*
 |--------------------------------------------------------------------------
 | Files common to all website
 |--------------------------------------------------------------------------
 |
 |Esses arquivos ficaram no layout pois será usado em todo o projeto
 |
 */
//CSS
mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/plugins/font-awesome-4.7.0/css/font-awesome.min.css',
    'resources/assets/css/plugins/jquery-ui-1.12.1/jquery-ui.min.css',
    'resources/assets/css/plugins/slick-1.6.0/slick.css',
    'resources/assets/css/plugins/chosen-1.6.2/chosen.min.css',
    'resources/assets/css/nouislider.min.css',
    'resources/assets/css/style.css',
    'resources/assets/css/responsive.css'

], 'public/css/all.css');

//JS
mix.js(
  	'resources/assets/js/site.js'
	, 'public/js/all.js');
