<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Ofrenda;

/**
 * OfrendaSearch represents the model behind the search form about `backend\models\Ofrenda`.
 */
class OfrendaSearch extends Ofrenda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_miembro'], 'integer'],
            [['n_ofrendante', 'n_receptor', 'fecha_recepcion', 'fecha_pago', 'tipo_ofrenda', 'estado'], 'safe'],
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
        $query = Ofrenda::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_miembro' => $this->id_miembro,
            'fecha_recepcion' => $this->fecha_recepcion,
            'comision' => $this->comision,
        ]);

        $query->andFilterWhere(['like', 'n_ofrendante', $this->n_ofrendante])
            ->andFilterWhere(['like', 'n_receptor', $this->n_receptor])
            ->andFilterWhere(['like', 'fecha_pago', $this->fecha_pago])
            ->andFilterWhere(['like', 'tipo_ofrenda', $this->tipo_ofrenda])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
