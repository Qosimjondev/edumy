<?php

/* @var $dataProvider \yii\data\ActiveDataProvider*/

use yii\widgets\ListView;

$this->title='Kurslar';

?>
<div>

    <?php
        echo ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' =>'_show_course',
            'layout' =>"<div class='d-flex flex-wrap '>{items}</div>{pager}"
        ]);
    ?>
</div>
