const mix = require('laravel-mix');

require('laravel-mix-purgecss');

mix.setPublicPath('public');

mix.js('resources/js/main.js', 'public/js');
mix.js('resources/js/home.js', 'public/js');
mix.js('resources/js/about.js', 'public/js');

// Extract shared libraries to vendor.js
mix.extract([
    'jquery',
]);

mix.sass('resources/sass/app.scss', 'public/css');

mix.purgeCss();

mix.version();
