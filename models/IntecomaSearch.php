<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Intecoma;

/**
 * IntecomaSearch represents the model behind the search form of `app\models\Intecoma`.
 */
class IntecomaSearch extends Intecoma
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['intecomaid', 'inteid_fk', 'comaid_fk'], 'integer'],
            [['intecomafunc', 'intecomadesc'], 'safe'],
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
        $query = Intecoma::find();

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
            'intecomaid' => $this->intecomaid,
            'inteid_fk' => $this->inteid_fk,
            'comaid_fk' => $this->comaid_fk,
        ]);

        $query->andFilterWhere(['like', 'intecomafunc', $this->intecomafunc])
            ->andFilterWhere(['like', 'intecomadesc', $this->intecomadesc]);

        return $dataProvider;
    }
}
