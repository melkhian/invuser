<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Tipo;

/* @var $this yii\web\View */
/* @var $model app\models\Tipos */

$this->title = $model->tiposid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->tiposid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->tiposid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <!-- INICIO 
        Obtengo el nombre de la llave foránea dentro del modelo para luego cambiar su valor a una descripción en la lista desplegable de Tipos
    -->
    <?php  
        $tipo= Tipo::findOne($model->tiposid_fk);
    ?>    
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tiposid',
            /*INICIO
            Reemplazo de tiposid_fk a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            [   'attribute' => 'tiposid_fk',                
                'value'=> $tipo['tipodesc'],
            ],
            /*FIN*/
            'tiposdesc',
            'tiposvalor',
        ],
    ]) ?>

</div>
