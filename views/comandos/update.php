<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comandos */

$this->title = Yii::t('app', 'Update Comandos: {nameAttribute}', [
    'nameAttribute' => $model->comaid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Comandos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->comaid, 'url' => ['view', 'id' => $model->comaid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="comandos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
