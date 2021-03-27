<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Mitra */

$this->title = 'Create Mitra';
$this->params['breadcrumbs'][] = ['label' => 'Mitras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mitra-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
