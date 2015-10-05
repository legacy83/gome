<?php

namespace foo\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class FooCriteria extends Foo
{
    public function rules()
    {
        return [
            [ [ 'id' ], 'integer' ],
            [ [ 'one', 'two', 'three' ], 'safe' ],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search( $params )
    {
        $query = Foo::find();

        $dataProvider = new ActiveDataProvider( [
            'query' => $query,
        ] );

        $this->load( $params );

        if ( !$this->validate() ) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere( [
            'id' => $this->id,
        ] );

        $query->andFilterWhere( [ 'like', 'one', $this->one ] )
            ->andFilterWhere( [ 'like', 'two', $this->two ] )
            ->andFilterWhere( [ 'like', 'three', $this->three ] );

        return $dataProvider;
    }
}