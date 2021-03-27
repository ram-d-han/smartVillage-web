<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\pendidikan */

$this->title = 'Create Pendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendidikan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
