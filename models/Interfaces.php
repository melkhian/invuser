<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "interfaces".
 *
 * @property int $inteid
 * @property string $intenomb Nombre
 * @property string $intedesc Descripción
 *
 * @property Intecoma[] $intecomas
 */
class Interfaces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'interfaces';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['intenomb', 'intedesc'], 'required'],
            [['intenomb'], 'string', 'max' => 50],
            [['intedesc'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inteid' => Yii::t('app', 'Inteid'),
            'intenomb' => Yii::t('app', 'Nombre'),
            'intedesc' => Yii::t('app', 'Descripción'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntecomas()
    {
        return $this->hasMany(Intecoma::className(), ['inteid_fk' => 'inteid']);
    }
}
