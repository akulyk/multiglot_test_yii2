<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model application\entities\Author\Author */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Author',
]) . $author->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Authors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $author->name, 'url' => ['view', 'id' => $author->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="author-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'author' =>$author
    ]) ?>

</div>
