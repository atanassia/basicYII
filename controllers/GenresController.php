<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Genres;


class GenresController extends Controller
{
    public function actionIndex(){
        $genres = Genres::find()->all();

        return $this->render('index', [
            'genres' => $genres,
        ]);
    }
}
