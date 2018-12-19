<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-20 00:48
 */

/**
 * @var \yii\web\View $this
 * @var \frontend\models\Social[] $data
 */

?>
<nav class="soc">
    <?php foreach ($data as $model): ?>
        <a class="soc-ln" target="_blank" href="<?= $model->url ?>">
            <i class="<?= $model->icon ?>"></i>
        </a>
    <?php endforeach; ?>
</nav>

