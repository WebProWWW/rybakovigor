<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $order
 * @property string $name
 * @property string $alias
 *
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order'], 'integer'],
            [['name', 'alias'], 'required'],
            [['name', 'alias'], 'string', 'max' => 255],
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
            'alias' => 'Alias',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['catid' => 'id']);
    }

    /**
     * @return ActiveRecord[]
     */
    public static function getAll()
    {
        return self::getDb()->cache(function ($db) {
            return self::find()->orderBy('order')->all();
        });
    }

    /**
     * @param $alias string
     * @return Category|null
     */
    public static function findByAlias($alias)
    {
        return self::findOne(['alias' => $alias]);
    }
}
