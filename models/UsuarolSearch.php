<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuarol;

/**
 * UsuarolSearch represents the model behind the search form of `app\models\Usuarol`.
 */
class UsuarolSearch extends Usuarol
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuarolid', 'usuaid_fk', 'rolid_fk'], 'integer'],
            [['vence'], 'safe'],
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
        $query = Usuarol::find();

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
            'usuarolid' => $this->usuarolid,
            'usuaid_fk' => $this->usuaid_fk,
            'rolid_fk' => $this->rolid_fk,
            'vence' => $this->vence,
        ]);

        return $dataProvider;
    }
}
