<?php

namespace app\models;

use yii\base\Model;

class BooksFindForm extends Model
{
    public $sentence;

    public function rules()
    {
        return [
            ['sentence', 'required', 'message' => 'Введите текст.'],
        ];
    }
}