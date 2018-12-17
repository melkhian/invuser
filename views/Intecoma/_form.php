<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Interfaces;
use app\models\Comandos;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Intecoma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intecoma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inteid_fk')->dropDownList(ArrayHelper::map(Interfaces::find()->all(),'inteid','intenomb'), ['prompt'=> 'Seleccione la Interfaz']) ?>

    <?= $form->field($model, 'comaid_fk')->dropDownList(ArrayHelper::map(Comandos::find()->all(),'comaid','comanomb'), ['prompt'=> 'Seleccione el Comando']) ?>

    <?= $form->field($model, 'intecomafunc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intecomadesc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
