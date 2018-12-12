<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Intecoma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intecoma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inteid_fk')->textInput() ?>

    <?= $form->field($model, 'comaid_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
