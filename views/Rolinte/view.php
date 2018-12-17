<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Roles;
use app\models\Intecoma;

/* @var $this yii\web\View */
/* @var $model app\models\Rolinte */

$this->title = $model->rolinteid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rolintes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolinte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->rolinteid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->rolinteid], [
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
        $intecoma= Intecoma::findOne($model->intecomaid_fk);
        $rol= Roles::findOne($model->rolid_fk);
    ?>    
    <!-- FIN --> 

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'rolinteid',
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'rolid_fk',                
             'value'=> $rol['rolnomb'],
            ],
            /*FIN*/
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'intecomaid_fk',                
             'value'=> $intecoma['intecomafunc'],
            ],
            /*FIN*/
        ],
    ]) ?>

</div>
