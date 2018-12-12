<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipos */

$this->title = Yii::t('app', 'Update Tipos: {nameAttribute}', [
    'nameAttribute' => $model->tiposid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tiposid, 'url' => ['view', 'id' => $model->tiposid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tipos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
