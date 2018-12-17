<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Tipos;
use app\models\Dependencias;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */

$this->title = $model->usuid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Usuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->usuid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->usuid], [
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
        $dependencia = Dependencias::findOne($model->depid_fk);
    ?>    
    <!-- FIN --> 

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'usuid',
            'usuiden',
            'usuprimnomb',
            'ususegunomb',
            'usuprimapel',
            'ususeguapel',
            'usutelepers',
            'usuteleofic',
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'tiposid_fk_1',                
             'value'=> $tipo1['tiposdesc'],
            ],
            /*FIN*/
            'usucorr',
            /*INICIO
            Reemplazo de tiposid_fk_2 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'tiposid_fk_2',                
             'value'=> $tipo2['tiposdesc'],
            ],
            /*FIN*/
            'usucont',
            /*INICIO
            Reemplazo de depid_fk a depnomb para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'depid_fk',                
             'value'=> $dependencia['depnomb'],
            ],
            /*FIN*/
        ],
    ]) ?>

</div>
