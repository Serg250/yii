<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sheets */

$this->title = 'Create Sheets';
$this->params['breadcrumbs'][] = ['label' => 'Sheets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sheets-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
