<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "project".
 *
 * @property integer $id - идентификатор
 * @property string $name - наименование
 * @property string $description - красткое описание
 * @property string $note - полное описание
 * @property string $picture - лого
 * @property string $createdAt - дата/время создания
 * @property string $updatedAt - дата время изменения
 * @property integer $categoryId - идентификатор категории
 *
 * @property ProjectCategory $category - категория проекта
 */
class Project extends Base
{
    /**
     * @var UploadedFile file attribute
     */
    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoryId'], 'integer'],
            [['name', 'description', 'note', 'picture'], 'string', 'max' => 255],
            [['file'], 'image'],
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
            'description' => 'Description',
            'note' => 'Note',
            //'picture' => 'Picture',
            //'createdAt' => 'Created At',
            //'updatedAt' => 'Updated At',
            'categoryId' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ProjectCategory::className(), ['id' => 'categoryId']);
    }
}
