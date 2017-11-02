<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model application\entities\Author\Book */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Book',
]) . $book->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Books'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $book->title, 'url' => ['view', 'id' => $book->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'book'=>$book
    ]) ?>

</div>
