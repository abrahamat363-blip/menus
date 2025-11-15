<?php

return [

    'title' => 'Actividad 11 – Admin',
    'title_prefix' => '',
    'title_postfix' => '',

    'use_ico_only' => false,
    'use_full_favicon' => false,

    'google_fonts' => ['allowed' => true],

    'logo' => '<b>Actividad</b>11',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_alt' => 'Logo',

    'preloader' => [
        'enabled' => true,
        'mode' => 'fullscreen',
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Loading...',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    'usermenu_enabled' => true,

    'classes_sidebar' => 'sidebar-dark-primary elevation-4',

    'sidebar_mini' => 'lg',

    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',

    /*
    |--------------------------------------------------------------------------
    | MENU PERSONALIZADO
    |--------------------------------------------------------------------------
    */

    'menu' => [

        [
            'type' => 'sidebar-menu-search',
            'text' => 'Buscar',
        ],

        // -------------------------
        // HOME
        // -------------------------
        [
            'text' => 'Home',
            'url'  => '/home',
            'icon' => 'fas fa-home',
        ],

        // -------------------------
        // PHOTOS
        // -------------------------
        [
            'text' => 'Photos',
            'url'  => '/photos',
            'icon' => 'fas fa-images',
        ],

        // -------------------------
        // CONTACT
        // -------------------------
        [
            'text' => 'Contact',
            'url'  => '/contact',
            'icon' => 'fas fa-envelope',
        ],
    ],

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    'plugins' => [
        'Datatables' => ['active' => false],
        'Select2' => ['active' => false],
        'Chartjs' => ['active' => false],
        'Sweetalert2' => ['active' => false],
        'Pace' => ['active' => false],
    ],

    'iframe' => [
        'default_tab' => ['url' => null, 'title' => null],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => ['loading_screen' => 1000],
    ],

    'livewire' => false,
];
