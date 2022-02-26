<?php

use yii\widgets\ListView;

$this->title="Search Course|".Yii::$app->name;

/* @var $dataProvider yii\data\ActiveDataprovider */
?>
<div class="col-lg-12">
<h1>Found Courses:</h1>
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
