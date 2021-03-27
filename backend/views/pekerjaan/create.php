<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\pekerjaan */

$this->title = 'Create Pekerjaan';
$this->params['breadcrumbs'][] = ['label' => 'Pekerjaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pekerjaan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
