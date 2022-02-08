<?php

use common\models\UserInfo;

$model=UserInfo::findOne(['user_id'=>\Yii::$app->user->id]);

?>
<li class="user_setting">
    <div class="dropdown">
        <a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src=<?= '/teacher/web/images/team/e1.png'?> alt="e1.png"></a>
        <div class="dropdown-menu">
            <div class="user_set_header">
                <?php if($model->user_photo == null){?>
                    <img class="float-left" src=<?= '/teacher/web/images/team/e1.png'?> alt="e1.png">
                <?php } else{ ?>
                    <img class="float-left" src=<?= '/teacher/web/images/team/e1.png'?> alt="e1.png">
                <?php }?>
                <p style="padding-top:15px"><?= $model->username ?></p>
            </div>
            <div class="user_setting_content">
                <a class="dropdown-item active" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Messages</a>
                <a class="dropdown-item" href="#">Purchase history</a>
                <a class="dropdown-item" href="#">Help</a>
                <a class="dropdown-item" href="#">Log out</a>
            </div>
        </div>
    </div>
</li>