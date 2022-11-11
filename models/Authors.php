<?php

namespace app\models;
use yii\db\ActiveRecord;


class Authors extends ActiveRecord
{
	public $b_count;

	public function getBooks()
    {
		return $this->hasOne(Books::class, ['authorsId' => 'id']);
	}
}
