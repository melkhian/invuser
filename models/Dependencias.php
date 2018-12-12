<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dependencias".
 *
 * @property int $depid
 * @property string $depnomb Nombre Dependencia
 * @property string $depenca Encargado de Dependencia
 * @property string $depcargenca Cargo del Encargado
 * @property string $depteleenca Teléfono del Encargado
 * @property string $depdireenca Dirección del Encargado
 * @property int $tiposid_fk Tipo de Dependencia
 * @property string $depcorrenca Correo Encargado
 *
 * @property Tipos $tiposidFk
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
            [['depnomb', 'depenca', 'depcargenca', 'depteleenca', 'depdireenca', 'tiposid_fk', 'depcorrenca'], 'required'],
            [['tiposid_fk'], 'integer'],
            [['depnomb', 'depenca', 'depcargenca', 'depdireenca'], 'string', 'max' => 50],
            [['depteleenca'], 'string', 'max' => 20],
            [['depcorrenca'], 'string', 'max' => 30],
            [['tiposid_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['tiposid_fk' => 'tiposid']],
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
            'depcargenca' => Yii::t('app', 'Cargo del Encargado'),
            'depteleenca' => Yii::t('app', 'Teléfono del Encargado'),
            'depdireenca' => Yii::t('app', 'Dirección del Encargado'),
            'tiposid_fk' => Yii::t('app', 'Tipo de Dependencia'),
            'depcorrenca' => Yii::t('app', 'Correo Encargado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposidFk()
    {
        return $this->hasOne(Tipos::className(), ['tiposid' => 'tiposid_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['depid_fk' => 'depid']);
    }
}
