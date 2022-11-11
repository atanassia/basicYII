<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\bootstrap5\ActiveForm;
?>
<h1>Удалить автора</h1>

<?php $form = ActiveForm::begin(['id' => 'form']); ?>
	<?= $form->field($model, 'id')->textInput(['autofocus' => true])->textInput(['type'=>'number'])->label('id автора') ?>
	<div class="form-group">
        <?= Html::submitButton('Удалить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

<?php if (Yii::$app->session->hasFlash('authorDeletedSuccesfully')): ?>
    <div class="mt-5 mb-1 alert alert-success" role="alert">
        Запись удалена.
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('authorAddValidationError')): ?>
    <div class="mt-5 mb-1 alert alert-danger" role="alert">
        Данные не прошли валидацию.
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('authorDBError')): ?>
    <div class="mt-5 mb-1 alert alert-danger" role="alert">
        Не получилось удалить запись, попробуйте позже. 
        Или проверьте правильность введеных данных, возможно id автора не существует.
    </div>
<?php endif; ?>



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

