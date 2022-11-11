<?php
    use yii\bootstrap5\Html;
    use yii\helpers\Url;
?>

<div class="alert alert-success" role="alert">
    Лабораторная работа №2
</div>

<div class="">
    <ul>
        <li>
            <a href="<?= Html::encode(Url::to(['country/index'])) ?>">1 - По странам</a>
        </li>
        <li>
            <a href="<?= Html::encode(Url::to(['authors/index'])) ?>">1 - По авторам</a>
        </li>
        <li>
            <a href="<?= Html::encode(Url::to(['genres/index'])) ?>">2 - По жанрам</a>
        </li>
        <li>
            <a href="<?= Html::encode(Url::to(['books/index'])) ?>">2 - По книгам</a>
        </li>
        <li>
            <a href="<?= Html::encode(Url::to(['books/century'])) ?>">3 - По книгам 20 век</a>
        </li>
        <li>
            <a href="<?= Html::encode(Url::to(['authors/count'])) ?>">3 - По авторам count</a>
        </li>
        <li>
            <a href="<?= Html::encode(Url::to(['books/bookssearch'])) ?>">3 - Поиск по книгам</a>
        </li>
        <li>
            <a href="<?= Html::encode(Url::to(['authors/author_create'])) ?>">4 - Добавить автора</a>
        </li>
        <li>
            <a href="<?= Html::encode(Url::to(['authors/author_delete'])) ?>">5 - Удалить автора</a>
        </li>
    </ul>
</div>