<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\registros;

/**
 * registrosSearch represents the model behind the search form about `app\models\registros`.
 */
class registrosSearch extends registros
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha', 'hora', 'dia', 'mes'], 'safe'],
            [['num_pasajeros', 'id'], 'integer'],
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
        $query = registros::find();

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
            'num_pasajeros' => $this->num_pasajeros,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'fecha', $this->fecha])
            ->andFilterWhere(['like', 'hora', $this->hora])
            ->andFilterWhere(['like', 'dia', $this->dia])
            ->andFilterWhere(['like', 'mes', $this->mes]);

        return $dataProvider;
    }
}
