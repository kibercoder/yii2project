<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PagesModel */

$this->title = 'Create Pages Model';
$this->params['breadcrumbs'][] = ['label' => 'Pages Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
