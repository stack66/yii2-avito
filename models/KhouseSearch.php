<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Khouse;

/**
 * KhouseSearch represents the model behind the search form about `app\models\Khouse`.
 */
class KhouseSearch extends Khouse
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'obj', 'floor', 'floors', 'm2', 'region', 'addr', 'price', 'min_price', 'max_price', 'link_show_obj', 'descr', 'date', 'last_updated', 'tel'], 'safe'],
        ];
    }
    public $min_price;
    public $max_price;
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
        $query = Khouse::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        			'sort'=> ['defaultOrder' => ['date' => SORT_DESC]]

        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'obj', $this->obj])
            ->andFilterWhere(['like', 'floor', $this->floor])
            ->andFilterWhere(['like', 'floors', $this->floors])
            ->andFilterWhere(['like', 'm2', $this->m2])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'addr', $this->addr])
            //->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['between', 'price', $this->min_price, $this->max_price])
            ->andFilterWhere(['like', 'link_show_obj', $this->link_show_obj])
            ->andFilterWhere(['like', 'descr', $this->descr])
            ->andFilterWhere(['like', 'last_updated', $this->last_updated])
            ->andFilterWhere(['like', 'tel', $this->tel]);



        return $dataProvider;
    }
}
