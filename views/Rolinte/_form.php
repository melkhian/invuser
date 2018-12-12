<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rolinte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rolinte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rolid_fk')->textInput() ?>

    <?= $form->field($model, 'intecomaid_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
