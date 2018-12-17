<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DependenciasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dependencias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'depid') ?>

    <?= $form->field($model, 'depnomb') ?>

    <?= $form->field($model, 'depenca') ?>

    <?= $form->field($model, 'tiposid_fk_1') ?>

    <?= $form->field($model, 'depteleenca') ?>

    <?php // echo $form->field($model, 'depdireenca') ?>

    <?php // echo $form->field($model, 'tiposid_fk_2') ?>

    <?php // echo $form->field($model, 'depcorrenca') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
