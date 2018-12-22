<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-22 04:41
 */

namespace frontend\widgets;


use frontend\models\Category;
use yii\base\Widget;

/* @property Category $category */

class CatProductsWidget extends Widget
{
    public $category;

    public function run()
    {
        return $this->render('cat-products', [
            'products' => $this->category->products,
            'category' => $this->category,
        ]);
    }
}