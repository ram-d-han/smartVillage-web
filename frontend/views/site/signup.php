<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
    @media(max-width: 1380px) {
        .col-lg-5 {
            background-image: linear-gradient(to bottom left, rgba(144,240,240,0.5), rgba(150,150,150,0.6));
            backdrop-filter: blur(3px);
            border-radius: 5px;
            box-shadow: 10px 10px #127487;
            padding-top: 1%;
            }
        .side {
        	background-color: rgb(0,50,50);
        	width: 55%;
        	height: 400px;
            transform: translateY(-17%);
        	margin-left: 47%;
        	border-radius: 10px;
        	text-align: center;
        	color: white;
        	font-weight: bold;
        	text-align: center;
        	overflow-y: scroll; 
        }
        .testimoni {
        	width: 95%;
        	margin-top: 5%;
        	padding-bottom: 1.5%;
        	padding-left: 5%;
        	}
        .testi {
        	font-size: 20px;
        	border-radius: 3px;
        	background: rgba(144,240,240,0.5);
        }
        .head {
            font-size: 50px;
            transform: translate(2%,-200%);
            color: white;
            font-weight: bold;
            font-size: 30px;
            text-align: center;
        }
        .foot {
        	color: white;
        	font-weight: bold;
        	font-size: 19px;
        	text-align: center;
        	}
        }
    @media(max-width: 768px) {
        .col-lg-5 {
            background-image: linear-gradient(to bottom left, rgba(144,240,240,0.5), rgba(150,150,150,0.6));
            backdrop-filter: blur(3px);
            border-radius: 5px;
            box-shadow: 10px 10px #127487;
            padding-top: 1%;
            }
        .side {
            background-color: rgb(0,50,50);
            height: 350px;
            width: 100%;
            transform: translate(-47%,7%);
            border-radius: 10px;
            text-align: center;
            color: white;
            font-weight: bold;
            text-align: center;
            overflow-y: scroll; 
        }
        .testimoni {
            width: 95%;
            margin-top: 5%;
            padding-bottom: 1.5%;
            padding-left: 5%;
            }
        .testi {
            font-size: 20px;
            border-radius: 3px;
            background: rgba(144,240,240,0.5);
        }
        .head {
            font-size: 50px;
            transform: translate(0%,100%);
            color: white;
            font-weight: bold;
            font-size: 19px;
            text-align: center;
            }
        .foot {
            color: white;
            font-weight: bold;
            font-size: 19px;
            text-align: center;
            transform: translateY(1350%);
        }
        }
</style>

<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
      	<h3 class="head">Testimoni</h3>
        <div class="side">
        	<div class="testimoni">
        		<div class="testi">
        			<h3>"~ Budiman ~"</h3>
        			<p>Web ini sangat membantu sekali & memudahkan masyarakat</p>
        		</div>
        		<div class="testi">
        			<h3>"~ Widodo ~"</h3>
        			<p>Dengan adanya Web SmartVillage ini,pembangunan jadi lebih mudah</p>
        		</div>
        		<div class="testi">
        			<h3>"~ Joko ~"</h3>
        			<p>Saya harap dengan adanya Web SmartVillage ini usaha untuk memajukan desa dapat terlaksana dengan cepat dan mudah</p>
        		</div>
        		<div class="testi">
        			<h3>"~ Syamsul Arif ~"</h3>
        			<p>Web yang sangat bermanfaat</p>
        		</div>
        		<div class="testi">
        			<h3>"~ Eko ~"</h3>
        			<p>Sangat Memudahkan masyarakat dan desa</p>
        		</div>
        		<div class="testi">
        			<h3>"~ Budiman ~"</h3>
        			<p>Web ini sangat membantu sekali & memudahkan masyarakat</p>
        		</div>
        		<div class="testi">
        			<h3>"~ Budiman ~"</h3>
        			<p>Web ini sangat membantu sekali & memudahkan masyarakat</p>
        		</div>
        	</div>
        </div>
        <p class="foot" style="position: absolute; right: 7%;bottom: 7%;">Silahkan Log In atau Sign Up dulu untuk memberikan Testimoni/Saran</p>
    </div>
</div