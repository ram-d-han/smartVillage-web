<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengumuman */

$this->title = 'Create Pengumuman';
$this->params['breadcrumbs'][] = ['label' => 'Pengumumen', 'url' => ['index']];
?>
<div class="pengumuman-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
