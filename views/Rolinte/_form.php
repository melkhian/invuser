<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Roles;
use app\models\Intecoma;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Rolinte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rolinte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rolid_fk')->dropDownList(ArrayHelper::map(Roles::find()->all(),'rolid','rolnomb'), ['prompt'=> 'Seleccione el Rol']) ?>

    <?= $form->field($model, 'intecomaid_fk')->dropDownList(ArrayHelper::map(Intecoma::find()->all(),'intecomaid','intecomafunc'), ['prompt'=> 'Seleccione la Funcionalidad']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
