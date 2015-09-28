<?php

namespace backend\widgets;

use yii\base\Widget;

/**
 * Class LeftMenu
 * используется для генерации выпадающего меню навигатора
 * @package app\widgets
 */
class LeftMenu extends Widget
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
            return null;
        } else {
            return $this->render('left-menu', ['baseUrl' => $this->baseUrl]);
        }
    }
}