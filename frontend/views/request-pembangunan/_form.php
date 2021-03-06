<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RequestPembangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<style type="text/css">
    .request-pembangunan-form {
        border-width: 3px;
        border-radius: 6px;
        border-color: lightgrey;
        background-color: white;
        border-radius: 5px;
        box-shadow: 10px 10px #127487;
        padding: 17px 20px;
    }
</style>

<div class="request-pembangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'kategori_pembangunan_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'terverifikasi' => 'Terverifikasi', 'ditindaklanjuti' => 'Ditindaklanjuti', 'requestbaru' => 'Requestbaru', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>