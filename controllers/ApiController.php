<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ApiController extends Controller
{
    public function actionTest()
    {
            $json = [
                'cities' => [
                    'Moscow' => -15, 'Vladimir' => -10, 'Podolsk' => -5
                ],
            ];

        header('Content-type: application/json');
        echo json_encode( $json );
        exit();
    }
}