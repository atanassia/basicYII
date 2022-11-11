<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use app\models\Books;
use app\models\BooksFindForm;




class BooksController extends Controller
{
    public function actionIndex(){
        $books = Books::find()->all();

        return $this->render('index', [
            'books' => $books,
        ]);
    }

    public function actionCentury(){
        $books = Books::find()    
        ->where(['>=', 'release_date', '1900-01-01'])
        ->andWhere(['<=', 'release_date', '1999-12-31'])
        ->orderBy('release_date')
        ->all();

        return $this->render('century', [
            'books' => $books,
        ]);
    }

    public function actionBookssearch(){
		$model = new BooksFindForm();
		$query = Books::find();
		
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $sentence = $model->sentence;
			$new_model = new BooksFindForm();
			$query = $query->where(['LIKE', 'booksname',':sentence' , [':sentence' => $sentence]]);
		}

        return $this->render('bookssearch', [
			'model' => $model,
            'books' => $query->all(),
        ]);
    }

    
}
