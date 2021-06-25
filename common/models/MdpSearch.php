<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mdp;

/**
 * MdpSearch represents the model behind the search form of `common\models\Mdp`.
 */
class MdpSearch extends Mdp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['mot_de_passe', 'description', 'date_execution', 'adresse_site'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $user = Yii::$app->user->identity;
        $user_id = $user['id'];
        $query = Mdp::find();

        // add conditions that should always apply here
        $query->andFilterWhere([
            'user_id' => $user_id
        ]);
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
        ]);

        $query->andFilterWhere(['like', 'mot_de_passe', $this->mot_de_passe])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'date_execution', $this->date_execution])
            ->andFilterWhere(['like', 'adresse_site', $this->adresse_site]);

        return $dataProvider;
    }
}
