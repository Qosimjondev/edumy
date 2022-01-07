<?php

/* @var $this \yii\web\View */
/* @var $content string */

use student\assets\AppAsset;

AppAsset::register($this);
$this->beginContent('@student/views/layouts/base.php');
?>
    <main role="main" class="flex-shrink-0">
            <?= $content ?>
    </main>
<?php $this->endContent() ?>
