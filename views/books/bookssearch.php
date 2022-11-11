<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
    use yii\widgets\ActiveForm;
?>

<h1>Поиск по книгам</h1>
<?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col">
            <?= $form->field($model, 'sentence')->label("Введите слово:") ?>
        </div>
        
    </div>
    <div class="row mt-2">
        <div class="col">
            <div class="d-flex">
                <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary ms-auto']) ?>
            </div>
        </div>
        
    </div>
<?php ActiveForm::end(); ?>

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