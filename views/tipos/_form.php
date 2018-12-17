<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Tipo;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Tipos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipoid_fk')->dropDownList(ArrayHelper::map(Tipo::find()->all(),'tipoid','tipodesc'), ['prompt'=> 'Seleccione el Tipo']) ?>

    <?= $form->field($model, 'tiposdesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tiposvalor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
