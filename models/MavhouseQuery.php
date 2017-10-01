<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Mavhouse]].
 *
 * @see Mavhouse
 */
class MavhouseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Mavhouse[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Mavhouse|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
