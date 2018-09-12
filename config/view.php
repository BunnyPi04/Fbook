<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    'image_paths' => [
        'img' => 'assets/img/',
        'logo' => 'assets/img/logo/',
        'flag' => 'assets/img/flag/',
        'slide' => 'assets/img/slider/',
        'banner' => 'assets/img/banner/',
        'product' => 'assets/img/product/',
        'post' => 'assets/img/post/',
        'book' => 'storage/img/book/',
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => realpath(storage_path('framework/views')),

];
