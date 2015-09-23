<?php

namespace app\widgets;

use yii\base\Widget;

class Body extends Widget
{
    public $isGuest;
    public $baseUrl;
    public $content;

    public function init()
    {
        parent::init();
    }

    public function createHeader()
    {
        if ($this->isGuest) {
            return $this->render('header-guest', ['baseUrl' => $this->baseUrl]);
        } else {
            return $this->render('header', ['baseUrl' => $this->baseUrl]);
        }
    }

    public function createLeftMenu()
    {
        if ($this->isGuest) {
            return null;
        } else {
            return $this->render('left-menu', ['baseUrl' => $this->baseUrl]);
        }
    }

    public function createContent()
    {
        return $this->render('content', ['content' => $this->content]);
    }

    public function createFooter()
    {
        return $this->render('footer', ['baseUrl' => $this->baseUrl]);
    }

    public function run()
    {
        return
            $this->createHeader()
            .$this->createLeftMenu()
            .$this->createContent()
            .$this->createFooter();
    }
}