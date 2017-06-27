<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Diezmo;

/**
 * DiezmoSearch represents the model behind the search form about `backend\models\Diezmo`.
 */
class DiezmoSearch extends Diezmo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_miembro'], 'integer'],
            [['n_diezmante', 'n_receptor', 'fecha_recepcion', 'fecha_pago', 'estado', 'comprobante'], 'safe'],
            [['comision'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Diezmo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }


        return $dataProvider;
    }
}
