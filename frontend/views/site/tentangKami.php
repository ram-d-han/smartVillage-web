<?php

use yii\helpers\Html;

$this->title = 'Tentang Kami';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
	@media (max-width: 1380px) {
		p {
			border-width: 2px;
			border-color: cyan;
		}
		.tentang {
			border-radius: 10px;
	        box-shadow: 10px 10px #127487;
			font-weight: bolder;
			color: black;
			text-align: center;
			line-height: 110%;
			font-size: 18px;
			background-image: linear-gradient(to bottom left, rgba(50,80,80,0.5), rgba(150,120,180,0.6));
	        backdrop-filter: blur(1.5px);
		}
		.komunikasi {
			color: #353535;
			background: rgba(255,255,255,0.7);
			width: 285px;
			height: 100px;
			border-radius: 5px;
			margin-right: 80px;
			margin-top: 20px;
			text-align: center;
	        box-shadow: 10px 10px #127487;
			}
		.sosmed {
			color: #353535;
			background: rgba(255,255,255,0.7);
			width: 285px;
			border-radius: 5px;
			margin-left: 160px;
			margin-top: 15px;
			text-align: center;
	        box-shadow: 10px 10px #127487;
		}
		.kontak {
			transform: translateX(22%);
			display: flex;
		}
		.drop {
			display: none;
			line-height: 1px;
		}
		.sosmed:hover .drop{
			display: block;
		}
	}
	@media (max-width: 992px) {
		p {
			border-width: 2px;
			border-color: cyan;
		}
		.tentang {
			border-radius: 10px;
	        box-shadow: 10px 10px #127487;
			font-weight: bolder;
			color: black;
			text-align: center;
			line-height: 110%;
			font-size: 18px;
			background-image: linear-gradient(to bottom left, rgba(50,80,80,0.5), rgba(150,120,180,0.6));
	        backdrop-filter: blur(1.5px);
		}
		.komunikasi {
			color: #353535;
			background: rgba(255,255,255,0.7);
			width: 285px;
			height: 100px;
			border-radius: 5px;
			margin-right: auto;
			margin-top: 20px;
			text-align: center;
	        box-shadow: 10px 10px #127487;
			}
		.sosmed {
			color: #353535;
			background: rgba(255,255,255,0.7);
			width: 285px;
			border-radius: 5px;
			margin-left: 160px;
			margin-top: 15px;
			text-align: center;
	        box-shadow: 10px 10px #127487;
		}
		.kontak {
			transform: translateX(6%);
			display: flex;
		}
		.drop {
			display: none;
			line-height: 1px;
		}
		.sosmed:hover .drop{
			display: block;
		}
	}
</style>

<div class="site-contact text-center">
    <h1 style="color: #272727;font-weight: bold;"><?= Html::encode($this->title) ?></h1>
</div>

<div class="tentang">
	<p>
		SmartVillage adalah website yang ditujukan untuk memudahkan pembangunan dalam upaya untuk memajukan desa dan kehidupan bermasyarakat.<br>
		Mulai dari Permintaan Pembangunan, Penyediaan Mitra, Transparansi Anggaran, <br>Pelaporan & Penyelesaian Masalah, sampai Pemberitahuan terkait Pembangunan.<br>
		Dengan sudah tersedianya data yang lengkap, Pembangunan & Pemrosesan laporan akan lebih mudah untuk dilakukan.<br>
		Di dalam Web SmartVillage, Kami juga menyediakan fitur untuk memonitoring pembangunan yang sedang berlangsung berdasarkan data di lapangan.<br>
		Fitur-fitur yang kami sediakan adalah fitur yang sudah kami pikirkan berkali kali untuk kemajuan desa.
	</p>
</div>

<div class="site-contact text-center">
    <h4 style="font-weight: bold;color: #272727;">Silahkan Hubungi Salah Satu dari Kontak Kami di Bawah Ini Jika ada Masalah</h4>
</div>

<div class="kontak">
	<div class="komunikasi">
		<p>
			<img class="ico" src="iconEmail.png" style="width: 50px;">
			<strong><h3>SmartVillage@mail.com</h3></strong>
		</p>
	</div>
	<div class="komunikasi">
		<p>
			<img class="ico" src="iconTelp.png" style="height : 50px;transform: rotate(-65deg);">
			<strong><h3>081-1111-1111</h3></strong>
		</p>
	</div>
</div>
<div class="kontak">
	<div class="sosmed">
		<p>
			<strong><h3>Sosial Media Kami</h3></strong><hr style="border-color: black">
			<div class="drop">
				<strong><h4><a href="#">Facebook SmartVillage</a></h4></strong><br>
				<strong><h4><a href="#">Instagram SmartVillage</a></h4></strong><br>
				<strong><h4><a href="#">Twitter SmartVillage</a></h4></strong><br>
			</div>
		</p>
	</div>
</div>

