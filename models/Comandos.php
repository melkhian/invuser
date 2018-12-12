<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comandos".
 *
 * @property int $comaid
 * @property string $comanomb Nombre
 * @property string $comadesc Descripción
 *
 * @property Intecoma[] $intecomas
 */
class Comandos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comandos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comanomb', 'comadesc'], 'required'],
            [['comanomb'], 'string', 'max' => 50],
            [['comadesc'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comaid' => Yii::t('app', 'Comaid'),
            'comanomb' => Yii::t('app', 'Nombre'),
            'comadesc' => Yii::t('app', 'Descripción'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntecomas()
    {
        return $this->hasMany(Intecoma::className(), ['comaid_fk' => 'comaid']);
    }
}
