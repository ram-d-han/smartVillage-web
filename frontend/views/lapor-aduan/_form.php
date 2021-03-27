<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Pembangunan;

/* @var $this yii\web\View */
/* @var $model frontend\models\LaporAduan */
/* @var $form yii\widgets\ActiveForm */

$id = Pembangunan::find()->all();

$listData=ArrayHelper::map($id,'id','nama_pembangunan');
?>

<style type="text/css">
    .lapor-aduan-form {
        border-width: 3px;
        border-radius: 6px;
        border-color: lightgrey;
        background-color: white;
        border-radius: 5px;
        box-shadow: 10px 10px #127487;
        padding: 17px 20px;
        overflow-x: scroll;
    }
</style>

<div class="lapor-aduan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->label(false)->textInput(['value' => Yii::$app->user->identity->id, 'type' => 'hidden']) ?>

    <?= $form->field($model, 'pembangunan_id')->dropDownList($listData,
        ['prompt'=>'Select...']
            ); ?>

    <?= $form->field($model, 'status')->label(false)->textInput(['value' => 'Laporanbaru', 'type' => 'hidden']) ?>

    <?= $form->field($model, 'created_at')->label(false)->textInput(['type' => 'hidden']) ?>

    <?= $form->field($model, 'updated_at')->label(false)->textInput(['type' => 'hidden']) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
