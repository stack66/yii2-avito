<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kazned".
 *
 * @property string $id
 * @property string $addr
 * @property string $price
 * @property string $m2
 * @property string $floor
 * @property string $links
 * @property string $descr
 * @property string $date
 * @property string $last_updated
 * @property string $tel
 */
class Kazned extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kazned';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['addr', 'descr', 'last_updated'], 'string'],
            [['date'], 'safe'],
            [['id'], 'string', 'max' => 12],
            [['price', 'floor'], 'string', 'max' => 20],
            [['m2'], 'string', 'max' => 30],
            [['links'], 'string', 'max' => 80],
            [['tel'], 'string', 'max' => 15],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'addr' => Yii::t('app', 'Addr'),
            'price' => Yii::t('app', 'Price'),
            'm2' => Yii::t('app', 'M2'),
            'floor' => Yii::t('app', 'Floor'),
            'links' => Yii::t('app', 'Links'),
            'descr' => Yii::t('app', 'Descr'),
            'date' => Yii::t('app', 'Date'),
            'last_updated' => Yii::t('app', 'Last Updated'),
            'tel' => Yii::t('app', 'Tel'),
        ];
    }

    /**
     * @inheritdoc
     * @return KaznedQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KaznedQuery(get_called_class());
    }
}
