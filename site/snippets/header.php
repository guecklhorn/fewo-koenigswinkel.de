<header class="container gap-4 py-4 bg-white lg:flex">
    <div class="flex items-center lg:mr-8 gap-4">
        <a href="<?= $site->url() ?>"
            title="Zur Startseite"
            class="fill-highlight w-48">
            <?php snippet('logo') ?>
        </a>

        <?php snippet('hamburger') ?>
    </div>

    <nav id="hs-basic-collapse-hamburger"
        class="hidden lg:block w-full overflow-hidden transition-[height] duration-500 bg-white text-lg lg:text-base"
        aria-labelledby="hs-basic-collapse">
        <?php snippet('menu') ?>
    </nav>
</header>
