<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 02:06
 */

namespace frontend\controllers;


use yii\web\Controller;
use yii\helpers\ArrayHelper;
use yii\web\ErrorAction;

class SiteController extends Controller
{

    public function actions()
    {
        return ArrayHelper::merge(parent::actions(), [
            'error' => [
                'class' => ErrorAction::class,
            ],
        ]);
    }


    public function actionIndex($view='index')
    {
        return $this->render($view);
    }

}