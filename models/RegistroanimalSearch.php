<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Registroanimal;

/**
 * RegistroanimalSearch represents the model behind the search form about `app\models\Registroanimal`.
 */
class RegistroanimalSearch extends Registroanimal
{
    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['idregistro', 'noarete',  'madre'], 'integer'],
            [['fechacoloc', 'fechanac','raza','edad', 'sexo', 'especraza', 'empadre','estado'], 'safe'],
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
        $query = Registroanimal::find();

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
            'idregistro' => $this->idregistro,
            'noarete' => $this->noarete,
            'fechacoloc' => $this->fechacoloc,
            'fechanac' => $this->fechanac,
            'raza' => $this->raza,
            'madre' => $this->madre,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'edad', $this->edad])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'especraza', $this->especraza])
            ->andFilterWhere(['like', 'empadre', $this->empadre])
            ->andFilterWhere(['like', 'estado', $this->empadre]);

        return $dataProvider;
    }
}
