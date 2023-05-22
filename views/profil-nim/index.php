<?php

use app\models\ProfilNim;
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
           'nim',
           'foto_profil',
           'id_mahasiswa',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ProfilNim $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nim' => $model->nim]);
                 }
            ],
        ],
    ]); ?>


</div>
