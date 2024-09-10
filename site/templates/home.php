<?php
    $image = $site?->random()?->toFiles()?->shuffle()?->first();
?>

<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="container flex flex-col lg:grid grid-cols-2 grid-rows-3 gap-4 lg:gap-8 lg:aspect-video text-2xl">
    <section
        class="hidden lg:block bg-gray rounded-xl shadow p-4 lg:p-8 row-span-1 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-200 duration-700 bg-center lg:bg-left-top overflow-hidden flex flex-col"
        style="background-image: url('<?= $image ? $image->thumb('tiles')->url() : '' ?>');"
        data-animation="true">
    </section>

    <section
        class="bg-gray rounded-xl shadow p-4 lg:p-8 row-span-2 col-start-2 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-[400ms] duration-700 bg-center lg:bg-right-top overflow-hidden flex flex-col"
        style="background-image: url('<?= $image ? $image->thumb('tiles')->url() : '' ?>');"
        data-animation="true">
        <?php if ($site->news()->isNotEmpty()) :?>
            <h2 class="bg-white text-highlight self-start px-4 py-2 font-bold inline-block lg:relative -left-8">» <?= $site->newsTitle() ?></h2>
            <div class="text-white bg-black/75 p-4 mt-4 lg:mt-8 leading-relaxed lg:self-start"><?= $site->news()->kt() ?></div>
        <?php endif ?>
    </section>

    <section
        class="bg-gray rounded-xl shadow p-4 lg:p-8 row-span-2 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-[600ms] duration-700 bg-center lg:bg-left-bottom overflow-hidden flex flex-col"
        style="background-image: url('<?= $image ? $image->thumb('tiles')->url() : '' ?>');"
        data-animation="true">
        <?php if ($site->contact()->isNotEmpty()) :?>
            <h2 class="bg-white text-highlight self-start px-4 py-2 font-bold inline-block lg:relative -left-8">» <?= $site->contactTitle() ?></h2>
            <div class="text-white bg-black/75 p-4 mt-4 lg:mt-8 leading-relaxed lg:self-start"><?= $site->contact()->kt() ?></div>
        <?php endif ?>
    </section>

    <section
        class="bg-gray rounded-xl shadow p-4 lg:p-8 row-span-1 col-start-2 bg-no-repeat bg-cover lg:bg-[length:992px_576px] xl:bg-[length:1248px_720px] 2xl:bg-[length:1504px_864px] opacity-0 transition -translate-y-8 delay-[800ms] duration-700 bg-center lg:bg-right-bottom overflow-hidden flex flex-col justify-center 2xl:justify-start"
        style="background-image: url('<?= $image ? $image->thumb('tiles')->url() : '' ?>');"
        data-animation="true">
        <?php if ($site->toggleWheater()->isTrue() && isFeatureAllowed('checkwxapi')) :?>
            <h2 class="bg-white text-highlight self-start px-4 py-2 font-bold lg:relative -left-8 lg:hidden 2xl:inline-block">» <?= $site->wheaterTitle() ?></h2>
            <ul class="grid grid-cols-3 justify-between gap-4 lg:gap-8 text-white mt-4 lg:mt-0 2xl:mt-8">
                <li class="flex flex-col justify-center items-center gap-2 bg-black/75 p-4">
                    <p class="text-xs font-bold">Temperatur</p>

                    <div class="text-3xl"><i class="fa-kit fa-temperature-half-light"></i></div>

                    <p class="text-center leading-tight text-base whitespace-nowrap">
                        <span class="js-metar-temperature"></span>
                    </p>
                </li>

                <li class="flex flex-col justify-center items-center gap-2 bg-black/75 p-4">
                    <p class="text-xs font-bold">Wind</p>

                    <div class="text-3xl"><i class="fa-kit fa-windsock-light"></i></div>

                    <p class="text-center leading-tight text-base whitespace-nowrap">
                        <span class="js-metar-wind-degrees"></span>
                        <span class="js-metar-wind-speed"></span>
                    </p>
                </li>

                <li class="flex flex-col justify-center items-center gap-2 bg-black/75 p-4">
                    <p class="text-xs font-bold">Bewölkung</p>

                    <div class="text-3xl"><i class="fa-kit fa-cloud-fog-light"></i></div>

                    <p class="text-center leading-tight text-base whitespace-nowrap">
                        <span class="js-metar-clouds-layer-one"></span>
                    </p>
                </li>
            </ul>
        <?php endif ?>
    </section>
</main>

<?php snippet('footer') ?>
