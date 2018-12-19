<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-20 00:46
 */

namespace frontend\widgets;


use yii\base\Widget;

class SocWidget extends Widget
{
    public $data;

    public function init()
    {
        parent::init();
        if ($this->data === null) $this->data = [];
    }

    public function run()
    {
        return $this->render('soc', ['data'=>$this->data]);
    }
}