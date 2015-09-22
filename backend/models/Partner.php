<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partner".
 *
 * @property integer $id - идентификатор
 * @property string $name - имя
 * @property string $picture - лого
 * @property string $link - ссылка на сайт партнера
 * @property string $createdAt - дата/время создания
 * @property string $updatedAt - дата время изменения
 */
class Partner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createdAt', 'updatedAt'], 'safe'],
            [['name', 'picture', 'link'], 'string', 'max' => 255]
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
            'picture' => 'Picture',
            'link' => 'Link',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
