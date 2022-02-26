<?php

namespace frontend\widgets\headerwidget;

use common\models\Group;
use yii\base\Widget;

class HeaderWidget extends Widget
{


    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('_dropdown');
    }
}