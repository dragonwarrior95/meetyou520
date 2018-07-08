<?php
use yii\helpers\Html;

?>

<div class="nav-content">
    <ul class="nav nav-tabs">
        <li class="active">
            <?= Html::a('所有', [\yii\helpers\Url::to('index-all')], ['class' => 'btn btn-success']) ?>
        </li>
        <?php
            foreach ($category as $key => $value) { ?>
                <li>
                    <?= Html::a($value['name'], [\yii\helpers\Url::to($value['route'])], ['class' => 'btn btn-success']) ?>
                </li>
            <?php } ?>
    </ul>
</div>
