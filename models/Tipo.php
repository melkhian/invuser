<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo".
 *
 * @property int $tipoid
 * @property string $tipodesc Descripción
 *
 * @property Tipos[] $tipos
 */
class Tipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipodesc'], 'required'],
            [['tipodesc'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tipoid' => Yii::t('app', 'Tipoid'),
            'tipodesc' => Yii::t('app', 'Descripción'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipos()
    {
        return $this->hasMany(Tipos::className(), ['tipoid_fk' => 'tipoid']);
    }
}
