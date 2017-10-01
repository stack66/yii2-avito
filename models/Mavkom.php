<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mavkom".
 *
 * @property integer $id
 * @property string $obj
 * @property string $addr
 * @property string $region
 * @property integer $price
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
 */
class Mavkom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mavkom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['addr', 'descr', 'last_updated','obj','region'], 'string'],
            [['date'], 'safe'],
            [['id'], 'string', 'max' => 12],
            [['floor','floors'], 'string', 'max' => 20],
            [['m2'], 'string', 'max' => 30],
            //[['price'], 'integer'],
            [['price'], 'string', 'max' => 20],
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
     * @return MavkomQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MavkomQuery(get_called_class());
    }
}
