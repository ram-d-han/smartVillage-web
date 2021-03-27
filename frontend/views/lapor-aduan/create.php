<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\LaporAduan */

$this->title = 'Create Lapor Aduan';
?>
<div class="lapor-aduan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
