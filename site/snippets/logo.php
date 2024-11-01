<?php if($image = $site->logo()->toFile()): ?>
    <?= svg($image) ?>
<?php endif ?>
