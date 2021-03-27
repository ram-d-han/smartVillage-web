<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriPembangunan */

$this->title = 'Update Kategori Pembangunan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-pembangunan-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
