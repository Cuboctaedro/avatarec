let mix = require('laravel-mix');

require('laravel-mix-tailwind');

mix.js("src/js/app.js", "assets")
    .postCss("src/css/app.css", "assets")
    .options({
        processCssUrls: false
    })
    .tailwind()
    .copyDirectory("src/css/font", "assets/font")
    .copyDirectory("src/images", "assets/images");
