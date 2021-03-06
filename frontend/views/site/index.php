<?php

use yii\helpers\HTML;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */

$this->title = 'SmartVillage';
?>

<style type="text/css">
	@media (max-width: 1380px) {
		#row1 {
			transform: translate(15%,150%);
		}
		#row2 {
			transform: translate(13%,58%);
		}
		.col-lg-4 {
			color: white;
			width: 330px;
			height: 170px;
			transform: translateX(37%);
		}
		hr {
			border-color: cyan;
			border-width: 3px;
		}
		h2 {
			color: rgb(250,250,250);
			font-weight: bold;
		}
		#con1 {
			margin-top: -50px;
		}
		.pull-right {
			transform: scale(1.2);
		}
		.pull-right:active {
			transform: scale(1);
		}
	}
	@media (max-width: 992px) {
		#row1 {
			transform: translate(15%,150%);
		}
		#row2 {
			transform: translate(15%,30%);
		}
		.col-lg-4 {
			color: white;
			width: 330px;
			height: 170px;
			transform: translateX(57%);
			padding-top: 7px;
		}
		hr {
			border-color: cyan;
			border-width: 3px;
		}
		h2 {
			color: rgb(250,250,250);
			font-weight: bold;
		}
		#con1 {
			margin-top: -50px;
		}
		.pull-right {
			transform: scale(1.2);
		}
		.pull-right:active {
			transform: scale(1);
		}
	}
	@media (max-width: 768px) {
		#row1 {
			transform: translate(15%,60%);
		}
		#row2 {
			transform: translate(15%,15%);
		}
		.col-lg-4 {
			color: white;
			width: 330px;
			height: 170px;
			transform: translateX(34%);
			padding-top: 7px;
		}
		hr {
			border-color: cyan;
			border-width: 3px;
		}
		h2 {
			color: rgb(250,250,250);
			font-weight: bold;
		}
		#con1 {
			margin-top: -50px;
		}
		.pull-right {
			transform: scale(1.2);
		}
		.pull-right:active {
			transform: scale(1);
		}
	}
</style>

<div class="site-index">
    

    <div class="body-content">


        <div class="row">

<br><br>

			<div id="con1" class="container">
        		<?php if (Yii::$app->user->isGuest) { ?>
            	<a class="pull-right" href="?r=site%2Flogin"><p class="btn btn-primary" style="color: white; padding: 7px 15px;">Login</p></a>
            	<a class="pull-right" href="?r=site%2Fsignup"><p class="btn btn-success" style="color: white; margin-right: 19px;">Sign Up</p></a>
        		<?php } ?>
    		</div>

            <?php if (Yii::$app->user->isGuest) { ?>
            	<div id="row1" class="row" style="width: 80%;">
                	<div class="col-lg-12 text-center">

	                	    <h2>Selamat Menggunakan Web SmartVillage</h2>
	                    	<h2>Silahkan Login Untuk Menggunakan Fitur Fitur yang Tersedia</h2>
	                    	<hr>

                	</div>
       		 	</div>

	        <?php } else { ?>

		            <a class="pull-right" href="?r=pengumuman%2Findex"><p class="btn btn-primary" style="color: white; padding: 7px 15px;">Pengumuman</p></a>

	        		<div id="row2" class="row" style="width: 80%;">
                		<div class="col-lg-12 text-center">

	                			<h2>Selamat Datang di Web SmartVillage</h2>
	                			<h2>Silahkan gunakan fitur yang tersedia dengan bijak</h2>

                    		<hr>
                    		<div class="col-lg-4" style="background: rgba(157,157,200,0.8); border-radius: 7px; margin: 5px;">
								<h2>Ajukan request Pembangunan</h2>
            					<a class="pull-right" href="?r=request-pembangunan%2Fcreate"><p class="btn btn-success" style="color: white;margin-right: 55px;">Request Pembangunan</p></a>
							</div>
							<div class="col-lg-4" style="background: rgba(157,157,200,0.8); border-radius: 7px; margin: 5px;">
								<h2>Ajukan Laporan Aduan</h2>
            					<a class="pull-right" href="?r=lapor-aduan%2Fcreate"><p class="btn btn-success" style="color: white; margin-right: 78px;">Laporkan Aduan</p></a>
							</div>
                		</div>
       		 		</div>
	            <?php } ?>
        
</div>
</div>
</div>
