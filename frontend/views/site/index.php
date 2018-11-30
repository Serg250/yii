<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?php $image = $model[0]->getImage();

    ?>
    <img src="<?= $image->getUrl()?>">
</div>
