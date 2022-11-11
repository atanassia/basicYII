<?php

namespace app\models;
use yii\db\ActiveRecord;


class Books extends ActiveRecord
{
    public $count;

    public function getAuthors()
    {
        return $this->hasOne(Authors::class, ['id' => 'authorsId']);
    }

    public function getGenres()
    {
        return $this->hasOne(Genres::class, ['id' => 'genresId']);
    }
}
