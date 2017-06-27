<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "miembro".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $f_nacimiento
 * @property string $f_ingreso
 * @property string $correo
 * @property string $tipo
 * @property string $estado
 *
 * @property Diezmo[] $diezmos
 * @property Ofrenda[] $ofrendas
 */
class Miembro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'miembro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo', 'estado'], 'required'],
            [['tipo', 'estado'], 'string'],
            [['nombre', 'f_nacimiento', 'f_ingreso', 'correo'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id miembro',
            'nombre' => 'Nombre',
            'f_nacimiento' => 'Fecha nacimiento',
            'f_ingreso' => 'Fecha ingreso',
            'correo' => 'Correo',
            'tipo' => 'Tipo',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiezmos()
    {
        return $this->hasMany(Diezmo::className(), ['id_miembro' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOfrendas()
    {
        return $this->hasMany(Ofrenda::className(), ['id_miembro' => 'id']);
    }
}
