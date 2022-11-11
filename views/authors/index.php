<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Авторы</h1>
<table class="table table-striped mt-5">
    <tr>
        <th>#</th>
        <th>ФИО</th>
        <th>Дата рождения</th>
        <th>Дата смерти</th>
    </tr>
    <?php foreach ($authors as $author): ?>
        <tr>
            <td><?= Html::encode("{$author->id}") ?></td>
            <td><?= Html::encode("{$author->full_name}") ?></td>
            <td><?= Html::encode("{$author->birth_date}") ?></td>
            <td><?= Html::encode("{$author->death_date}") ?></td>
        </tr>
    <?php endforeach; ?>
</table>
