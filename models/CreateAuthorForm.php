<?php

namespace app\models;

use yii\base\Model;

class CreateAuthorForm extends Model
{
    public $full_name;
    public $birth_date;
    public $death_date;

    public function rules()
    {
        return [
            [['full_name', 'birth_date', 'death_date'], 'required'],
            ['birth_date', 'date', 'format'=>'yyyy-mm-dd'],
            ['death_date', 'date', 'format'=>'yyyy-mm-dd'],
        ];
    }
}