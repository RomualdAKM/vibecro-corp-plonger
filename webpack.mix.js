const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .vue()
   .postCss('resources/css/app.css', 'public/css', [
       //
   ])
   .webpackConfig({
       resolve: {
           extensions: [".*",".wasm",".mjs",".js",".jsx",".json",".vue"], // Ajoutez '.mjs' ici
       },
   });
