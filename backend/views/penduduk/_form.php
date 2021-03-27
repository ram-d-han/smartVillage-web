<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Agama;
use backend\models\Pekerjaan;
use backend\models\Pendidikan;
use backend\models\RtRw;

/* @var $this yii\web\View */
/* @var $model backend\models\Penduduk */
/* @var $form yii\widgets\ActiveForm */

$agama = Agama::find()->all();
$pekerjaan = Pekerjaan::find()->all();
$pendidikan = Pendidikan::find()->all();
$rtrw = RtRw::find()->all();

$listData = ArrayHelper::map($agama, 'id', 'nama');
$listData2 = ArrayHelper::map($pekerjaan, 'id', 'nama');
$listData3 = ArrayHelper::map($pendidikan, 'id', 'nama');
$listData4 = ArrayHelper::map($rtrw, 'id', 'rw_parent', 'rt_child');
?>

<div class="penduduk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'L' => 'Laki-Laki', 'P' => 'Perempuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'agama')->dropDownList($listData,
            ['prompt'=>'Select...']
                ); ?>

    <?= $form->field($model, 'status_perkawinan')->dropDownList([ 'Belum Menikah' => 'Belum Menikah', 'Sudah Menikah' => 'Sudah Menikah', ], ['prompt' => '']) ?>

<?= $form->field($model, 'pekerjaan')->dropDownList($listData2,
        ['prompt'=>'Select...']
            ); ?>
<?= $form->field($model, 'pendidikan')->dropDownList($listData3,
        ['prompt'=>'Select...']
            ); ?>
<?= $form->field($model, 'rt_rw_id')->dropDownList($listData4,
        ['prompt'=>'Select...']
            ); ?>
    <?= $form->field($model, 'created_at')->label(false)->textInput(['type' => 'hidden']) ?>

    <?= $form->field($model, 'updated_at')->label(false)->textInput(['type' => 'hidden']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
