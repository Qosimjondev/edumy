<?php

namespace frontend\components;

use common\models\Category;
use yii\base\Component;
use yii\helpers\Url;

/* @property  $data
 */
class HeaderComponent extends Component
{
    public $data;
    public function showMenu()
    {
        return "<li class='list-inline-item'>
                        <div class='header_top_lang_widget'>
                            <div class='ht-widget-container'>
                                <div class='vertical-wrapper'>
                                    <h2 class='title-vertical home5'>
                                        <span class='text-title'>Yo'nalishlar</span> 
                                        <i class='fa fa-angle-down show-down' aria-hidden='true'></i>
                                    </h2>
                                    <div class='content-vertical home5'>
                                        <ul id='vertical-menu' class='mega-vertical-menu nav navbar-nav'>
                                            "
                                                .$this->showIt().$this->showComputer().
                                            "
                                            <li><a href='#'>Moliya va biznes</a></li>
                                            <li>
                                                <a href='#' class='dropdown-toggle' data-hover='dropdown' data-toggle='dropdown'>Xorijiy tillar</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>";
    }
    public function showIt()
    {
        $model=Category::find()->where(['g_id'=>1])->all();
        foreach($model as $item)
                {
                   $data += "<li>
                                <a href='<?= $item->id ?>'><?= $item->c_name?></a>
                             </li>";
                };
        echo "<li>
                    <a href='#'>IT va dasturlash <b class='caret'></b></a>
                    <div class='dropdown-menu' style='width: 300px;height: auto; padding:5px;'>
                        <div class='dropdown-menu-inner'>
                            <div class='element-inner'>
                                <div class='element-section-wrap'>
                                    <div class='element-container'>
                                        <div class='element-row'>
                                            <div class='col-lg-12'>
                                                <div class='element-wrapper'>
                                                    <div class='widget-nav-menu'>
                                                        <div class='element-list-wrapper wn-menu'>
                                                            <ul class='element-menu-list'>
                                                                 <?= $data ?>                                                     
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class='element-warapper-btn' style='margin-bottom: 17px'>
                                                        <a href=<?= Url::to(['/site/course-all'])?>>
                                                            <div class='element-wrapper-sub-title'>
                                                                 Barcha kurslar<i class='flaticon-right-arrow-1'></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             </li>";

    }

    public function showComputer()
    {
        $model=Category::find()->where(['g_id'=>2])->all();
        foreach($model as $item)
        {
            $data += "<li>
                        <a href='<?= $item->id ?>'><?= $item->c_name?></a>
                      </li>";
        };
        return "<li>
                    <a href='#'>Komputer grafikasi <b class='caret'></b></a>
                    <div class='dropdown-menu' style='width: 300px;height: auto; padding:5px;'>
                        <div class='dropdown-menu-inner'>
                            <div class='element-inner'>
                                <div class='element-section-wrap'>
                                    <div class='element-container'>
                                        <div class='element-row'>
                                            <div class='col-lg-12'>
                                                <div class='element-wrapper'>
                                                    <div class='widget-nav-menu'>
                                                        <div class='element-list-wrapper wn-menu'>
                                                            <ul class='element-menu-list'>
                                                                <?= $data ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class='element-warapper-btn' style='margin-bottom: 17px'>
                                                        <a href=<?= Url::to(['/site/course-all'])?>>
                                                            <div class='element-wrapper-sub-title'>
                                                                          Barcha kurslar  <i class='flaticon-right-arrow-1'></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </li>";
    }
}