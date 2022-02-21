<?php

use common\models\Info;
use yii\helpers\Url;

$model=Info::findOne(['user_id'=>\Yii::$app->user->id]);

?>
<li class="user_setting">
    <div class="dropdown">
        <a class="btn dropdown-toggle" href="#" data-toggle="dropdown">
            <?php if($model->user_photo !== null){?>
                <img class="rounded-circle" src=<?= '/frontend/web/uploads/user/'.$model->user_photo ?> alt="e1.png">
            <?php } else{ ?>
                <img class="float-left" src=<?= '/teacher/web/images/team/e1.png'?> alt="e1.png">
            <?php }?>
        </a>
        <div class="dropdown-menu">
            <div class="user_set_header">
                <?php if($model->user_photo !== null){?>
                    <img class="float-left" style="border-radius:50%" src=<?= '/frontend/web/uploads/user/'.$model->user_photo ?> alt="e1.png">
                <?php } else{ ?>
                    <img class="float-left" src=<?= '/teacher/web/images/team/e1.png'?> alt="e1.png">
                <?php }?>
                <p style="padding-top:15px"><?= $model->username ?></p>
            </div>
            <div class="user_setting_content">
                <a class="dropdown-item active" href="<?= Url::to(['/user/setting'])?>">My Profile</a>
                <a class="dropdown-item" href="#">Messages</a>
                <a class="dropdown-item" href="#">Help</a>
                <a class="dropdown-item" href="<?= Url::to(['/site/logout'])?>">Log out</a>
            </div>
        </div>
    </div>
</li>