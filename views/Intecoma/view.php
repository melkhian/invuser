<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Interfaces;
use app\models\Comandos;

/* @var $this yii\web\View */
/* @var $model app\models\Intecoma */

$this->title = $model->intecomaid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Intecomas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intecoma-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->intecomaid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->intecomaid], [
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
        $interfaz= Interfaces::findOne($model->inteid_fk);
        $comando= Comandos::findOne($model->comaid_fk);
    ?>    
    <!-- FIN --> 

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'intecomaid',
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'inteid_fk',                
             'value'=> $interfaz['intenomb'],
            ],
            /*FIN*/
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'comaid_fk',                
             'value'=> $comando['comanomb'],
            ],
            /*FIN*/
            'intecomafunc',
            'intecomadesc',
        ],
    ]) ?>

</div>
