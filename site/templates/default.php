<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="container prose prose-lg">
    <h1><?= $page->title() ?></h1>
    <?= $page->text()->kirbytext() ?>
</main>

<?php snippet('footer') ?>
