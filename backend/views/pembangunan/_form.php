<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\SumberDanaPembangunan;
use backend\models\KategoriPembangunan;
use backend\models\StatusPembangunan;
use backend\models\Mitra;


/* @var $this yii\web\View */
/* @var $model backend\models\Pembangunan */
/* @var $form yii\widgets\ActiveForm */

$sumberdana = SumberDanaPembangunan::find()->all();
$kategori = KategoriPembangunan::find()->all();
$status = StatusPembangunan::find()->all();
$mitra = Mitra::find()->all();

$listData = ArrayHelper::map($sumberdana, 'id','nama');
$listData2 = ArrayHelper::map($kategori, 'id','nama');
$listData3 = ArrayHelper::map($status, 'id', 'nama');
$listData4 = ArrayHelper::map($mitra, 'id', 'nama_mitra');
?>

<div class="pembangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pembangunan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <?= $form->field($model, 'anggaran')->textInput() ?>

    <?= $form->field($model, 'tgl_mulai')->textInput() ?>

    <?= $form->field($model, 'tgl_selesai')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prosentase')->textInput() ?>

    <?= $form->field($model, 'sumber_dana_pembangunan_id')->dropDownList($listData,
        ['prompt'=>'Select...']
            ); ?>

    <?= $form->field($model, 'kategori_pembangunan_id')->dropDownList($listData2,
        ['prompt'=>'Select...']
            ); ?>

    <?= $form->field($model, 'status_pembangunan_id')->dropDownList($listData3,
        ['prompt'=>'Select...']
            ); ?>

    <?= $form->field($model, 'user_id')->label(false)->textInput(['value' => Yii::$app->user->identity->id, 'type' => 'hidden']) ?>

    <?= $form->field($model, 'mitra_id')->dropDownList($listData4,
        ['prompt'=>'Select...']
            ); ?>

    <?= $form->field($model, 'created_at')->label(false)->textInput(['type' => 'hidden']) ?>

    <?= $form->field($model, 'updated_at')->label(false)->textInput(['type' => 'hidden']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
