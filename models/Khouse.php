<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khouse".
 *
 * @property string $id
 * @property string $obj
 * @property string $floor
 * @property string $floors
 * @property string $m2
 * @property string $region
 * @property string $addr
 * @property string $price
 * @property string $link_show_obj
 * @property string $descr
 * @property string $date
 * @property string $date1
 * @property string $last_updated
 * @property string $tel
 * @property string &linkimg
 */
class Khouse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khouse';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['obj', 'region', 'addr', 'descr', 'last_updated','linkimg'], 'string'],
            [['date'], 'safe'],
            [['date1'], 'safe'],
            [['id'], 'string', 'max' => 12],
            [['floor', 'floors', 'm2'], 'string', 'max' => 5],
            [['price'], 'string', 'max' => 20],
            
            [['link_show_obj'], 'string', 'max' => 80],
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
            'floor' => Yii::t('app', 'Этаж'),
            'floors' => Yii::t('app', 'Этажей'),
            'm2' => Yii::t('app', 'Площадь'),
            'region' => Yii::t('app', 'Район'),
            'addr' => Yii::t('app', 'Адрес'),
            'price' => Yii::t('app', 'Стоимость'),
            'link_show_obj' => Yii::t('app', 'Показать объект'),
            'descr' => Yii::t('app', 'Описание'),
            'date' => Yii::t('app', 'Дата'),
            'date1'=> Yii::t('app', 'Повтор'),
            'last_updated' => Yii::t('app', 'Опубликовано'),
            'tel' => Yii::t('app', 'Телефон'),
            'linkimg' => Yii::t('app', 'Фото'),

        ];
    }

    /**
     * @inheritdoc
     * @return KhouseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KhouseQuery(get_called_class());
    }
}
