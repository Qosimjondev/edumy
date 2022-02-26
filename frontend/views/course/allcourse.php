<?php

use yii\widgets\ListView;

/* @var $dataProvider \yii\data\ActiveDataProvider*/
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
