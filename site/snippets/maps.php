<?php if ($page->uuid()->id() === 'ERDuznjfEtIcbdm0'): ?>
    <?php if (isFeatureAllowed('googlemaps')) :?>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.5689876361303!2d10.721461315630775!3d47.6150699791852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479c58d44ea07a9f%3A0x1a4e1f8aba151f07!2sFerienwohnung%20K%C3%B6nigswinkel!5e0!3m2!1sen!2sde!4v1644929979763!5m2!1sen!2sde" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <?php else: ?>
        <div class="cookie-box aspect-[4/3]">
            <?php snippet('cookies', ['title' => 'Um die Karte zu sehen, musst du die Cookies zulassen.']) ?>
        </div>
    <?php endif ?>
<?php endif ?>
