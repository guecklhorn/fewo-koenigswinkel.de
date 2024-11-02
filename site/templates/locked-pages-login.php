<?php snippet('head') ?>

<form method="post" class="flex flex-col gap-4 mx-auto p-4 max-w-md">
    <label class="label">Passwort eingeben</label>
    <div class="control">
        <input class="border border-muted p-2"
            type="password"
            name="password"
            value="<?= esc(get('password', '')) ?>"
            placeholder="Passwort">
    </div>

    <?php if ($error): ?>
    <p class="text-[red]"><?= $error ?></p>
    <?php endif ?>

    <input type="hidden" name="csrf" value="<?= csrf() ?>">

    <button class="button self-start">Seite öffnen</button>
</form>
