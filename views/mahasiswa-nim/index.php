<?php

use app\models\MahasiswaNim;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

?>
<div class="mahasiswa-nim-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Tambah Mahasiswa', ['class' => 'btn btn-primary']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'profilnim.id_mahasiswa',
            'nama',
            'kelas',
            'jurusan',
            'profilnim.foto_profil',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MahasiswaNim $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
