<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\DateTimepickerAsset;
use kartik\select2\Select2;
use yii\web\JsExpression;
use app\models\City;

/* @var $this yii\web\View */
/* @var $model application\entities\Author\Book */
/* @var $form yii\widgets\ActiveForm */

DateTimepickerAsset::register($this);
$url = \yii\helpers\Url::to(['author/get-list']);
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'author_id')->widget(Select2::classname(), [
        'initValueText' => $model->authorName, // set the initial display text
        'options' => ['placeholder' => 'Найти автора ...'],
        'language' => 'ru',
        'pluginOptions' => [
            'allowClear' => true,
            'minimumInputLength' => 3,
            'language' => [
                'errorLoading' => new JsExpression("function () { return 'Ожидание результатов...'; }"),
            ],
            'ajax' => [
                'url' => $url,
                'dataType' => 'json',
                'data' => new JsExpression('function(params) { return {q:params.term}; }')
            ],
            'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
            'templateResult' => new JsExpression('function(city) { return city.text; }'),
            'templateSelection' => new JsExpression('function (city) { return city.text; }'),
        ],
    ]); ?>

    <?= $form->field($model, 'date_at')
        ->textInput(['class'=>'form-control datetimepicker',
            'value'=>$model->dateFormatted]) ?>

    <div class="form-group">
        <?= Html::submitButton($book->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $book->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
