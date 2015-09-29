<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

class Base extends \yii\db\ActiveRecord
{
    /**
     * Метод для автоматического проставления даты/времени создаваемых/изменяемых записей
     * @return array
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
}