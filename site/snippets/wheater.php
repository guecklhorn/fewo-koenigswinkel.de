<?php if ($site->toggleWheater()->isTrue()) :?>
    <section>
        <?php if (isFeatureAllowed('checkwxapi')): ?>
            <header class="text-white bg-darkgreen uppercase font-bold px-4 py-2 text-sm">Wetter<span class="js-metar-station-name"></span></header>

            <div class="bg-white p-4 grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-1 xl:grid-cols-2 gap-4">
                <div class="flex flex-col justify-center items-center gap-2 border-2 border-lightgreen/50 p-4">
                    <p class="text-xs text-darkgreen/75 italic">Temperatur</p>

                    <div class="text-4xl"><i class="fa-kit fa-temperature-half-light"></i></div>

                    <p class="text-center leading-tight text-sm font-bold">
                        <span class="js-metar-temperature"></span>
                    </p>
                </div>

                <div class="flex flex-col justify-center items-center gap-2 border-2 border-lightgreen/50 p-4">
                    <p class="text-xs text-darkgreen/75 italic">Wind</p>

                    <div class="text-4xl"><i class="fa-kit fa-windsock-light"></i></div>

                    <p class="text-center leading-tight text-sm font-bold">
                        <span class="js-metar-wind-degrees"></span>
                        <span class="js-metar-wind-speed"></span>
                    </p>
                </div>

                <div class="flex flex-col justify-center items-center gap-2 border-2 border-lightgreen/50 p-4">
                    <p class="text-xs text-darkgreen/75 italic">Bewölkung</p>

                    <div class="text-4xl"><i class="fa-kit fa-cloud-fog-light"></i></div>

                    <p class="text-center leading-tight text-sm font-bold">
                        <span class="js-metar-clouds-layer-one"></span>
                    </p>
                </div>

                <div class="flex flex-col justify-center items-center gap-2 border-2 border-lightgreen/50 p-4">
                    <p class="text-xs text-darkgreen/75 italic">Luftdruck</p>

                    <div class="text-4xl"><i class="fa-kit fa-wind-light"></i></div>

                    <p class="text-center leading-tight text-sm font-bold">
                        <span class="js-metar-barometer"></span>
                    </p>
                </div>
            </div>
        <?php else: ?>
            <div class="aspect-[352/324] bg-gray p-4 flex flex-col gap-4 text-center border-2 border-dashed border-black/25 text-black/75 justify-center">
                <?php snippet('helpers/cookies', ['title' => 'Um das Wetter zu sehen, musst du die Cookies zulassen.']) ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>
