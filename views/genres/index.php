<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Жанры</h1>
<table class="table table-striped mt-5">
    <tr>
        <th>#</th>
        <th>Жанр</th>
    </tr>
    <?php foreach ($genres as $genre): ?>
        <tr>
            <td><?= Html::encode("{$genre->id}") ?></td>
            <td><?= Html::encode("{$genre->genrename}") ?></td>
        </tr>
    <?php endforeach; ?>
</table>
