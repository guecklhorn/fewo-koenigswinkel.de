<?php if ($site->toggleContact()->isTrue() && $site->contact()->isNotEmpty()) :?>
<section class="p-8 text-center grid gap-2 text-white bg-highlight rounded-xl">
    <i class="fa-kit fa-paper-plane-solid text-4xl text-yellow"></i>
    <p class="text-xl max-w-xs mx-auto"><?= $site->contact()->kt() ?></p>
    <a href="mailto:<?= $site->email() ?>" class="text-xl link"><?= $site->email() ?></a>
</section>
<?php endif ?>
