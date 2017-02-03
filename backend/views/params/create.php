<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ParamsModel */

$this->title = 'Create Params Model';
$this->params['breadcrumbs'][] = ['label' => 'Params Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="params-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
