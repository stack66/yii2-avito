<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mavhouse".
 *
 * @property integer $id
 * @property string $obj
 * @property string $addr
 * @property string $region
 * @property string $price
 * @property string $m2
 * @property string $floor
 * @property string $floors
 * @property string $links
 * @property string $descr
 * @property string $date
 * @property string $date1
 * @property string $last_updated
 * @property string $tel
 * @property string $linkimg
 * @property integer $lastrowid
 */
class Mavhouse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mavhouse';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['obj', 'addr', 'region', 'price', 'm2', 'floor', 'floors', 'links', 'descr', 'last_updated', 'linkimg'], 'string'],
            [['date', 'date1'], 'safe'],
            [['lastrowid'], 'integer'],
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
            'obj' => Yii::t('app', 'Объект'),
            'addr' => Yii::t('app', 'Адрес'),
            'region' => Yii::t('app', 'Район'),
            'price' => Yii::t('app', 'Стоимость'),
            'm2' => Yii::t('app', 'Площадь'),
            'floor' => Yii::t('app', 'Этаж'),
            'floors' => Yii::t('app', 'Этажей'),
            'links' => Yii::t('app', 'Ссылка'),
            'descr' => Yii::t('app', 'Описание'),
            'date' => Yii::t('app', 'Дата'),
            'last_updated' => Yii::t('app', 'Опубликовано'),
            'tel' => Yii::t('app', 'Телефон'),
            'linkimg' => Yii::t('app', 'Фото'),
        ];
    }

    /**
     * @inheritdoc
     * @return MavhouseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MavhouseQuery(get_called_class());
    }
}
