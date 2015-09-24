<?php

namespace app\widgets;

use yii\base\Widget;

/**
 * Class Header
 * используется для генерации шапки страницы
 * @package app\widgets
 */
class Header extends Widget
{
    /**
     * Является ли пользователь гостем
     * @var bool
     */
    public $isGuest;

    /**
     * URL адрес использующийся для рендеринга меню
     * @var string
     */
    public $baseUrl;

    public function init()
    {
        parent::init();
    }

    /**
     * Возвращает меню дял отображения в body
     * @return null|string
     */
    public function run()
    {
        if ($this->isGuest) {
            return $this->render('header-guest', ['baseUrl' => $this->baseUrl]);
        } else {
            return $this->render('header', ['baseUrl' => $this->baseUrl]);
        }
    }
}