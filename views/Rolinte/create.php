<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Rolinte */

$this->title = Yii::t('app', 'Create Rolinte');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rolintes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolinte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
