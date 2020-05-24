const mix = require('laravel-mix');
require('laravel-mix-svg-vue');

mix.autoload({ 'jquery': ['window.$', 'window.jQuery'] })

mix.webpackConfig({
    resolve: {
        alias: {
            '@': __dirname + '/resources',
            'jquery': path.join(__dirname, 'node_modules/jquery/src/jquery')
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