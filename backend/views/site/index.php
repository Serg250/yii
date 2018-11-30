<?php

/* @var $this yii\web\View */

$this->title = 'Панель управления';
?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Панель управления</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <p>Зарегистрировано пользователей:</p>
                    <h3>1</h3>
<!--                    <h3>--><?//= $countUsers;?><!--</h3>-->


                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <p>Дней сайту:</p>
                    <?= '<h3>'.floor((time()-mktime(0, 0, 0, 11, 23, 2018))/(60*60*24)).'</h3>';
                    ;?>

                </div>
                <div class="icon">
                    <i class="ion ion-ios-calendar-outline"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->


