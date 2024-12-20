<?php if ($site->toggleEvent()->isTrue() && $site->news()->isNotEmpty()) :?>
<section class="text-center text-highlight border-2 rounded-xl overflow-hidden lg:-order-1">
    <?php if ($site->newstitle()->isNotEmpty()) :?>
        <h2 class="p-4 bg-highlight text-white text-lg font-bold leading-tight"><?= $site->newstitle() ?></h2>
    <?php endif ?>

    <div class="swiper !p-4" data-sliderContainer="true">
        <ul class="swiper-wrapper">
            <?php
                $news = $site->news()->toStructure();
                foreach($news as $item): ?>
                <li class="swiper-slide">
                    <?= $item->story()->kt() ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>
<?php endif ?>
