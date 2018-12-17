<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarol */

$this->title = Yii::t('app', 'Update Usuarol: {nameAttribute}', [
    'nameAttribute' => $model->usuarolid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Usuarols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usuarolid, 'url' => ['view', 'id' => $model->usuarolid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="usuarol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
