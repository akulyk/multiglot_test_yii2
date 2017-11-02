<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\Alert;

/* @var $this yii\web\View */
/* @var $model application\entities\Author\Author */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Authors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="author-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo Alert::widget();?>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'birthday',
        ],
    ]) ?>

</div>
