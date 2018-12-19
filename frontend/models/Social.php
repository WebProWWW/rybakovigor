<?php

namespace frontend\models;

use Yii;
use yii\caching\Cache;
use yii\db\Connection;

/**
 * This is the model class for table "social".
 *
 * @property int $id
 * @property int $order
 * @property string $name
 * @property string $icon
 * @property string $url
 */
class Social extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order'], 'integer'],
            [['name', 'icon', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order' => 'Order',
            'name' => 'Name',
            'icon' => 'Icon',
            'url' => 'Url',
        ];
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getAll()
    {
        return self::getDb()->cache(function ($db) {
            /* @var $db Connection */
//            return $db->noCache(function ($db) {
//                return self::find()->orderBy('order')->all();
//            });
            return self::find()->orderBy('order')->all();
        });
    }
}
