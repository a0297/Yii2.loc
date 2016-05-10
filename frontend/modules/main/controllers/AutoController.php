<?php

namespace app\modules\main\controllers;

class AutoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "inner"; // в ' public function actionIndex()', если хотим,чтобы бутстрап примеялся только к главной страницы .

        return $this->render('index');
    }

}
