<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Tipos;

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

    <!-- INICIO 
        Obtengo el nombre de la llave foránea dentro del modelo para luego cambiar su valor a una descripción en la lista desplegable de Tipos
    -->
    <?php  
        $tipo1= Tipos::findOne($model->tiposid_fk_1);
        $tipo2= Tipos::findOne($model->tiposid_fk_2);
    ?>    
    <!-- FIN --> 

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'depid',
            'depnomb',
            'depenca',
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'tiposid_fk_1',                
             'value'=> $tipo1['tiposdesc'],
            ],
            /*FIN*/
            'depteleenca',
            'depdireenca',
            /*INICIO
            Reemplazo de tiposid_fk_2 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'tiposid_fk_2',                
             'value'=> $tipo2['tiposdesc'],
            ],
            /*FIN*/
            'depcorrenca',
        ],
    ]) ?>

</div>
