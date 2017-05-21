<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sexo;

/**
 * SexoSearch represents the model behind the search form about `app\models\Sexo`.
 */
class SexoSearch extends Sexo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idsexo'], 'integer'],
            [['sexo'], 'safe'],
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
        $query = Sexo::find();

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
            'idsexo' => $this->idsexo,
        ]);

        $query->andFilterWhere(['like', 'sexo', $this->sexo]);

        return $dataProvider;
    }
}
