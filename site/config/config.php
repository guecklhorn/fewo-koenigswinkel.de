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
    'routes' => [
        [
            'pattern' => 'sitemap.xml',
            'action'  => function() {
                $pages = site()->pages()->index();

                // fetch the pages to ignore from the config settings,
                // if nothing is set, we ignore the error page
                $ignore = kirby()->option('sitemap.ignore', ['error']);

                $content = snippet('sitemap', compact('pages', 'ignore'), true);

                // return response with correct header type
                return new Kirby\Cms\Response($content, 'application/xml');
            }
        ],
        [
          'pattern' => 'sitemap',
          'action'  => function() {
                return go('sitemap.xml', 301);
            }
        ]
    ],
    'afbora.kirby-minify-html.enabled' => false,
];
