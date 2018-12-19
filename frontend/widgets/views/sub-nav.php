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
?>
<div class="row em-10 em-md-12">
    <?php foreach ($data as $category): ?>
        <div class="col-auto">
            <a class="snav-ln" href="<?= Url::to([
                'site/catalog',
                'parent'=>$parent,
                'alias'=>$category->alias,
            ]) ?>"><?= $category->name ?></a>
        </div>
    <?php endforeach; ?>
</div><!-- .row -->