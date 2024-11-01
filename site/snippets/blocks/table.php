<?php
$rows = $block->rows()->toStructure();
if($rows->isNotEmpty()):
?>

<table class="table !mt-4">
    <tr>
        <th>Saison</th>
        <th>Datum</th>
        <th class="text-right">Preis</th>
    </tr>
    <?php foreach( $rows as $row): ?>
    <tr class="even:bg-muted/25">
        <td><?= $row->seasons()->html() ?></td>
        <td><?= $row->from()->toDate('d.m.') ?>–<?= $row->to()->toDate('d.m.') ?></td>
        <td class="text-right"><?= number_format ( $row->price()->toFloat(), 2 , ',', '.' ) ?> €</td>
    </tr>
    <?php endforeach ?>
</table>
<?php endif; ?>
