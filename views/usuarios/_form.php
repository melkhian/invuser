<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Tipos;
use app\models\Roles;
use app\models\Dependencias;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuiden')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuprimnomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ususegunomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuprimapel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ususeguapel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usutelepers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuteleofic')->textInput(['maxlength' => true]) ?>

    <?php 
        $consulta = Tipos::find()->asArray()->where('tipoid_fk = 1')->all();
        $listado=ArrayHelper::map($consulta,'tiposid','tiposdesc');
        echo $form->field($model,"tiposid_fk_1")->dropDownList($listado,['prompt'=> 'Seleccione el Cargo']);
    ?>

    <?= $form->field($model, 'usucorr')->textInput(['maxlength' => true]) ?>

    <?php 
        $consulta = Tipos::find()->asArray()->where('tipoid_fk = 2')->all();
        $listado=ArrayHelper::map($consulta,'tiposid','tiposdesc');
        echo $form->field($model,"tiposid_fk_2")->dropDownList($listado,['prompt'=> 'Seleccione el Estado']);
    ?>

    <?= $form->field($model, 'usucont')->textInput(['maxlength' => true]) ?>

    <?php 
        $consulta = Dependencias::find()->asArray()->all();
        $listado=ArrayHelper::map($consulta,'depid','depnomb');
        echo $form->field($model,"depid_fk")->dropDownList($listado,['prompt'=> 'Seleccione una Dependencia']);
    ?>

    <?php 
        $consulta = Roles::find()->asArray()->all();
        $listado=ArrayHelper::map($consulta,'rolid','rolnomb');
        echo $form->field($model,"rolid_fk")->dropDownList($listado,['prompt'=> 'Seleccione un Rol']);
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
