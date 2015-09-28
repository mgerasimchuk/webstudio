<?php
/**
 * @var $aboutItems \common\models\About[]
 * @var $about mixed
 */

namespace frontend\widgets;

use yii\base\Widget;
use common\models\About;
/**
 * Class Portfolio
 * используетс€ дл€ генерации раздела главной страницы
 * @package app\widgets
 */
class AboutWidget extends Widget
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
        $aboutItems = About::find()->where(['isShow' => '1'])-> all();
        $about = null;

        for($i=0; $i<count($aboutItems); $i++) {
            if($i % 2) {
                $about .= $this->render('about-item', ['about' => $aboutItems[$i], 'timelineClass' => 'timeline-inverted']);
            } else {
                $about .= $this->render('about-item', ['about' => $aboutItems[$i], 'timelineClass' => 'timeline']);
            }
        }

        if(count($aboutItems)>0)
            return $this->render('about', ['about' => $about]);
    }
}