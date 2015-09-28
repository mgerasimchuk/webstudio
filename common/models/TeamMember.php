<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "team_member".
 *
 * @property integer $id - идентификатор
 * @property string $firstName - имя
 * @property string $lastName - фамилия
 * @property string $position - должность
 * @property string $picture - аватар
 * @property string $socialTwitter - ссылка на twitter
 * @property string $socialFacebook - ссылка на facebook
 * @property string $socialLinkedIn - ссылка LinkedIn
 * @property string $createdAt - дата/время создания
 * @property string $updatedAt - дата/время изменения
 */
class TeamMember extends Base
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
        return 'team_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'position', 'picture', 'socialTwitter', 'socialFacebook', 'socialLinkedIn'], 'string', 'max' => 255],
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
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'position' => 'Position',
            'picture' => 'Picture',
            'socialTwitter' => 'Social Twitter',
            'socialFacebook' => 'Social Facebook',
            'socialLinkedIn' => 'Social Linked In',
            //'createdAt' => 'Created At',
            //'updatedAt' => 'Updated At',
        ];
    }
}
