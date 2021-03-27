<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\KategoriPembangunan;

/* @var $this yii\web\View */
/* @var $model frontend\models\RequestPembangunan */
/* @var $form yii\widgets\ActiveForm */

$kategori = KategoriPembangunan::find()->all();
$listData = ArrayHelper::map($kategori,'id','nama');
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

    <?= $form->field($model, 'user_id')->label(false)->textInput(['value' => Yii::$app->user->identity->id, 'type' => 'hidden']) ?>

    <?= $form->field($model, 'kategori_pembangunan_id')->dropDownList($listData,
        ['prompt'=>'Select...']
            ); ?>

    <?= $form->field($model, 'status')->label(false)->textInput(['value' => 'requestbaru', 'type' => 'hidden']) ?>

    <?= $form->field($model, 'created_at')->label(false)->textInput(['type' => 'hidden']) ?>

    <?= $form->field($model, 'updated_at')->label(false)->textInput(['type' => 'hidden']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
