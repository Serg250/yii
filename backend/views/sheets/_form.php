<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sheets */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sheets-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?php $img = $model->getImage();?>
    <?= $form->field($model, 'image')->fileInput() ?>
    <?php if($img->id):?>
        <a href="<?= $img->getUrl();?>" data-fancybox="images">
            <img class="form_img" src='<?= $img->getUrl('203x120');?>'>
        </a>
    <?php endif;?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
