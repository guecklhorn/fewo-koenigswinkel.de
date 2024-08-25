<?php if ($site->news()->isNotEmpty()) :?>
<section class="text-center grid gap-2 text-highlight border-2 rounded-xl overflow-hidden">
    <h2 class="p-4 bg-highlight text-white text-lg font-bold leading-tight">Aktuelles aus Königswinkel</h2>
    <div class="p-4 leading-relaxed"><?= $site->news()->kt() ?></div>
</section>
<?php endif ?>
