<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "roles".
 *
 * @property int $rolid
 * @property string $rolnomb Nombre
 * @property string $roldesc Descripción
 *
 * @property Rolinte[] $rolintes
 * @property Usuarios[] $usuarios
 */
class Roles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rolnomb', 'roldesc'], 'required'],
            [['rolnomb'], 'string', 'max' => 30],
            [['roldesc'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rolid' => Yii::t('app', 'Rolid'),
            'rolnomb' => Yii::t('app', 'Nombre'),
            'roldesc' => Yii::t('app', 'Descripción'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolintes()
    {
        return $this->hasMany(Rolinte::className(), ['rolid_fk' => 'rolid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['rolid_fk' => 'rolid']);
    }
}
