<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\bootstrap5\ActiveForm;
?>
<h1>Добавить автора</h1>

<?php $form = ActiveForm::begin(['id' => 'form']); ?>
	<?= $form->field($model, 'full_name')->textInput(['autofocus' => true])->label('ФИО автора') ?>
	<?= $form->field($model, 'birth_date')->textInput(['type'=>'date'])->label('Дата рождения') ?>
	<?= $form->field($model, 'death_date')->textInput(['type'=>'date'])->label('Дата смерти') ?>
	<div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

<?php if (Yii::$app->session->hasFlash('authorAddedSuccesfully')): ?>
    <div class="mt-5 mb-1 alert alert-success" role="alert">
        Запись создана
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('authorAddValidationError')): ?>
    <div class="mt-5 mb-1 alert alert-danger" role="alert">
        Данные не прошли валидацию.
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('authorDBError')): ?>
    <div class="mt-5 mb-1 alert alert-danger" role="alert">
        Не получилось добавить запись, попробуйте позже.
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

