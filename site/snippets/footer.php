        <footer class="container">
            <?php
                $footerItems = $pages->find('impressum', 'datenschutz');
                if ($footerItems and $footerItems->isNotEmpty()):
            ?>
            <nav class="border-gray border-t py-4 mt-8">
                <ul class="flex flex-col md:flex-row items-center gap-4 md:gap-8 text-xs">
                    <li class="md:mr-auto">&copy; 2018–<?= date("Y"), " ", $site->title() ?></li>

                    <?php foreach($footerItems as $item): ?>
                    <li>
                        <a class="hover:text-highlight<?php e($item->isOpen(), ' text-highlight') ?>" href="<?= $item->url() ?>">
                            <?= $item->title() ?>
                        </a>
                    </li>
                    <?php endforeach ?>

                    <li><button class="hover:text-highlight" data-cockie="true">Cookie-Einstellungen</button></li>

                    <li><a href="<?= $site->panel()->url() ?>" class="hover:text-highlight" target="_blank">Login</a></li>
                </ul>
            </nav>
            <?php endif ?>
        </footer>

        <?= js([
            'assets/js/scripts.js',
            '@auto'
        ], true) ?>

        <?= js('media/plugins/michnhokn/cookie-banner/cookie-modal.js', [
            'defer' => true
        ]) ?>

        <?php snippet('cookie-modal', [
            'assets' => false,
            'showOnFirst' => true,
        ]) ?>

        <?php if (isFeatureAllowed('checkwxapi')): ?>
            <?= js('assets/js/metar.js', true) ?>
        <?php endif; ?>
    </body>
</html>
