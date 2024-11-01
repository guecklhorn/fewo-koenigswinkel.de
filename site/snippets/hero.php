<?php
    if ($page->banner()->isNotEmpty()) {
        $image = $page->banner()->toFile();
    } else {
        $image = $site->random()->toFiles()->shuffle()->first();
    }
?>

<header class="col-span-full order-first relative flex items-center">
    <div class="absolute left-0 z-10 flex-col gap-2 hidden lg:flex">
        <div class="bg-white px-4 py-2 font-bold text-4xl self-start">» <?= $page->title() ?></div>

        <?php if($page->subline()->isNotEmpty()): ?>
            <div class="bg-white px-4 py-2 text-2xl self-start font-light"><?= $page->subline() ?></div>
        <?php endif ?>
    </div>

    <figure class="figure !aspect-[16/9] lg:!aspect-[4/1] rounded-xl shadow">
        <img
            src="<?= $image->thumb('content-placeholder')->url() ?>"
            data-src="<?= $image->thumb('content')->url() ?>"
            class="lazyload"
            alt="<?= $image->alt() ?>"
            height="<?= $image->thumb('content')->height() ?>"
            width="<?= $image->thumb('content')->width() ?>"
        >
    </figure>
</header>
