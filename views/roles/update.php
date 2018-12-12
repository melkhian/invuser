<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Roles */

$this->title = Yii::t('app', 'Update Roles: {nameAttribute}', [
    'nameAttribute' => $model->rolid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Roles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rolid, 'url' => ['view', 'id' => $model->rolid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="roles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
