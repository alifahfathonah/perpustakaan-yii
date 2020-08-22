<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Buku;

/**
 * BukuSearch represents the model behind the search form of `app\models\Buku`.
 */
class BukuSearch extends Buku
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_kategori', 'id_penulis', 'id_penerbit'], 'integer'],
            [['judul', 'sinopsis', 'tahun_terbit'], 'safe'],
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
        $query = Buku::find();

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
            'id_kategori' => $this->id_kategori,
            'id_penulis' => $this->id_penulis,
            'id_penerbit' => $this->id_penerbit,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'sinopsis', $this->sinopsis])
            ->andFilterWhere(['like', 'tahun_terbit', $this->tahun_terbit]);

        return $dataProvider;
    }
}
