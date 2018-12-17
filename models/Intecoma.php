<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "intecoma".
 *
 * @property int $intecomaid
 * @property int $inteid_fk Interfaz
 * @property int $comaid_fk Comando
 * @property string $intecomafunc Funcionalidad
 * @property string $intecomadesc Descripción
 *
 * @property Comandos $comaidFk
 * @property Interfaces $inteidFk
 * @property Rolinte[] $rolintes
 */
class Intecoma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'intecoma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inteid_fk', 'comaid_fk', 'intecomafunc', 'intecomadesc'], 'required'],
            [['inteid_fk', 'comaid_fk'], 'integer'],
            [['intecomafunc'], 'string', 'max' => 50],
            [['intecomadesc'], 'string', 'max' => 200],
            [['comaid_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Comandos::className(), 'targetAttribute' => ['comaid_fk' => 'comaid']],
            [['inteid_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Interfaces::className(), 'targetAttribute' => ['inteid_fk' => 'inteid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'intecomaid' => Yii::t('app', 'Intecomaid'),
            'inteid_fk' => Yii::t('app', 'Interfaz'),
            'comaid_fk' => Yii::t('app', 'Comando'),
            'intecomafunc' => Yii::t('app', 'Funcionalidad'),
            'intecomadesc' => Yii::t('app', 'Descripción'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComaidFk()
    {
        return $this->hasOne(Comandos::className(), ['comaid' => 'comaid_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInteidFk()
    {
        return $this->hasOne(Interfaces::className(), ['inteid' => 'inteid_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolintes()
    {
        return $this->hasMany(Rolinte::className(), ['intecomaid_fk' => 'intecomaid']);
    }
}
