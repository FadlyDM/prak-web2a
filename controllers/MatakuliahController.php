<?php

namespace app\controllers;

class MatakuliahController extends \yii\web\Controller
{
    public function actionDaftarMatakuliah()
    {
        return $this->render('daftar-matakuliah');
    }
    public function actionRiwayat()
    {
        return $this->render('riwayat');
    }

}
