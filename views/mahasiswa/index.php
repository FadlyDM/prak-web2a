<?php

use yii\helpers\Html;
use yii\grid\LinkPager;


?>

<?php foreach ($models as $model): ?>
    <?= $model->inisial ?>: <?= $model->id ?><br>
<?php endforeach; ?>

