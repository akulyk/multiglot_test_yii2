<?php

namespace application\entities\Author;

use application\forms\student\SearchForm;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\User;

/**
 * UserSearch represents the model behind the search form about `common\models\User`.
 */
class AuthorSearch extends Author
{
	public $email;
	public $query;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'birthday',
               ], 'string'],

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
        $query = Author::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
       //     'sort' => ['defaultOrder'=> ['rates'=>SORT_DESC]],
            'pagination' => [
                'pagesize' => 50,
            ],
        ]);



        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }





        $query->andFilterWhere(['like', 'name', $this->name])
                ->andFilterWhere(['like', 'birthday', $this->birthday]);





        return $dataProvider;
    }/**/

    protected function fullSearch($params,$query){

    }
}
