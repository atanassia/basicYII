<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
?>


<h1>Количество книг у авторов</h1>
<table class="table table-striped mt-5">
	<thead>
		<tr>
			<td>№</td>
			<td>ФИО</td>
			<td>День рождения</td>
			<td>Дата смерти</td>
			<td>Количество книг</td>
		</tr>
	<thead>
	<tbody>
		<?php foreach ($authors as $author): ?>
            <tr>
                <td><?= Html::encode("{$author->id}") ?></td>
                <td><?= Html::encode("{$author->full_name}") ?></td>
                <td><?= Html::encode("{$author->birth_date}") ?></td>
                <td><?= Html::encode("{$author->death_date}") ?></td>
                <td><?= Html::encode("{$author->b_count}") ?></td>
            </tr>
		<?php endforeach; ?>
	</tbody>
</table>