<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):

?>
    <ul class="border-gray border-t my-4 flex flex-col lg:flex-row">
        <?php foreach($items as $item): ?>
        <li class="grow">
            <a class="py-4 border-gray border-b flex lg:justify-center relative hover:text-highlight<?php e($item->isActive(), ' lg:after:w-3 lg:after:h-3 lg:after:bg-white lg:after:absolute lg:after:left-1/2 lg:after:top-[50px] lg:after:-ml-1.5 lg:after:border lg:after:border-white lg:after:border-b-gray lg:after:border-r-gray lg:after:rotate-45 font-bold text-highlight') ?>"
                title="<?= $item->title()->html() ?>"
                href="<?= $item->url() ?>">
                <?= $item->title()->html() ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>
