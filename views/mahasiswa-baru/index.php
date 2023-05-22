<?php

use yii\grid\GridView;
use yii\helpers\Html;

?>

<?= Html::button('Tambah Mahasiswa',['class' => 'btn btn-primary']);

?>

<?=  
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'nim',
            'nama',
            'kelas',
            'jurusan'
        ]

    ])
?>: <br>
