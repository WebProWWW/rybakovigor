<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-20 03:10
 */

use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $data \frontend\models\Category[] */
/* @var $alias string */
/* @var $parent string */

//function active($aliasA, $aliasB)
//{
//    return ($aliasA === $aliasB) ? ' active' : '';
//}

?>
<div class="row em-md-11">
    <?php foreach ($data as $category): ?>
        <div class="col-auto">
            <a class="snav-ln<?= ($alias === $category->alias) ? ' active' : '' ?>" href="<?= Url::to([
                'site/catalog',
                'parent'=>$parent,
                'alias'=>$category->alias,
            ]) ?>"><?= $category->name ?></a>
        </div>
    <?php endforeach; ?>
</div><!-- .row -->