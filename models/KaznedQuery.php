<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Kazned]].
 *
 * @see Kazned
 */
class KaznedQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Kazned[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Kazned|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
