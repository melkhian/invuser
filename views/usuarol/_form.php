<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Usuarios;
use app\models\Roles;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuaid_fk')->dropDownList(ArrayHelper::map(Usuarios::find()->all(),'usuid','usucorr'), ['prompt'=> 'Seleccione el Usuario']) ?>

    <?= $form->field($model, 'rolid_fk')->dropDownList(ArrayHelper::map(Roles::find()->all(),'rolid','rolnomb'), ['prompt'=> 'Seleccione el Rol']) ?>


    <?= $form->field($model, 'vence')->widget( DatePicker::className(),
	['name' => 'check_issue_date', 
	'value' => date('d-M-Y', strtotime('+2 days')),
	'options' => ['placeholder' => 'Seleccione la fecha de Caducidad'],
	'pluginOptions' => [
		'format' => 'yyyy-mm-dd',
		'todayHighlight' => true]]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
