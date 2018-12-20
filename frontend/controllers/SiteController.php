<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 02:06
 */

namespace frontend\controllers;


use frontend\models\Category;
use frontend\models\Social;
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
        return $this->render($view, [
            'socArr' => Social::getAll(),
        ]);
    }

    public function actionCatalog($parent, $alias)
    {
        return $this->render('catalog', [
            'socArr' => Social::getAll(),
            'catAlias' => $alias,
            'parent' => $parent,
            'catArr' => Category::getAll(),
            'category' => Category::findByAlias($alias),
        ]);
    }

    public function actionMoved($parent, $alias)
    {
        return $this->redirect(['catalog', 'parent'=>$parent, 'alias'=>$alias], 301);
    }

}