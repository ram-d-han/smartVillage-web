<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LaporProgress */

$this->title = 'Create Lapor Progress';
$this->params['breadcrumbs'][] = ['label' => 'Lapor Progresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lapor-progress-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
