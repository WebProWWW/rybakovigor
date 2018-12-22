<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 15:46
 */

use frontend\widgets\SocWidget;
use frontend\widgets\SubNavWidget;
use frontend\widgets\CatProductsWidget;

/* @var $this \yii\web\View */
/* @var $socArr \frontend\models\Social[] */
/* @var $catArr \frontend\models\Category[] */
/* @var $catAlias string */
/* @var $parent string */
/* @var $category \frontend\models\Category */


$this->title = ' - Магазин';
$this->params['alias'] = $parent;
?>
<div class="block">
    <div class="container">
        <div class="block">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <?= SocWidget::widget(['data'=>$socArr]) ?>
                </div><!-- .col -->
            </div><!-- .row-->
        </div><!-- .block -->
        <?= SubNavWidget::widget(['data'=>$catArr, 'parent'=>$parent, 'alias'=>$catAlias]) ?>
    </div><!-- .container -->
</div><!-- .block -->

<?= CatProductsWidget::widget(['category'=>$category]) ?>