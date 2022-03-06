<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Course]].
 *
 * @see \common\models\Course
 */
class CourseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Course[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Course|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
    public function latest()
    {
        return $this->orderBy(['created_at'=>SORT_DESC]);
    }
    public function byKeyword($search)
    {
        return $this->andWhere("MATCH(course_title,course_author,course_description) AGAINST(:keyword)",['keyword'=>$search]);
    }
    public function byCategory($id)
    {
        return $this->andWhere(['course_categ'=>$id]);
    }
//    public function getFinance()
//    {
//        return $this
//    }
}
