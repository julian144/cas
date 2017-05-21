<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Especraza;

/**
 * EspecrazaSearch represents the model behind the search form about `app\models\Especraza`.
 */
class EspecrazaSearch extends Especraza
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idespecraza'], 'integer'],
            [['especraza'], 'safe'],
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
        $query = Especraza::find();

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
            'idespecraza' => $this->idespecraza,
        ]);

        $query->andFilterWhere(['like', 'especraza', $this->especraza]);

        return $dataProvider;
    }
}
