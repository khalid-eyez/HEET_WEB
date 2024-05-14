<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Home controller
 */
class HomeController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionGallery()
    {
        return $this->render('gallery');
    }
    public function actionAbout()
    {
        return $this->render('about');
    }

}
