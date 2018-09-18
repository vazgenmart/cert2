<div class="table">
    <table id="table">
        <thead id="tr1">
        <?php
        $certs = new \common\models\Organizations();
        $attrs = $certs->attributeLabels();
        foreach ($attrs as $c):?>
        <?php if($c == 'ID') continue;?>
            <th><?= $c ?></th>
        <?php endforeach; ?>
        </thead>
        <?php foreach ($res as $item): ?>
            <tr id="tr2">
                <td><?= $item->type;?></td>
                <td><?= implode(', ',$item->sds);?></td>
                <td><?= $item->accreditation_certificate;?></td>
                <td><?= $item->cert_created_date;?></td>
                <td><?= $item->cert_end_date;?></td>
                <td><?= $item->description;?></td>
                <td><?= $item->is_valid ? 'ДА' : 'НЕТ';?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>