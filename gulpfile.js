var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less','resources/css');
    mix.styles([
        'app.css',
        //'libs/bootstrap-theme.min.css',
        'libs/jquery-ui.min.css',
        'libs/jquery-ui.theme.min.css',
        'libs/side_menu.css',
        'libs/search.css',
        'libs/component_links.css',
        'libs/lightbox.css',
        'libs/slick.css',
        'libs/slick-theme.css',
        'libs/footer-distributed-with-address-and-phones.css',
        'libs/select2.min.css',
        'libs/jquery.dataTables.min.css',
        'libs/jquery.dataTables_themeroller.css'
    ]);




    mix.scripts([
        '../assets/bower/jquery/dist/jquery.js',
        'libs/jquery-migrate-1.2.1.min.js',
        '../assets/bower/bootstrap/dist/js/bootstrap.js',
        'libs/jquery-ui.min.js',
        '../../public/js/slick.min.js',
        'libs/select2.min.js',
        'libs/html5shiv.min.js',
        'libs/respond.min.js',
        'libs/jquery.dataTables.min.js',
        'libs/my_script.js'
    ]);

    mix.version([
        'public/css/all.css',
        'public/js/all.js'
    ]);


});

