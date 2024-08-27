<?php if ($page->uuid()->id() === 'tZmTjrBvmIRPZVsh'): ?>
    <?php if (isFeatureAllowed('calendar')): ?>
        <script>
            window.addEventListener("load", () => {
                const container = document.getElementById("calendar");
                const link = document.createElement("a");
                const image = document.createElement("img");
                let columns = 2;
                let months = 6

                if (window.innerWidth >= 450 && window.innerWidth < 640) {
                    columns = 3,
                    months = 9
                } else if (window.innerWidth >= 640) {
                    columns = 4,
                    months = 12
                }

                link.setAttribute('href', 'http://www.traum-ferienwohnungen.de/44450/#kalender');
                link.setAttribute('title', '<?= $site->title() ?> | <?= $page->title() ?>');
                link.dataset.listing="44450"
                link.dataset.language="de"
                link.dataset.months=months
                link.dataset.columns=columns
                link.classList.add("traumfewo-calendar")
                container.appendChild(link);
                image.setAttribute('src', '//static.traum-ferienwohnungen.de/images/vermieten/tfw-logo.png')
                link.appendChild(image);

                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//www.traum-ferienwohnungen.de/widgets/boot.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","traumfewo-widget-js");
            });
        </script>

        <div class="not-prose -m-[10px]" id="calendar"></div>
    <?php else: ?>
        <div class="cookie-box aspect-square">
            <?php snippet('cookies', ['title' => 'Um den Belegungsplan zu sehen, musst du die Cookies zulassen.']) ?>
        </div>
    <?php endif; ?>
<?php endif ?>
