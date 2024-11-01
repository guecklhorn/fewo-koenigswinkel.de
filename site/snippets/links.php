<?php if ($site->toggleLink()->isTrue() && $site->news()->isNotEmpty()) :?>
    <section class="text-center text-highlight border-2 rounded-xl overflow-hidden">
        <?php if ($site->linktitle()->isNotEmpty()) :?>
            <h2 class="p-4 bg-highlight text-white text-lg font-bold leading-tight"><?= $site->linktitle() ?></h2>
        <?php endif ?>

        <ul class="p-4 flex flex-col gap-6">
        <?php
            $links = $site->links()->toStructure();
            foreach($links as $link): ?>
            <li>
                <a href="<?= $link->url() ?>"
                    target="_blank"
                    class="text-black hover:text-highlight block"
                    title="<?= $link->url() ?>">
                    <h3 class="text-xl"><?= $link->title() ?></h3>
                    <p class="text-xs"><?= $link->description() ?></p>
                </a>
            </li>
        <?php endforeach ?>
        </ul>
</section>
<?php endif; ?>
