<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;

AppAsset::register($this);
$this->beginContent('@backend/views/layouts/base.php');
?>
    <main role="main" class="flex-shrink-0">
            <?= $content ?>
    </main>
<?php $this->endContent() ?>
