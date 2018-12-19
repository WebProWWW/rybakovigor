<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-20 03:06
 */

namespace frontend\widgets;


use yii\base\Widget;

class SubNavWidget extends Widget
{
    public $data;
    public $alias;
    public $parent;

    public function init()
    {
        parent::init();
        if ($this->data === null) $this->data = [];
    }

    public function run()
    {
        return $this->render('sub-nav', [
            'data' => $this->data,
            'parent' => $this->parent,
            'alias' => $this->alias,
        ]);
    }
}