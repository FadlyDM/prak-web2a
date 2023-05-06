<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    // pemanggilan vie 'Biodata'
    public function actionBiodata()
    {
        return $this->render('biodata');
    }
    public function actionProfil()
    {
        return $this->render('profil');
    }

}

