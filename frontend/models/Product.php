<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $catid
 * @property int $order
 * @property string $name
 * @property string $desc
 * @property string $price
 * @property string $img
 *
 * @property Category $cat
 * @property ProductSize[] $productSizes
 * @property Size[] $sizes
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['catid', 'order'], 'integer'],
            [['name'], 'required'],
            [['desc'], 'string'],
            [['name', 'price', 'img'], 'string', 'max' => 255],
            [['catid'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['catid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'catid' => 'Catid',
            'order' => 'Order',
            'name' => 'Name',
            'desc' => 'Desc',
            'price' => 'Price',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Category::className(), ['id' => 'catid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductSizes()
    {
        return $this->hasMany(ProductSize::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSizes()
    {
        return $this->hasMany(Size::className(), ['id' => 'size_id'])->viaTable('product_size', ['product_id' => 'id']);
    }
}
