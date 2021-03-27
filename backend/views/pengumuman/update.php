<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengumuman */

$this->title = 'Update Pengumuman';
$this->params['breadcrumbs'][] = ['label' => 'Pengumumen', 'url' => ['index']];
?>
<div class="pengumuman-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
