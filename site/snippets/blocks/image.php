<?php

/** @var \Kirby\Cms\Block $block */
$alt     = $block->alt();
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$link    = $block->link();
$ratio   = $block->ratio()->or('auto');
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src()->esc();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt->or($image->alt());
    $src = $image;
}

?>
<?php if ($src): ?>
<figure class="figure"<?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?>>
    <?php if ($link->isNotEmpty()): ?>
    <a href="<?= Str::esc($link->toUrl()) ?>">
        <img src="<?= $src->thumb('content-placeholder')->url() ?>"
            data-src="<?= $src->thumb('content')->url() ?>"
            class="lazyload"
            alt="<?= $alt->esc() ?>"
            width="<?= $src->width() ?>"
            height="<?= $src->height() ?>">
    </a>
    <?php else: ?>
    <img src="<?= $src->thumb('content-placeholder')->url() ?>"
        data-src="<?= $src->thumb('content')->url() ?>"
        class="lazyload"
        alt="<?= $alt->esc() ?>"
        width="<?= $src->width() ?>"
        height="<?= $src->height() ?>">
    <?php endif ?>

    <?php if ($caption->isNotEmpty()): ?>
    <figcaption class="figcaption not-prose">
        <?= $caption ?>
    </figcaption>
    <?php endif ?>
</figure>
<?php endif ?>
