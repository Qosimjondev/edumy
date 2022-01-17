<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Playlist]].
 *
 * @see \common\models\Playlist
 */
class PlaylistQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Playlist[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Playlist|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
