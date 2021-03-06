const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.copy('node_modules/font-awesome/fonts','public/build/fonts')
    .sass([
    	'node_modules/bulma/bulma',
    	'app.scss'
    ])
    .styles([
    	'vendor/lity.css',
        'vendor/baguetteBox.css',
        'vendor/dropzone.css'
    ],'public/css/vendor.css')
    .scripts([
    	'vendor/lity.js',
        'vendor/masonry.min.js',
        'vendor/dropzone.js',
        'vendor/baguetteBox.min.js'
    ],'public/js/vendor.js')
    .webpack('app.js')
    .version('css/app.css');
});
