<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Книги отсортированнные</h1>
<table class="table table-striped mt-5">
    <tr>
        <th>#</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Дата выхода</th>
        <th>Автор</th>
        <th>Жанр</th>
    </tr>

    <?php foreach ($books as $book): ?>
        <tr>
            <td><?= Html::encode("{$book->id}") ?></td>
            <td><?= Html::encode("{$book->booksname}") ?></td>
            <td><?= Html::encode("{$book->description}") ?></td>
            <td><?= Html::encode("{$book->release_date}") ?></td>
            <td><?= Html::encode("{$book->authors->full_name}") ?></td>
            <td><?= Html::encode("{$book->genres->genrename}") ?></td>
        </tr>
    <?php endforeach; ?>
</table>
