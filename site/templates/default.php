<?php snippet('head') ?>
<?php snippet('header') ?>
<?php snippet('menu') ?>

<h1><?= $page->title() ?></h1>
<?= $page->text()->kirbytext() ?>

<?php snippet('footer') ?>
