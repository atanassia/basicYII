<?php

namespace app\models;

use yii\base\Model;

class DeleteAuthorForm extends Model
{
    public $id;

    public function rules()
    {
        return [
            ['id', 'required'],
            ['id', 'integer', 'min'=>1, 'message' => 'Пожалуйста, напишите возраст корректно, цифрами.']
        ];
    }
}