<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Talaba */

$this->title = 'Talaba ma\'lumotini tahrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Talabalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="talaba-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
