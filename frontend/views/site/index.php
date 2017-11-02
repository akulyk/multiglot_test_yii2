<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Вопросы к тестовому заданию';
?>
<div class="site-index">

    <div class="jumbotron">
        <h4><?=Html::encode($this->title);?></h4>
        <p class="lead">Данные для входа в
            <?php echo Html::a('админ. панель',Yii::$app->backendUrlManager->createAbsoluteUrl(['/']));?></p>
    <p class="lead">
        Электронная почта: urobel@wisoky.info<br>
        Пароль: secret
    </p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <?php echo $this->render('_answers');?>
            </div>
        </div>

    </div>
</div>
