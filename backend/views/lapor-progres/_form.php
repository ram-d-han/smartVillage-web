<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Pembangunan;

/* @var $this yii\web\View */
/* @var $model backend\models\LaporProgress */
/* @var $form yii\widgets\ActiveForm */

$pembangunan = Pembangunan::find()->all();
$listData = ArrayHelper::map($pembangunan, 'id', 'nama_pembangunan')
?>

<div class="lapor-progress-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'tanggal')->label(false)->textInput(['value' => date('Y-m-d'), 'type' => 'hidden']) ?>

    <?= $form->field($model, 'capaian_progress')->textInput() ?>

    <?= $form->field($model, 'uraian_pekerjaan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pembangunan_id')->dropDownList($listData,
        ['prompt'=>'Select...']
            ); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
