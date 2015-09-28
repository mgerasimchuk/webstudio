<?php
/**
 * @var $team \common\models\TeamMember[]
 */

namespace frontend\widgets;

use common\models\TeamMember;
use yii\base\Widget;

/**
 * Class Team
 * используетс€ дл€ генерации раздела главной страницы
 * @package app\widgets
 */
class Team extends Widget
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
        $team = TeamMember::find()->limit(3)->orderBy('RAND()')->all();

        if(count($team) == 3)
            return $this->render('team', ['team' => $team]);
    }
}