<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PagesModel */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pages Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'keywords',
            'description',
            'title',
            'content:ntext',
            'url:url',
        ],
    ]) ?>

</div>
