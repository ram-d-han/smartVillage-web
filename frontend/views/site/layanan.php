<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Layanan di SmartVillage';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
	@media (max-width: 1380px){
		#about {
			margin-top: 25px;
			}
		h2 {
			font-weight: bold;
			color: white;
			}
		.slidershow{
			width: 500px;
			height: 400px;
			overflow: hidden;
		}
		.middle {
			position: absolute;
			top : 57%;
			left: 50%;
			transform: translate(-50%,-42%);
		}
		h3 {
			font-weight: bold;
			font-size: 50px;
			text-align: center;
		}
		.text {
	        background-image: linear-gradient(to bottom left, rgba(144,240,240,0.5), rgba(150,150,150,0.6));
	        backdrop-filter: blur(2px);
	        transform: translate(13%,-180%);
	        width: 80%;
	        height: 40%;
		}
		.navigation {
			position: absolute;
			bottom: 4%;
			left: 50%;
			transform: translateX(-50%);
			display: flex;
		}
		.bar {
			width: 50px;
			height: 17px;
			border : 2px solid black;
			margin : 3px;
			cursor: pointer;
			transition: 0.4s;
		}
		.bar:hover{
			background: #fff;
		}
		input[name="r"] {
			position: absolute;
			visibility: hidden;
		}
		.slides {
			width: 100%;
			height: 100%;
		}
		.slide {
			width: 100%;
			height: 100%;
			transition: 0.6s;
		}
		.slide img {
			width: 100%;
			height: 100%;
		}
		#r1:checked ~ .s1 {
			margin-top: 0;
		}
		#r2:checked ~ .s1 {
			margin-top: -80%;
		}
		#r3:checked ~ .s1 {
			margin-top: -160%;
		}
		#r4:checked ~ .s1 {
			margin-top: -240%;
		}
		#r5:checked ~ .s1 {
			margin-top: -320%;
		}
		#r6:checked ~ .s1 {
			margin-top: -400%;
		}
		#r7:checked ~ .s1 {
			margin-top: -480%;
		}
		#r8:checked ~ .s1 {
			margin-top: -560%;
		}
	}
	@media (max-width: 992px){
		#about {
			margin-top: -18px;
			}
		h2 {
			font-weight: bold;
			color: white;
			}
		.slidershow{
			width: 500px;
			height: 400px;
			overflow: hidden;
		}
		.middle {
			position: absolute;
			top : 57%;
			left: 50%;
			transform: translate(-50%,-42%);
		}
		h3 {
			font-weight: bold;
			font-size: 50px;
			text-align: center;
		}
		.text {
	        background-image: linear-gradient(to bottom left, rgba(144,240,240,0.5), rgba(150,150,150,0.6));
	        backdrop-filter: blur(2px);
	        transform: translate(13%,-180%);
	        width: 80%;
	        height: 40%;
		}
		.navigation {
			position: absolute;
			bottom: -2%;
			left: 50%;
			transform: translateX(-50%);
			display: flex;
		}
		.bar {
			width: 50px;
			height: 17px;
			border : 2px solid black;
			margin : 3px;
			cursor: pointer;
			transition: 0.4s;
		}
		.bar:hover{
			background: #fff;
		}
		input[name="r"] {
			position: absolute;
			visibility: hidden;
		}
		.slides {
			width: 100%;
			height: 100%;
		}
		.slide {
			width: 100%;
			height: 100%;
			transition: 0.6s;
		}
		.slide img {
			width: 100%;
			height: 100%;
		}
		#r1:checked ~ .s1 {
			margin-top: 0;
		}
		#r2:checked ~ .s1 {
			margin-top: -80%;
		}
		#r3:checked ~ .s1 {
			margin-top: -160%;
		}
		#r4:checked ~ .s1 {
			margin-top: -240%;
		}
		#r5:checked ~ .s1 {
			margin-top: -320%;
		}
		#r6:checked ~ .s1 {
			margin-top: -400%;
		}
		#r7:checked ~ .s1 {
			margin-top: -480%;
		}
		#r8:checked ~ .s1 {
			margin-top: -560%;
		}
	}
</style>

<div id="about" class="site-about text-center">
    <h2><?= Html::encode($this->title) ?></h2>
    <h2>Klik Tombol Dibawah Gambar untuk Geser Gambar</h2>

</div>

<div class="slidershow middle">

	<div class="slides">
		<input type="radio" name="r" id="r1" checked>
		<input type="radio" name="r" id="r2">
		<input type="radio" name="r" id="r3">
		<input type="radio" name="r" id="r4">
		<input type="radio" name="r" id="r5">
		<input type="radio" name="r" id="r6">
		<input type="radio" name="r" id="r7">
		<input type="radio" name="r" id="r8">

		<div class="slide s1">
			<img src="bg1.jpg" alt="">
			<div class="text">
				<h3>Data <br> Pembangunan</h3>
			</div>
		</div>
		<div class="slide s2">
			<img src="bg2.png" alt="">
			<div class="text">
				<h3>Laporan<br>Mitra</h3>
			</div>
		</div>
		<div class="slide s3">
			<img src="bg1.jpg" alt="">
			<div class="text">
				<h3>Pemetaan <br> Pembangunan</h3>
			</div>
		</div>
		<div class="slide s4">
			<img src="bg2.png" alt="">
			<div class="text">
				<h3>Pelaporan <br> Masalah</h3>
			</div>
		</div>
		<div class="slide s5">
			<img src="bg1.jpg" alt="">
			<div class="text">
				<h3>Request <br> Pembangunan</h3>
			</div>
		</div>
		<div class="slide s6">
			<img src="bg2.png" alt="">
			<div class="text">
				<h3>Monitoring <br> Pembangunan</h3>
			</div>
		</div>
		<div class="slide s7">
			<img src="bg1.jpg" alt="">
			<div class="text">
				<h3>Transparansi <br> Anggaran</h3>
			</div>
		</div>
		<div class="slide s8">
			<img src="bg2.png" alt="">
			<div class="text">
				<h3>Pengumuman</h3>
			</div>
		</div>
	</div>


</div>
	<div class="navigation">
		<label for="r1" class="bar" id="bar1"></label>
		<label for="r2" class="bar" id="bar2"></label>
		<label for="r3" class="bar" id="bar3"></label>
		<label for="r4" class="bar" id="bar4"></label>
		<label for="r5" class="bar" id="bar5"></label>
		<label for="r6" class="bar" id="bar6"></label>
		<label for="r7" class="bar" id="bar7"></label>
		<label for="r8" class="bar" id="bar8"></label>		
	</div>