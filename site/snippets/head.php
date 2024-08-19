<!DOCTYPE html>
<html lang="de" class="scroll-smooth">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="<?= $page->description()->esc()->isNotEmpty() ? $page->description()->esc() : $site->description()->esc() ?>">
        <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
        <link href="<?= url('assets/fonts/fontawesome/webfonts/custom-icons.woff2') ?>" as="font" crossorigin="anonymous">
        <link rel="preload" href="<?= url('assets/fonts/IBMPlexMono/IBMPlexMono-Regular.woff2') ?>" as="font" crossorigin="anonymous">
        <link rel="preload" href="<?= url('assets/fonts/IBMPlexMono/IBMPlexMono-Italic.woff2') ?>" as="font" crossorigin="anonymous">
        <link rel="preload" href="<?= url('assets/fonts/IBMPlexMono/IBMPlexMono-SemiBold.woff2') ?>" as="font" crossorigin="anonymous">
        <link rel="preload" href="<?= url('assets/fonts/IBMPlexMono/IBMPlexMono-SemiBoldItalic.woff2') ?>" as="font" crossorigin="anonymous">
        <?= css([
            'assets/css/styles.css',
            '@auto'
        ]) ?>
        <link rel="shortcut icon" type="image/x-icon" href="<?= url('assets/favicons/favicon.ico') ?>">
        <?php if ($page->isHomePage()): ?>
            <link rel="canonical" href="https://fewo-koenigswinkel.de/"/>
        <?php endif; ?>
        <?php snippet('ogp') ?>
    </head>
    <body class="">
