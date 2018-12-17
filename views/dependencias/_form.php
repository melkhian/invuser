<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Tipos;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Dependencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dependencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'depnomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depenca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tiposid_fk_1')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->all(),'tiposid','tiposdesc'), ['prompt'=> 'Seleccione el Cargo']) ?>

    <?= $form->field($model, 'depteleenca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depdireenca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tiposid_fk_2')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 3')->all(),'tiposid','tiposdesc'), ['prompt'=> 'Seleccione la Dependencia']) ?>

    <?= $form->field($model, 'depcorrenca')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
