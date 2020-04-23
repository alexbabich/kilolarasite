const mix = require('laravel-mix');
require('laravel-mix-svg-vue');

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            '@': __dirname + '/resources'
        }
    }
});

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/style/app.scss', 'public/css')
    .svgVue(
        {
            svgPath: 'resources/assets/svg',
            extract: false,
            svgoSettings: [
                { removeTitle: true },
                { removeViewBox: false },
                { removeDimensions: true }
            ]
        }
    );
