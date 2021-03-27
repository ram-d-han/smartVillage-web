<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriPembangunan */

$this->title = 'Create Kategori Pembangunan';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-pembangunan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
