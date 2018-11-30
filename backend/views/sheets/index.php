<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sheets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sheets-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sheets', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'attribute' => 'image',
                'value' => function ($data) {
                    $img = $data->getImage();
                    return "<img src='{$img->getUrl('203x120')}'>";
                },
                'format' => 'html'

            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
