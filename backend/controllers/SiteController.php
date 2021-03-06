<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\RtRw;
use backend\models\Dusun;
use backend\models\User;
use backend\models\Penduduk;
use backend\models\LaporAduan;
use backend\models\RequestPembangunan;
use backend\models\Pembangunan;
use yii\data\ActiveDataProvider;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->identity->roles_id == 1) {
            
        $this->layout = 'main';
        $rtCount = RtRw::find()->count();
        $dusunCount = Dusun::find()->count();
        $userCount = User::find()->count();
        $dataProvider = new ActiveDataProvider([
            'query' => Pembangunan::find()->where(['status_pembangunan_id' => 3])
        ]);

        return $this->render('index', ['dusunCount' => $dusunCount,'rtCount' => $rtCount, 'userCount' => $userCount,'dataProvider' => $dataProvider]);

        }

        elseif (Yii::$app->user->identity->roles_id == 2) {
        $this->layout = 'operator';

        $pendCount = Penduduk::find()->count();
        $laCount = LaporAduan::find()->count();
        $rpCount = RequestPembangunan::find()->count();
        $pembCount = Pembangunan::find()->count();
        $dataProvider = new ActiveDataProvider([
            'query' => LaporAduan::find()
        ]);

        return $this->render('operator', ['laCount' => $laCount,'rpCount' => $rpCount, 'pembCount' => $pembCount, 'pendCount' => $pendCount, 'dataProvider' => $dataProvider]);
        }
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            return $this->goBack();

        } 
        
        else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
