<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dependencias".
 *
 * @property int $depid
 * @property string $depnomb Nombre Dependencia
 * @property string $depenca Encargado de Dependencia
 * @property int $tiposid_fk_1 Cargo del Encargado
 * @property string $depteleenca Teléfono del Encargado
 * @property string $depdireenca Dirección del Encargado
 * @property int $tiposid_fk_2 Tipo de Dependencia
 * @property string $depcorrenca Correo Encargado
 *
 * @property Tipos $tiposidFk2
 * @property Tipos $tiposidFk1
 * @property Usuarios[] $usuarios
 */
class Dependencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dependencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['depnomb', 'depenca', 'tiposid_fk_1', 'depteleenca', 'depdireenca', 'tiposid_fk_2', 'depcorrenca'], 'required'],
            [['tiposid_fk_1', 'tiposid_fk_2'], 'integer'],
            [['depnomb', 'depenca', 'depdireenca'], 'string', 'max' => 50],
            [['depteleenca'], 'string', 'max' => 20],
            [['depcorrenca'], 'string', 'max' => 30],
            [['tiposid_fk_2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['tiposid_fk_2' => 'tiposid']],
            [['tiposid_fk_1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['tiposid_fk_1' => 'tiposid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'depid' => Yii::t('app', 'Depid'),
            'depnomb' => Yii::t('app', 'Nombre Dependencia'),
            'depenca' => Yii::t('app', 'Encargado de Dependencia'),
            'tiposid_fk_1' => Yii::t('app', 'Cargo del Encargado'),
            'depteleenca' => Yii::t('app', 'Teléfono del Encargado'),
            'depdireenca' => Yii::t('app', 'Dirección del Encargado'),
            'tiposid_fk_2' => Yii::t('app', 'Tipo de Dependencia'),
            'depcorrenca' => Yii::t('app', 'Correo Encargado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposidFk2()
    {
        return $this->hasOne(Tipos::className(), ['tiposid' => 'tiposid_fk_2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposidFk1()
    {
        return $this->hasOne(Tipos::className(), ['tiposid' => 'tiposid_fk_1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['depid_fk' => 'depid']);
    }
}
