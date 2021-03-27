<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dusun */

$this->title = 'Create Dusun';
$this->params['breadcrumbs'][] = ['label' => 'Dusuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dusun-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
