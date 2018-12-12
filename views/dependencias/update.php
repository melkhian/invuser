<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dependencias */

$this->title = Yii::t('app', 'Update Dependencias: {nameAttribute}', [
    'nameAttribute' => $model->depid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dependencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->depid, 'url' => ['view', 'id' => $model->depid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dependencias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
