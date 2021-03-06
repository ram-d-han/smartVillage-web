<?php

use yii\grid\GridView;

/* @var $this yii\web\View */

$this->title = '';
?>

<style type="text/css">
	@media (max-width: 1380px) {
		.col-lg-4 {
			color: white;
			width: 330px;
			height: 150px;
		}
		.box {
			padding-left: 3px;
			padding-right: 3px;
		}
		.selesai {
			padding: 0 2px;
			border-radius: 10px;
			box-shadow: 4px 6px black;
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
		.box {
			padding-left: 3px;
			padding-right: 3px;
			overflow-x: scroll;
		}
		.selesai {
			padding: 0 2px;
			border-radius: 10px;
			box-shadow: 4px 6px black;
		}	
	}
</style>

<div class="site-index">

	<div class="body-content">
		<div class="row">
			<div class="col-lg-4" style="background: rgba(200,0,0,0.8); border-radius: 7px; margin: 3px;">
				<h2>RT/RW</h2>

                <strong><p>Jumlah RT/RW : <?php echo $rtCount ?> RT/RW</p></strong>
			</div>
			<div class="col-lg-4" style="background: rgba(0,200,0,0.8); border-radius: 7px; margin: 3px;">
                <h2>DUSUN</h2>

                <strong><p>Jumlah Dusun : <?php echo $dusunCount ?> Dusun</p></strong>
			</div>
			<div class="col-lg-4" style="background: rgba(0,0,200,0.8); border-radius: 7px; margin: 3px;">
				<h2>User</h2>

				<strong><p>Jumlah User : <?php echo $userCount ?> User</p></strong>
			</div>
		</div>
	</div>

    <div class="jumbotron">
        <h1>Halaman Admin SmartVillage</h1>
    </div>
    <h1>Pembangunan yang sudah selesai</h1>
    <hr>
    <div class="selesai">
    	<div class="box">
	    	<?= GridView::widget([
		        'dataProvider' => $dataProvider,
		        'columns' => [
		            ['class' => 'yii\grid\SerialColumn'],
		            'id',
		            'nama_pembangunan',
		            'anggaran',
		            'tgl_mulai',
		            'tgl_selesai',
		            'keterangan',
	        	],
	    	]); ?>
    	</div>
    </div>

</div>
