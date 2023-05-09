<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\Mahasiswa;

class MahasiswaController extends \yii\web\Controller
{
    // pemanggilan vie 'Biodata'
    public function actionBiodata()
    {
        return $this->render('biodata');
    }
    public function actionProfil()
    {
        return $this->render('profil');
    }
    public function actionSimpanKrs()
    {
        return $this->render('simpan-krs');
    }
    public function actionIndex()
    {
        $models = Mahasiswa::find()->all();
    
        return $this->render('index', [
            'models' => $models,
        ]);
    }
    



}

