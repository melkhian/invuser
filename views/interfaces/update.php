<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Interfaces */

$this->title = Yii::t('app', 'Update Interfaces: {nameAttribute}', [
    'nameAttribute' => $model->inteid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inteid, 'url' => ['view', 'id' => $model->inteid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="interfaces-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
