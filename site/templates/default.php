<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="container grid grid-cols-4 gap-4 lg:gap-8 xl:flex-1">
    <?php snippet('hero') ?>

    <?php snippet('aside-left') ?>

    <article class="col-span-full lg:col-span-3 xl:col-span-2 xl:self-start bg-white prose lg:prose-lg <?php e($page->status() === 'unlisted', ' !prose-sm') ?>">
        <h1 class=""><?= $page->title() ?></h1>

        <?php if ($page->subline()->isNotEmpty()) :?>
            <h2 class="!-mt-2 !mb-2"><?= $page->subline() ?></h2>
        <?php endif ?>

        <?php snippet('maps') ?>

        <?= $page->block()->toBlocks() ?>

        <?php snippet('calendar') ?>
    </article>

    <?php snippet('aside-right') ?>
</main>

<?php snippet('footer') ?>
