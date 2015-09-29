<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "project_category".
 *
 * @property integer $id - идентификатор
 * @property string $name - наименование категории
 * @property string $createdAt - дата/время создания
 * @property string $updatedAt - дата/время изменения
 *
 * @property Project[] $projects - TODO CREATE COMMENT
 */
class ProjectCategory extends Base
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['categoryId' => 'id']);
    }
}
