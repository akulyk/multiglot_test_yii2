<?php
use common\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\assets\DateTimepickerAsset;

DateTimepickerAsset::register($this);

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \shop\forms\auth\LoginForm */

$this->title = 'Вход в личный кабинет';

$fieldTemplate = "
                  <div class='col-md-4 col-label'>{label}</div>
                  <div class='col-md-8 input'>{input}\n{hint}\n{error}</div>
                  ";

$fieldOptions1 = [
    'options' => ['class' => 'row has-feedback light-blue'],
    'template'=>$fieldTemplate,
    'inputTemplate' => "<span class='glyphicon glyphicon-envelope form-control-feedback'></span>{input}"
];

$fieldOptions2 = [
    'options' => ['class' => 'row has-feedback blue'],
    'template'=>$fieldTemplate,
    'inputTemplate' => "<span class='glyphicon glyphicon-lock form-control-feedback'></span>{input}"
];
?>

<div class="login-box">

    <!-- /.login-logo -->
    <div class="login-box-body">
        <h4><?php echo Html::encode($this->title);?></h4>

        <?= Alert::widget() ?>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                    <?php $form = ActiveForm::begin(
                            ['id' => 'login-form',

                             'enableClientValidation' => false,
                                'options' => [
                                    'class'=>'form-inline',
                                ]]); ?>

                    <?= $form
                        ->field($model, 'email', $fieldOptions1)
                        ->label($model->getAttributeLabel('email'))
                        ->textInput()
                    ?>

                    <?= $form
                        ->field($model, 'password', $fieldOptions2)
                        ->label($model->getAttributeLabel('password'))
                        ->passwordInput() ?>

                    <div class="row">

                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="col-xs-3 pull-right">
                                <?= Html::submitButton('Войти',
                                    ['class' => 'btn btn-primary btn-block btn-flat log-btn',
                                        'name' => 'login-button']) ?>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                    <?php ActiveForm::end(); ?>

            </div>
        </div>


    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->

<div class="proposal">
    <div class="row">
        <div class="col-md-6">
            <div class="p-img">
                <?php echo Html::img('/images/first.png',['class'=>'img']);?>
            </div>
            <div class="p-text">
                <div class="p-title">

                    Онлайн-Репетиторам
                </div>
                <p>В Вашем личном кабинете у Вас будет возможность:</p>
                <ul>
                    <li>Отмечать состоявшиеся уроки с Вашими студентами</li>
                    <li>Видеть оставшее количество олпаченного каждым Вашим студентом времени</li>
                    <li>Найти контакты нужного Вам студента</li>
                    <li>Переносить и отметь занятия согласно
                        <a href="#" class="blue">регламенту отмены и переноса занятий</a></li>
                    <li>Задать вопрос в администрацию "Мультиглот"</li>
                    <li>Быть в курсе последних новостей прокта "Мультиглот"</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-img">
                <?php echo Html::img('/images/second.png',['class'=>'img']);?>
            </div>

            <div class="p-text">
                <div class="p-title">

                    Онлайн-Студентам
                </div>
                <p>В Вашем личном кабинете у Вас будет возможность:</p>
                <ul>
                    <li>Видеть оставшееся количество оплаченных скайп-занятий</li>
                    <li>Переносить или отменять оставшиеся онлайн-уроки</li>
                    <li>Сверить статистику состоявшихся онлайн-сессий</li>
                    <li>Следить за оплатами и оплачивать занятия</li>
                    <li>Связываться с администрацией онлайн-ресурса "Мультиглот"</li>
                    <li>Следить за новостями онлайн-проекта "Мультиглот"</li>
                </ul>
            </div>
        </div>
    </div>
</div>
