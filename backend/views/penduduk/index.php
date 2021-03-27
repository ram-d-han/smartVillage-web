<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penduduks';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

if (Yii::$app->user->identity->roles_id == 1) {
?>
    <div class="penduduk-index" style="overflow-x: scroll;">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Penduduk', ['create'], ['class' => 'btn btn-success']) ?>
        </p>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'nik',
                'nama_lengkap',
                'tempat_lahir',
                'tanggal_lahir',
                'jenis_kelamin',
                // 'agama_id',
                'status_perkawinan',
                //'pekerjaan_id',
                //'pendidikan_id',
                //'rt_rw_id',
                //'created_at',
                //'updated_at',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
<?php } ?>

<?php

if (Yii::$app->user->identity->roles_id == 2) {
?>
    <div class="penduduk-index" style="overflow-x: scroll;">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'nik',
                'nama_lengkap',
                'tempat_lahir',
                'tanggal_lahir',
                'jenis_kelamin',
                // 'agama_id',
                'status_perkawinan',
                //'pekerjaan_id',
                //'pendidikan_id',
                //'rt_rw_id',
                //'created_at',
                //'updated_at',

            ],
        ]); ?>
    </div>
<?php } ?>


