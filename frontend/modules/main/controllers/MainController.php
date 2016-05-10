<?php

namespace app\modules\main\controllers;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "inner"; // в ' public function actionIndex()', если хотим,чтобы бутстрап примеялся только к главной страницы .
        return $this->render('index');
    }

    public function actionDanik()
{
    $this->layout = "inner"; // в ' public function actionIndex()', если хотим,чтобы бутстрап примеялся только к главной страницы .
    return $this->render('danik');
}


    public function actionKate()
    {
        $this->layout = "inner"; // в ' public function actionIndex()', если хотим,чтобы бутстрап примеялся только к главной страницы .
        return $this->render('kate');
    }
}
