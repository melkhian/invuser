<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rolinte".
 *
 * @property int $rolinteid
 * @property int $rolid_fk Rol
 * @property int $intecomaid_fk id Interfaz X comando
 *
 * @property Roles $rolidFk
 * @property Intecoma $intecomaidFk
 */
class Rolinte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rolinte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rolid_fk', 'intecomaid_fk'], 'required'],
            [['rolid_fk', 'intecomaid_fk'], 'integer'],
            [['rolid_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['rolid_fk' => 'rolid']],
            [['intecomaid_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Intecoma::className(), 'targetAttribute' => ['intecomaid_fk' => 'intecomaid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rolinteid' => Yii::t('app', 'Rolinteid'),
            'rolid_fk' => Yii::t('app', 'Rol'),
            'intecomaid_fk' => Yii::t('app', 'id Interfaz X comando'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolidFk()
    {
        return $this->hasOne(Roles::className(), ['rolid' => 'rolid_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntecomaidFk()
    {
        return $this->hasOne(Intecoma::className(), ['intecomaid' => 'intecomaid_fk']);
    }
}
