<?php
    if ($image = $page->images()->shuffle()->first());
?>

<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="container flex flex-col lg:grid grid-cols-2 grid-rows-3 gap-4 lg:gap-8 lg:aspect-video">
    <section
        class="bg-gray rounded shadow p-4 row-span-1 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-200 duration-700 bg-center lg:bg-left-top"
        style="background-image: url('<?= $image->thumb('tiles')->url() ?>');"
        data-animation="true">
    </section>

    <section
        class="bg-gray rounded shadow p-4 row-span-2 col-start-2 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-[400ms] duration-700 bg-center lg:bg-right-top"
        style="background-image: url('<?= $image->thumb('tiles')->url() ?>');"
        data-animation="true">
    </section>

    <section
        class="bg-gray rounded shadow p-4 row-span-2 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-[600ms] duration-700 bg-center lg:bg-left-bottom"
        style="background-image: url('<?= $image->thumb('tiles')->url() ?>');"
        data-animation="true">
    </section>

    <section
        class="bg-gray rounded shadow p-4 row-span-1 col-start-2 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-[800ms] duration-700 bg-center lg:bg-right-bottom"
        style="background-image: url('<?= $image->thumb('tiles')->url() ?>');"
        data-animation="true">
    </section>
</main>

<?php snippet('footer') ?>
