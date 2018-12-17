<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'usuid') ?>

    <?= $form->field($model, 'usuiden') ?>

    <?= $form->field($model, 'usuprimnomb') ?>

    <?= $form->field($model, 'ususegunomb') ?>

    <?= $form->field($model, 'usuprimapel') ?>

    <?php // echo $form->field($model, 'ususeguapel') ?>

    <?php // echo $form->field($model, 'usutelepers') ?>

    <?php // echo $form->field($model, 'usuteleofic') ?>

    <?php // echo $form->field($model, 'tiposid_fk_1') ?>

    <?php // echo $form->field($model, 'usucorr') ?>

    <?php // echo $form->field($model, 'tiposid_fk_2') ?>

    <?php // echo $form->field($model, 'usucont') ?>

    <?php // echo $form->field($model, 'depid_fk') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
