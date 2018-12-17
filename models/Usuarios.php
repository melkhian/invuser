<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $usuid
 * @property string $usuiden Número de Identificación
 * @property string $usuprimnomb Primer Nombre
 * @property string $ususegunomb Segundo Nombre
 * @property string $usuprimapel Primer Apellido
 * @property string $ususeguapel Segundo Apellido
 * @property string $usutelepers Teléfono Personal
 * @property string $usuteleofic Teléfono Oficina
 * @property int $tiposid_fk_1 Cargo de Usuario
 * @property string $usucorr Correo Electrónico
 * @property int $tiposid_fk_2 Estado
 * @property string $usucont Contraseña
 * @property int $depid_fk Dependencia del Usuario
 *
 * @property Dependencias $depidFk
 * @property Tipos $tiposidFk1
 * @property Tipos $tiposidFk2
 * @property Usuarol[] $usuarols
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuiden', 'usuprimnomb', 'usuprimapel', 'usutelepers', 'usuteleofic', 'tiposid_fk_1', 'usucorr', 'tiposid_fk_2', 'usucont', 'depid_fk'], 'required'],
            [['tiposid_fk_1', 'tiposid_fk_2', 'depid_fk'], 'integer'],
            [['usuiden', 'usuprimnomb', 'ususegunomb', 'usuprimapel', 'ususeguapel', 'usutelepers', 'usuteleofic'], 'string', 'max' => 20],
            [['usucorr'], 'string', 'max' => 30],
            [['usucont'], 'string', 'max' => 200],
            [['depid_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Dependencias::className(), 'targetAttribute' => ['depid_fk' => 'depid']],
            [['tiposid_fk_1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['tiposid_fk_1' => 'tiposid']],
            [['tiposid_fk_2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['tiposid_fk_2' => 'tiposid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuid' => Yii::t('app', 'Usuid'),
            'usuiden' => Yii::t('app', 'Número de Identificación'),
            'usuprimnomb' => Yii::t('app', 'Primer Nombre'),
            'ususegunomb' => Yii::t('app', 'Segundo Nombre'),
            'usuprimapel' => Yii::t('app', 'Primer Apellido'),
            'ususeguapel' => Yii::t('app', 'Segundo Apellido'),
            'usutelepers' => Yii::t('app', 'Teléfono Personal'),
            'usuteleofic' => Yii::t('app', 'Teléfono Oficina'),
            'tiposid_fk_1' => Yii::t('app', 'Cargo de Usuario'),
            'usucorr' => Yii::t('app', 'Correo Electrónico'),
            'tiposid_fk_2' => Yii::t('app', 'Estado'),
            'usucont' => Yii::t('app', 'Contraseña'),
            'depid_fk' => Yii::t('app', 'Dependencia del Usuario'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepidFk()
    {
        return $this->hasOne(Dependencias::className(), ['depid' => 'depid_fk']);
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
    public function getTiposidFk2()
    {
        return $this->hasOne(Tipos::className(), ['tiposid' => 'tiposid_fk_2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarols()
    {
        return $this->hasMany(Usuarol::className(), ['usuaid_fk' => 'usuid']);
    }
}
