<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rolinte;

/**
 * RolinteSearch represents the model behind the search form of `app\models\Rolinte`.
 */
class RolinteSearch extends Rolinte
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rolinteid', 'rolid_fk', 'intecomaid_fk'], 'integer'],
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
        $query = Rolinte::find();

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
            'rolinteid' => $this->rolinteid,
            'rolid_fk' => $this->rolid_fk,
            'intecomaid_fk' => $this->intecomaid_fk,
        ]);

        return $dataProvider;
    }
}
