<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarol".
 *
 * @property int $usuarolid
 * @property int $usuaid_fk Usuario
 * @property int $rolid_fk Rol
 * @property string $vence Fecha de Caducidad
 *
 * @property Usuarios $usuaidFk
 * @property Roles $rolidFk
 */
class Usuarol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuaid_fk', 'rolid_fk', 'vence'], 'required'],
            [['usuaid_fk', 'rolid_fk'], 'integer'],
            [['vence'], 'safe'],
            [['usuaid_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['usuaid_fk' => 'usuid']],
            [['rolid_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['rolid_fk' => 'rolid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuarolid' => Yii::t('app', 'Usuarolid'),
            'usuaid_fk' => Yii::t('app', 'Usuario'),
            'rolid_fk' => Yii::t('app', 'Rol'),
            'vence' => Yii::t('app', 'Fecha de Caducidad'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuaidFk()
    {
        return $this->hasOne(Usuarios::className(), ['usuid' => 'usuaid_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolidFk()
    {
        return $this->hasOne(Roles::className(), ['rolid' => 'rolid_fk']);
    }
}
