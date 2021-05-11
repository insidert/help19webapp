const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js/app.js').vue().version();
mix.sass('resources/sass/vendor.scss', 'public/css/vendor.css').version();

mix.browserSync({
    proxy: 'help19.local'
});

mix.disableNotifications();
