<?php
/**
 * @var $partners \common\models\Partner[]
 */

namespace frontend\widgets;

use common\models\Partner;
use yii\base\Widget;

/**
 * Class Team
 * используетс€ дл€ генерации раздела главной страницы
 * @package app\widgets
 */
class Partners extends Widget
{
    public function init()
    {
        parent::init();
    }

    /**
     * ¬озвращает сегмент д€л отображени€ в body
     * @return null|string
     */
    public function run()
    {
        $partners = Partner::find()->limit(4)->orderBy('RAND()')->all();
        if(count($partners) == 4)
            return $this->render('partners', ['partners' => $partners]);
    }
}