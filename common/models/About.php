<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "{{%about}}".
 *
 * @property integer $id
 * @property string $firstTitle
 * @property string $secondTitle
 * @property string $description
 * @property string $picture
 * @property integer $isShow
 * @property string $createdAt
 * @property string $updatedAt
 */
class About extends Base
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
        return '{{%about}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['firstTitle', 'secondTitle', 'description', 'isShow'], 'required'],
            [['isShow'], 'integer'],
            [['firstTitle', 'secondTitle', 'description'], 'string', 'max' => 255],
            ['file', 'image'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstTitle' => 'First Title',
            'secondTitle' => 'Second Title',
            'description' => 'Description',
            //'picture' => 'Picture',
            'isShow' => 'Is Show',
            //'createdAt' => 'Created At',
            //'updatedAt' => 'Updated At',
        ];
    }
}
