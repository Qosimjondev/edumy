<?php

use yii\widgets\ListView;

$this->title="Search Course|".Yii::$app->name;

/* @var $dataProvider yii\data\ActiveDataprovider */
?>
<div class="search-course">
<h3>Found Courses:</h3>
<?php
echo ListView::widget([
    'dataProvider'=>$dataProvider,
    'itemView'=>'_search',
    'layout'=>"<div class='d-flex flex-wrap mt-4 vh-100'>{items}</div>{pager}",
    'itemOptions'=>[
        'tag'=>null,
    ]
]);
?>
</div>
