<div class="alert alert-success mb-5" role="alert">
    Лабораторная работа №1
</div>

<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
?>

<div class="row">
    <div class="col-6">
        <h3 class="mb-4">Отзыв о ресторане</h3>
        <?php $form = ActiveForm::begin(['id' => 'lab1-form']); ?>
            <?= $form->field($model, 'name')->label('Ваше имя:')?>
            <?= $form->field($model, 'email')->input('email')->label('Ваш e-mail:')?>
            <?= $form->field($model, 'age')->textInput(['placeholder' => 'Возраст от 18 до 100', 'type'=>'number'])->label('Ваш возраст')?>
            <?= $form->field($model, 'visit_date')->label('Дата посещения:')->textInput(['type' => 'date', 'placeholder' => 'Формат ввода yyyy-M-d'])?>
            <?= $form->field($model, 'fav_kitchen')->label('Любимая кухня:')
                ->dropDownList(['Итальянская' => 'Итальянская', 'Китайская' => 'Китайская', 'Французская' => 'Французская'])?>
            <?= $form->field($model, 'friend_recommend')->label('Порекомендуете нас друзьям?')->radioList(array('Да'=>'Да', 'Нет'=>'Нет'));?>
            <?= $form->field($model, 'review')->label('Текст отзыва:')->textarea(['rows' => 6]) ?>
            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="col-6">
        <h3 class="mb-4">Переданный отзыв</h3>
        <table class="table table-striped table-bordered">
            <?php if ($valid == True): ?>
                <tbody>
                    <tr>
                        <td>Ваше имя:</td>
                        <td><?= Html::encode($model->name) ?></td>
                    </tr>

                    <tr>
                        <td>Ваш e-mail:</td>
                        <td><?= Html::encode($model->email) ?></td>
                    </tr>

                    <tr>
                        <td>Дата посещения:</td>
                        <td><?= Html::encode($model->visit_date) ?></td>
                    </tr>

                    <tr>
                        <td>Ваш возраст:</td>
                        <td><?= Html::encode($model->age) ?></td>
                    </tr>

                    <tr>
                        <td>Любимая кухня:</td>
                        <td><?= Html::encode($model->fav_kitchen) ?></td>
                    </tr>

                    <tr>
                        <td>Порекомендуете нас друзьям:</td>
                        <td><?= Html::encode($model->friend_recommend) ?></td>
                    </tr>

                    <tr>
                        <td>Текст отзыва:</td>
                        <td><?= Html::encode($model->review) ?></td>
                    </tr>
                </tbody>
            <?php else: ?>
                <tbody>
                    <tr>
                        <td>Данные не прошли проверку или их пока нет</td>
                    </tr>
                </tbody>
            <?php endif; ?>
        </table>
    </div>
</div>