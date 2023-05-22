<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\Mahasiswa;
use yii\data\ActiveDataProvider;

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
        $query = Mahasiswa::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
    
        return $this->render('index');
    }
    



}

