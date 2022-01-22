<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Playlists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-12">
<div class="playlist-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Playlist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
            'layout' => '<div class="d-flex flex-wrap mt-4 vh-100">{items}</div>{pager}',
            'itemOptions' => ['tag'=>null]
    ]);?>



</div>
</div>
