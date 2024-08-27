<?php

return [
    'debug' => true,
    'thumbs' => [
        'driver'    => 'im',
        'interlace' => true,
        'presets' => [
            'content' => ['width' => 2048, 'quality' => 80],
            'content-placeholder' => ['width' => 512, 'quality' => 20, 'blur' => true],
            'tiles' => ['width' => 2048, 'height' => 1177, 'quality' => 80, 'crop' => 'center',]
        ],
        'format' => 'webp'
    ],
    'michnhokn.cookie-banner' => [
        'features' => [
            'calendar' => 'Belegungsplan',
            'checkwxapi' => 'Wetter',
            'googlemaps' => 'Karte'
        ],
    ],
];
