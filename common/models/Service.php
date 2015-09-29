<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yiidreamteam\upload;
use yii\web\UploadedFile;

/**
 * This is the model class for table "service".
 *
 * @property integer $id - дентификатор
 * @property string $name - наименование
 * @property string $description - описание
 * @property string $picture - лого
 * @property string $createdAt - дата/время создания
 * @property string $updatedAt - дата/время изменения
 */
class Service extends Base
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
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'string', 'max' => 255],
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
        ];
    }
}
