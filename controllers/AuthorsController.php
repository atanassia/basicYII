<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Authors;
use app\models\CreateAuthorForm;
use app\models\DeleteAuthorForm;


class AuthorsController extends Controller
{
    public function actionIndex(){
        $authors = Authors::find()->all();

        return $this->render('index', [
            'authors' => $authors,
        ]);
    }


    public function actionCount(){
		$authors = Authors::find()
                ->select('authors.*')
                ->leftJoin('books', '`books`.`authorsId` = `authors`.`id`')
                ->addSelect('COUNT(`authors`.`id`) AS b_count')
                ->groupBy('`authors`.`id`')
                ->all();

        return $this->render('count', [
            'authors' => $authors,
        ]);
    }


    public function actionAuthor_create(){
		$model = new CreateAuthorForm();
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			$author = new Authors();
			$author->full_name = $model->full_name;
			$author->birth_date = $model->birth_date;
			$author->death_date = $model->death_date;
			// $author->save();
            if ($author->save()) {
                Yii::$app->session->setFlash('authorAddedSuccesfully');
            }else{
                Yii::$app->session->setFlash('authorDBError');
            }
			
		}elseif ($model->load(Yii::$app->request->post())){
            Yii::$app->session->setFlash('authorAddValidationError');
        }

        $query = Authors::find()->all();

		return $this->render('author_create', ['model' => new CreateAuthorForm(), 'authors' => $query]);
	}


    public function actionAuthor_delete(){
		$model = new DeleteAuthorForm();
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			$delete_author = Authors::find()->where('id = :id' , [':id' =>(int)$model->id])->one();
            if($delete_author){
                if ($delete_author->delete()) {
                    Yii::$app->session->setFlash('authorDeletedSuccesfully');
                }else{
                    Yii::$app->session->setFlash('authorDBError');
                }
            }else{
                Yii::$app->session->setFlash('authorDBError');
            }
		}elseif ($model->load(Yii::$app->request->post())){
            Yii::$app->session->setFlash('authorDeleteValidationError');
        }

        $query = Authors::find()->all();

		return $this->render('author_delete', ['model' => new DeleteAuthorForm(), 'authors' => $query]);
	}
}
