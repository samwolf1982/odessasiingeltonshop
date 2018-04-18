<?php

namespace frontend\controllers;

class MainpageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
