<?php

namespace common\modules\API\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\SignupForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class AuthController extends Controller
{
    
    public function actionLogin()
    {
        // if (!Yii::$app->user->isGuest) {
        //     return $this->goHome();
        // }

        // $this->layout = 'blank';

        $request = Yii::$app->request;
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return json_encode([
                'status' => true,
            ]);
        }else{
            return $this->render('login', 
                ['model' => $model,]);
        }
        
        // else {
        //     $model->password = '';
        //     return "its work";
        // }
    }

    public function getSignUpError($model) 
    {
        if(array_key_exists('username', $model->getErrors())) {
            return $model->getErrors()['username'][0];
        } 
        else if (array_key_exists('email', $model->getErrors())) {
            return $model->getErrors()['email'][0];
        }
        else if (array_key_exists('password', $model->getErrors())) {
            return $model->getErrors()['password'][0];
        }
        else {
            return 'Mungkin Beberapa Error Terjadi';
        }
    }
 
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            return json_encode([
                'status' => true,
            ]);
        }
        if ($model->hasErrors()) {
            return json_encode(
                [
                    'status' => 'false',
                    'message' => $this->getSignUpError($model)
                ]
            );
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }
 
}
?>