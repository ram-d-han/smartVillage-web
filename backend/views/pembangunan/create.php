<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pembangunan */

$this->title = 'Create Pembangunan';
$this->params['breadcrumbs'][] = ['label' => 'Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembangunan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
