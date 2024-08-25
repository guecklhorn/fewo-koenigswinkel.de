<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="container grid grid-cols-4 gap-4 lg:gap-8 xl:flex-1">
    <?php snippet('hero') ?>

    <?php snippet('aside-left') ?>

    <article class="col-span-full lg:col-span-3 xl:col-span-2 xl:self-start bg-white prose lg:prose-lg mx-auto">
        <h1><?= $page->title() ?></h1>
        <?= $page->text()->kirbytext() ?>
    </article>

    <?php snippet('aside-right') ?>
</main>

<?php snippet('footer') ?>
