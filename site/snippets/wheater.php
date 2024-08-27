<?php if ($site->toggleWheater()->isTrue()) :?>
    <section>
        <?php if (isFeatureAllowed('checkwxapi')): ?>
            <ul class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-1 xl:grid-cols-2 gap-4">
                <li class="flex flex-col justify-center items-center gap-2 border-2 p-4 rounded-xl">
                    <p class="text-xs">Temperatur</p>

                    <div class="text-4xl"><i class="fa-kit fa-temperature-half-light"></i></div>

                    <p class="text-center leading-tight text-sm font-bold">
                        <span class="js-metar-temperature"></span>
                    </p>
                </li>

                <li class="flex flex-col justify-center items-center gap-2 border-2 p-4 rounded-xl">
                    <p class="text-xs">Wind</p>

                    <div class="text-4xl"><i class="fa-kit fa-windsock-light"></i></div>

                    <p class="text-center leading-tight text-sm font-bold">
                        <span class="js-metar-wind-degrees"></span>
                        <span class="js-metar-wind-speed"></span>
                    </p>
                </li>

                <li class="flex flex-col justify-center items-center gap-2 border-2 p-4 rounded-xl">
                    <p class="text-xs">Bewölkung</p>

                    <div class="text-4xl"><i class="fa-kit fa-cloud-fog-light"></i></div>

                    <p class="text-center leading-tight text-sm font-bold">
                        <span class="js-metar-clouds-layer-one"></span>
                    </p>
                </li>

                <li class="flex flex-col justify-center items-center gap-2 border-2 p-4 rounded-xl">
                    <p class="text-xs">Luftdruck</p>

                    <div class="text-4xl"><i class="fa-kit fa-wind-light"></i></div>

                    <p class="text-center leading-tight text-sm font-bold">
                        <span class="js-metar-barometer"></span>
                    </p>
                </li>
            </ul>
        <?php else: ?>
            <div class="cookie-box aspect-square">
                <?php snippet('cookies', ['title' => 'Um das Wetter zu sehen, musst du die Cookies zulassen.']) ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>
