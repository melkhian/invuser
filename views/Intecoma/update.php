<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Intecoma */

$this->title = Yii::t('app', 'Update Intecoma: {nameAttribute}', [
    'nameAttribute' => $model->intecomaid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Intecomas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->intecomaid, 'url' => ['view', 'id' => $model->intecomaid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="intecoma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
