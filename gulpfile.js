var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');

    mix.copy('','resources/assets/js/').
    	copy('','resources/assets/css/')


    /**
     * combine all css files into one css file and place it in public/css dir
     */
    mix.styles(['app.css',
        'dataTables.bootstrap.css',
        'bootstrap.css',
        'font-awesome.css',
        'style.css'
        ]); 
  
    /**
     *Combine all js files and place the file in public/js file
     * 
     */
    mix.scripts(['jquery.js',
    			'bootstrap.js',
                'jquery.dataTables.js',
                'dataTables.bootstrap.js',
    				]);

    /**
     *Version the files. The files are kept in a build dir under css and js dir respectively
     * 
     */
     mix.version(['css/all.css', 'js/all.js']);
});
