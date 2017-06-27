<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ofrenda".
 *
 * @property integer $id
 * @property integer $id_miembro
 * @property string $n_ofrendante
 * @property string $n_receptor
 * @property string $fecha_recepcion
 * @property string $fecha_pago
 * @property string $comision
 * @property string $tipo_ofrenda
 * @property string $estado
 *
 * @property Miembro $idMiembro
 */
class Ofrenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'ofrenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_miembro', 'n_ofrendante', 'n_receptor', 'fecha_pago', 'comision', 'tipo_ofrenda', 'estado'], 'required'],
            [['id_miembro'], 'integer'],
            [['fecha_recepcion'], 'safe'],
            [['monto'], 'number'],
            [['comision'], 'number'],
            [['file'], 'file'],
            [['tipo_ofrenda', 'estado'], 'string'],
            [['n_ofrendante', 'n_receptor','comprobante', 'fecha_pago'], 'string', 'max' => 250],
            [['id_miembro'], 'exist', 'skipOnError' => true, 'targetClass' => Miembro::className(), 'targetAttribute' => ['id_miembro' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id Ofrenda',
            'id_miembro' => 'Id Miembro',
            'n_ofrendante' => 'Nombre Ofrendante',
            'n_receptor' => 'Nombre Receptor',
            'fecha_recepcion' => 'Fecha Recepcion',
            'fecha_pago' => 'Fecha Pago',
            'monto' => 'Monto',
            'comision' => 'Comision',
            'tipo_ofrenda' => 'Tipo Ofrenda',
            'estado' => 'Estado',
            'file' => 'Comprobante',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMiembro()
    {
        return $this->hasOne(Miembro::className(), ['id' => 'id_miembro']);
    }
}
