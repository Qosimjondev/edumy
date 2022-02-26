<?php

namespace frontend\widgets\searchwidget;

use common\models\Course;
use yii\base\Widget;

class SearchWidget extends Widget
{
    public function init()
    {
        parent::init();
    }
    public function run()
    {
        return  $this->render('_search');
    }
}