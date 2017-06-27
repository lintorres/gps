<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "diezmo".
 *
 * @property integer $id
 * @property integer $id_miembro
 * @property string $n_diezmante
 * @property string $n_receptor
 * @property string $fecha_recepcion
 * @property string $fecha_pago
 * @property string $estado
 * @property string $comprobante
 * @property string $comision
 *
 * @property Miembro $idMiembro
 */
class Diezmo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $file;
    public static function tableName()
    {
        return 'diezmo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_miembro', 'comision'], 'required'],
            [['id_miembro'], 'integer'],
            [['fecha_recepcion', 'fecha_pago'], 'safe'],
            [['estado'], 'string'],
            [['monto'], 'number'],
            [['comision'], 'number'],
            [['file'], 'file'],
            [['n_diezmante', 'n_receptor','comprobante'], 'string', 'max' => 250],
            [['id_miembro'], 'exist', 'skipOnError' => true, 'targetClass' => Miembro::className(), 'targetAttribute' => ['id_miembro' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id diezmo',
            'id_miembro' => 'Id miembro',
            'n_diezmante' => 'Nombre diezmante',
            'n_receptor' => 'Nombre receptor',
            'fecha_recepcion' => 'Fecha recepcion',
            'fecha_pago' => 'Fecha pago',
            'estado' => 'Estado',
            'file' => 'Comprobante',
            'monto' => 'Monto',
            'comision' => 'Comision',
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
