const mix = require('laravel-mix');
require('mix-tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath(`./resources/assets/build/`);

mix.tailwind('./tailwind.config.js')
    .css('resources/assets/src/app.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .js('resources/assets/src/app.js', 'js')
    .version();
mix.sourceMaps().version();
