<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SumberDanaPembangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sumber-dana-pembangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->label(false)->textInput(['type' => 'hidden']) ?>

    <?= $form->field($model, 'updated_at')->label(false)->textInput(['type' => 'hidden']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
