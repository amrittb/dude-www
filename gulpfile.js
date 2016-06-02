var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

elixir(function(mix){
    mixCss(mix);
    mixJs(mix);
    mix.version(['css/app.css','js/app.js']);
});

function mixCss(mix) {
    mix.sass('app.scss',null,{
        includePaths: [].concat("./node_modules/purecss/build")
    });
}

function mixJs(mix) {
    mix.browserify('app.js');
}
