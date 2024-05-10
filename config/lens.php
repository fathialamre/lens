<?php


use Lensphp\Lens\Http\Middleware\HandleInertiaRequests;

return [
    'middleware' => [
        'web',
        HandleInertiaRequests::class,
    ],

    'path' => '/lens',

    'name' => 'Lens Site',
];
