<?php
    $image = $site?->images()?->shuffle()?->first();
?>

<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="container flex flex-col lg:grid grid-cols-2 grid-rows-3 gap-4 lg:gap-8 lg:aspect-video text-2xl">
    <section
        class="hidden lg:block bg-gray rounded shadow p-8 row-span-1 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-200 duration-700 bg-center lg:bg-left-top"
        style="background-image: url('<?= $image ? $image->thumb('tiles')->url() : '' ?>');"
        data-animation="true">
    </section>

    <section
        class="bg-gray rounded shadow p-8 row-span-2 col-start-2 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-[400ms] duration-700 bg-center lg:bg-right-top "
        style="background-image: url('<?= $image ? $image->thumb('tiles')->url() : '' ?>');"
        data-animation="true">
        <h2 class="bg-white px-4 py-2 font-bold inline-block lg:relative -left-8">» Aktuelles aus Königswinkel</h2>
        <div class="text-white bg-black/75 p-4 mt-8 leading-relaxed"><?= $site->news()->kt() ?></div>
    </section>

    <section
        class="bg-gray rounded shadow p-8 row-span-2 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-[600ms] duration-700 bg-center lg:bg-left-bottom"
        style="background-image: url('<?= $image ? $image->thumb('tiles')->url() : '' ?>');"
        data-animation="true">
        <h2 class="bg-white px-4 py-2 font-bold inline-block lg:relative -left-8">» So erreichen Sie uns</h2>
        <div class="text-white bg-black/75 p-4 mt-8 leading-relaxed"><?= $site->contact()->kt() ?></div>
    </section>

    <section
        class="bg-gray rounded shadow p-8 row-span-1 col-start-2 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-[800ms] duration-700 bg-center lg:bg-right-bottom"
        style="background-image: url('<?= $image ? $image->thumb('tiles')->url() : '' ?>');"
        data-animation="true">
        <h2 class="bg-white px-4 py-2 font-bold inline-block lg:relative -left-8">» Das Wetter im Allgäu</h2>
        <div class="text-white bg-black/75 p-4 mt-8 leading-relaxed">Wetter</div>
    </section>
</main>

<?php snippet('footer') ?>
