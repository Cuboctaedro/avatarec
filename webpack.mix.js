let mix = require('laravel-mix');

mix.js("src/js/app.js", "assets")
    .postCss("src/css/app.css", "assets", [
        require("tailwindcss"),
    ])
    .options({
        processCssUrls: false
    })
    .copyDirectory("src/css/font", "assets/font")
    .copyDirectory("src/images", "assets/images");
