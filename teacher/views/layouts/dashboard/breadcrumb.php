<?php

use yii\bootstrap4\Breadcrumbs;

?>
<div class="col-lg-12">
    <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
        <h4 class="title float-left"><?= $this->title ?></h4>
        <?= Breadcrumbs::widget([
            'navOptions' => ['aria-label' => 'breadcrumb', 'class' => 'float-right'],
            'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>\n", // template for all links
            'homeLink' => [
                'label' => 'Home',
                'url' => ['site/index'],
                'encode' => false,
            ],
            'links' => $this->params['breadcrumbs'] ?? [],
        ]); ?>
    </nav>
</div>
