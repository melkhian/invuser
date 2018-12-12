<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Interfaces;

/**
 * InterfacesSearch represents the model behind the search form of `app\models\Interfaces`.
 */
class InterfacesSearch extends Interfaces
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inteid'], 'integer'],
            [['intenomb', 'intedesc'], 'safe'],
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
        $query = Interfaces::find();

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
            'inteid' => $this->inteid,
        ]);

        $query->andFilterWhere(['like', 'intenomb', $this->intenomb])
            ->andFilterWhere(['like', 'intedesc', $this->intedesc]);

        return $dataProvider;
    }
}
