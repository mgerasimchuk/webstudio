<?php

namespace app\widgets;

use yii\base\Widget;

class Header extends Widget
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
            return $this->render('header-guest', ['baseUrl' => $this->baseUrl]);
        } else {
            return $this->render('header', ['baseUrl' => $this->baseUrl]);
        }
    }
}