<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Dusun;

/* @var $this yii\web\View */
/* @var $model backend\models\RtRw */
/* @var $form yii\widgets\ActiveForm */

$dusun = Dusun::find()->all();
$listData = ArrayHelper::map($dusun, 'id', 'nama_dusun');
?>

<div class="rt-rw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rw_parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rt_child')->textInput() ?>

    <?= $form->field($model, 'dusun_id')->dropDownList($listData,
        ['prompt'=>'Select...']
            ); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
