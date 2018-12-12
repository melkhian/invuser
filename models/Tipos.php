<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipos".
 *
 * @property int $tiposid
 * @property int $tipoid_fk Tipo
 * @property string $tiposdesc Descripción
 * @property int $tiposvalor Valor
 *
 * @property Dependencias[] $dependencias
 * @property Tipo $tipoidFk
 * @property Usuarios[] $usuarios
 * @property Usuarios[] $usuarios0
 */
class Tipos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipoid_fk', 'tiposdesc', 'tiposvalor'], 'required'],
            [['tipoid_fk', 'tiposvalor'], 'integer'],
            [['tiposdesc'], 'string', 'max' => 100],
            [['tipoid_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Tipo::className(), 'targetAttribute' => ['tipoid_fk' => 'tipoid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tiposid' => Yii::t('app', 'Tiposid'),
            'tipoid_fk' => Yii::t('app', 'Tipo'),
            'tiposdesc' => Yii::t('app', 'Descripción'),
            'tiposvalor' => Yii::t('app', 'Valor'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependencias()
    {
        return $this->hasMany(Dependencias::className(), ['tiposid_fk' => 'tiposid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoidFk()
    {
        return $this->hasOne(Tipo::className(), ['tipoid' => 'tipoid_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['tiposid_fk_1' => 'tiposid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios0()
    {
        return $this->hasMany(Usuarios::className(), ['tiposid_fk_2' => 'tiposid']);
    }
}
