<h1>Countries</h1>
<ul>
    <?php foreach ($countries as $mahasiswa): ?>
        <li>
            <?= Html::encode("{$mahasiswa->name} ({$mahasiswa->code})") ?>:
            <?= $mahasiswa->population ?>
        </li>
    <?php endforeach; ?>
 </ul>

 <?= LinkPager::widget(['pagination' =>pagination]) ?>
