<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Mavkom]].
 *
 * @see Mavkom
 */
class MavkomQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Mavkom[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Mavkom|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
