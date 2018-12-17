<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Roles;
use app\models\Usuarios;
/* @var $this yii\web\View */
/* @var $model app\models\Usuarol */

$this->title = $model->usuarolid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Usuarols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarol-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->usuarolid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->usuarolid], [
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
        $usuario= Usuarios::findOne($model->usuaid_fk);
        $rol= Roles::findOne($model->rolid_fk);
    ?>    
    <!-- FIN --> 

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'usuarolid',
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'usuaid_fk',                
             'value'=> $usuario['usucorr'],
            ],
            /*FIN*/
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'rolid_fk',                
             'value'=> $rol['rolnomb'],
            ],
            /*FIN*/
            'vence',
        ],
    ]) ?>

</div>
