<?php

use yii\grid\GridView;

/* @var $this yii\web\View */

$this->title = '';
?>

<style type="text/css">
	@media (max-width: 1380px) {
		.col-lg-4 {
			color: white;
			width: 260px;
			height: 150px;
		}
	}
	@media (max-width: 992px) {
		.col-lg-4 {
			transform: translateX(2%);
			text-align: center;
			color: white;
			width: 95%;
			height: 100px;
		}
		.lapor {
			overflow-x: scroll;
		}
	}
</style>

<div class="site-index">

	<div class="body-content">
		<div class="row">
			<div class="col-lg-4" style="background: rgba(200,0,0,0.8); border-radius: 7px; margin: 3px;">
				<h2>Penduduk</h2>

                <strong><p>Jumlah Penduduk : <?php echo $pendCount ?> Penduduk</p></strong>
			</div>
			<div class="col-lg-4" style="background: rgba(0,200,0,0.8); border-radius: 7px; margin: 3px;">
                <h2>Laporan Aduan</h2>

                <strong><p>Jumlah Laporan : <?php echo $laCount ?> Laporan</p></strong>
			</div>
			<div class="col-lg-4" style="background: rgba(0,0,200,0.8); border-radius: 7px; margin: 3px;">
				<h2>Request Pembangunan</h2>

				<strong><p>Jumlah Permintaan : <?php echo $rpCount ?> Permintaan</p></strong>
			</div>
			<div class="col-lg-4" style="background: rgba(100,100,200,0.8); border-radius: 7px; margin: 3px;">
				<h2>Pembangunan</h2>

				<strong><p>Jumlah Pembangunan : <?php echo $pembCount ?> Pembangunan</p></strong>
			</div>
		</div>
	</div>

    <div class="jumbotron">
        <h1>Halaman Operator SmartVillage</h1>
    </div>

    <h2>Laporan Terhadap Pembangunan</h2><hr>
    <div class="lapor">
	    <?= GridView::widget([
			        'dataProvider' => $dataProvider,
			        'columns' => [
			            ['class' => 'yii\grid\SerialColumn'],
			            'id',
			            'deskripsi',
			            'user_id',
			            'pembangunan_id',
			            'status',
			            'updated_at',
		        	],
		    	]); ?>
	</div>
</div>
