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

    <?= $form->field($model, 'depcargenca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depteleenca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depdireenca')->textInput(['maxlength' => true]) ?>

    <?php 
        $consulta = Tipos::find()->asArray()->where('tipoid_fk = 3')->all();
        $listado=ArrayHelper::map($consulta,'tiposid','tiposdesc');
        echo $form->field($model,"tiposid_fk")->dropDownList($listado,['prompt'=> 'Seleccione el Cargo']);
    ?>    

    <?= $form->field($model, 'depcorrenca')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
