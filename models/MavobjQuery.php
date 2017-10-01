<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Mavito]].
 *
 * @see Mavito
 */
class MavobjQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Mavito[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Mavito|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
