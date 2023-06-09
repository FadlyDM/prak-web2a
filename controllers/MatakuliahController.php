<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\Mk;
use yii\data\ActiveDataProvider;

class MataKuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mk::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
    
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
