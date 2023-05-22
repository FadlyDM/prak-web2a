<?php

namespace app\controllers;

use app\models\Transaksi;
use yii\data\ActiveDataProvider;
use yii\web\Controller;


class TransaksiController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Transaksi::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}