<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tenders;

/**
 * TendersSearch represents the model behind the search form about `app\models\Tenders`.
 */
class TendersSearch extends Tenders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'lots'], 'integer'],
            [['product', 'icetrade_number', 'registration_number', 'product_subject', 'purchase_type', 'date_publication', 'customer', 'financing', 'deadline_for_proposals', 'date_and_time_of_trades', 'condition_on_the_current_day', 'comment'], 'safe'],
            [['start_price_in_byn', 'payment_in_byn'], 'number'],
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
        $query = Tenders::find();

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
            'id' => $this->id,
            'date_publication' => $this->date_publication,
            'start_price_in_byn' => $this->start_price_in_byn,
            'payment_in_byn' => $this->payment_in_byn,
            'deadline_for_proposals' => $this->deadline_for_proposals,
            'date_and_time_of_trades' => $this->date_and_time_of_trades,
            'lots' => $this->lots,
        ]);

        $query->andFilterWhere(['like', 'product', $this->product])
            ->andFilterWhere(['like', 'icetrade_number', $this->icetrade_number])
            ->andFilterWhere(['like', 'registration_number', $this->registration_number])
            ->andFilterWhere(['like', 'product_subject', $this->product_subject])
            ->andFilterWhere(['like', 'purchase_type', $this->purchase_type])
            ->andFilterWhere(['like', 'customer', $this->customer])
            ->andFilterWhere(['like', 'financing', $this->financing])
            ->andFilterWhere(['like', 'condition_on_the_current_day', $this->condition_on_the_current_day])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
