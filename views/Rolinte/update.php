<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rolinte */

$this->title = Yii::t('app', 'Update Rolinte: {nameAttribute}', [
    'nameAttribute' => $model->rolinteid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rolintes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rolinteid, 'url' => ['view', 'id' => $model->rolinteid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rolinte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
