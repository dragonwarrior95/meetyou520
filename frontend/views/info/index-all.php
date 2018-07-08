
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\InfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '在线工具';
Yii::$app->name = '在线工具';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-index-all">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('/layouts/nav', ['category' => $category]); ?>

</div>

