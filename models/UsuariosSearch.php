<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuarios;

/**
 * UsuariosSearch represents the model behind the search form of `app\models\Usuarios`.
 */
class UsuariosSearch extends Usuarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuid', 'tiposid_fk_1', 'tiposid_fk_2', 'depid_fk', 'rolid_fk'], 'integer'],
            [['usuiden', 'usuprimnomb', 'ususegunomb', 'usuprimapel', 'ususeguapel', 'usutelepers', 'usuteleofic', 'usucorr', 'usucont'], 'safe'],
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
        $query = Usuarios::find();

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
            'usuid' => $this->usuid,
            'tiposid_fk_1' => $this->tiposid_fk_1,
            'tiposid_fk_2' => $this->tiposid_fk_2,
            'depid_fk' => $this->depid_fk,
            'rolid_fk' => $this->rolid_fk,
        ]);

        $query->andFilterWhere(['like', 'usuiden', $this->usuiden])
            ->andFilterWhere(['like', 'usuprimnomb', $this->usuprimnomb])
            ->andFilterWhere(['like', 'ususegunomb', $this->ususegunomb])
            ->andFilterWhere(['like', 'usuprimapel', $this->usuprimapel])
            ->andFilterWhere(['like', 'ususeguapel', $this->ususeguapel])
            ->andFilterWhere(['like', 'usutelepers', $this->usutelepers])
            ->andFilterWhere(['like', 'usuteleofic', $this->usuteleofic])
            ->andFilterWhere(['like', 'usucorr', $this->usucorr])
            ->andFilterWhere(['like', 'usucont', $this->usucont]);

        return $dataProvider;
    }
}
