<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dependencias */

$this->title = $model->depid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dependencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependencias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->depid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->depid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'depid',
            'depnomb',
            'depenca',
            'depcargenca',
            'depteleenca',
            'depdireenca',
            'tiposid_fk',
            'depcorrenca',
        ],
    ]) ?>

</div>
