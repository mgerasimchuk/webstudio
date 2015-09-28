<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TeamMember;

/**
 * TeamMemberSearch represents the model behind the search form about `common\models\TeamMember`.
 */
class TeamMemberSearch extends TeamMember
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['firstName', 'lastName', 'position', 'picture', 'socialTwitter', 'socialFacebook', 'socialLinkedIn', 'createdAt', 'updatedAt'], 'safe'],
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
        $query = TeamMember::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'socialTwitter', $this->socialTwitter])
            ->andFilterWhere(['like', 'socialFacebook', $this->socialFacebook])
            ->andFilterWhere(['like', 'socialLinkedIn', $this->socialLinkedIn]);

        return $dataProvider;
    }
}
