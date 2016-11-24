<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Author;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Books');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Books'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'title',
            'description',
            'author_id',
               
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
    <?php yii\helpers\ArrayHelper::map(Author::find()->select(['firstname','surname', 'id'])->all(), 'id','displayName') ?>
</div>
