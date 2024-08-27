<?php
Kirby::plugin('custom/image', [
    'tags' => [
        'image' => [
            'html' => function($tag) {
                if ($tag->file = $tag->file($tag->value)) {

                    $tag->src     = $tag->file->url();
                    $tag->alt     = $tag->alt     ?? $tag->file->alt()->or(' ')->value();
                    $tag->title   = $tag->title   ?? $tag->file->title()->value();

                    $html =
                        '<figure class="figure">
                            <img class="lazyload ' . $tag->class . '"
                                src="' . $tag->file->thumb('content-placeholder')->url() . '"
                                data-src="' . $tag->file->thumb('content')->url() . '"
                                alt="' . $tag->alt . '"
                                width="' . $tag->file->thumb('content')->width() . '"
                                height="' . $tag->file->thumb('content')->height() . '">
                            ' . (!$tag->file->caption()->isNotEmpty() ? '': '<figcaption class="figcaption not-prose">' . $tag->file->caption()->kt() . '</figcaption>') . '</figure>';

                    $html = str_replace(array('\r', '\n'), '', $html);

                    return $html;
                } else {
                    $tag->src = Url::to($tag->value);
                }
            },
        ],
    ],
]);
