<?php

namespace application\entities\Author;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use application\entities\Author\Book;

/**
 * BookSearch represents the model behind the search form about `application\entities\Author\Book`.
 */
class BookSearch extends Book
{
    public $author;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'author_id'], 'integer'],
            [['title','author', 'date_at'], 'safe'],
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
        $query = Book::find();

        $query->joinWith(['author']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['author'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with "tbl_"
            'asc' => [Author::tableName().'.name' => SORT_ASC],
            'desc' => [Author::tableName().'.name' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'author_id' => $this->author_id,
            'date_at' => $this->date_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
        ->andFilterWhere(['like', Author::tableName().'.name', $this->author]);

        return $dataProvider;
    }
}
