<?php

namespace app\models;

use yii\base\Model;

class RestaurantReviewForm extends Model
{
    public $name;
    public $email;
    public $visit_date;
    public $age;
    public $fav_kitchen;
    public $friend_recommend;
    public $review;

    public function rules()
    {

        return [
            [['name', 'email', 'visit_date', 'age', 'fav_kitchen', 'friend_recommend', 'review'], 'required'],
            [['name'], 'string', 'max'=>30, 'min'=>5],
            ['email', 'email'],
            ['visit_date', 'date', 'format'=>'yyyy-mm-dd'],
            [['age'], 'integer', 'max'=>100, 'min'=>18, 'message' => 'Пожалуйста, напишите возраст корректно, цифрами.'],
            ['review', 'trim'],
        ];
    }

    // public function validateNameLength(){
    //     $total_words= str_word_count($this->$name);
    //     if($total_words>30)
    //     {
    //        $this->addError($attribute, 'Слишком длинное имя');
    //     }
    //     if($total_words<5)
    //     {
    //        $this->addError($attribute, 'Слишком короткое имя');
    //     }
    // }

    // public function isValidDate($attribute, $params)
    // {

    //     if (!strtotime($this->$visit_date)) {
    //         $this->addError($attribute, 'Неправильный формат даты.');
    //     }
    // }

    // public function extraSpaces()
    // {
    //     if ($str != trim($this->$review) && !str_contains($this->$review, ' ')) {
    //         $this->addError($review, 'Удалите лишние пробелы.');
    //     }
    // }
}
