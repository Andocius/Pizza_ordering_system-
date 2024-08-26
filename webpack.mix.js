const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/app.css')
   .sass('resources/sass/main.scss', 'public/main.css');
