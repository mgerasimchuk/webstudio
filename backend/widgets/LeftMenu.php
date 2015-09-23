<?php

namespace app\widgets;

use yii\base\Widget;

class LeftMenu extends Widget
{
    public $isGuest;
    public $baseUrl;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if ($this->isGuest) {
            return null;
        } else {
            return $this->render('left-menu', ['baseUrl' => $this->baseUrl]);
        }
    }
}