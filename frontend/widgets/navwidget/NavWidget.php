<?php

namespace frontend\widgets\navwidget;

use yii\base\Widget;

class NavWidget extends Widget
{
    public function init()
    {
        parent::init();
    }
    public function run()
    {
        return $this->render('_navmobile');
    }
}