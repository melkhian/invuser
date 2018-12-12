<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipos */

$this->title = Yii::t('app', 'Create Tipos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
