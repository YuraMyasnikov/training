<?php

namespace app\controllers;

use app\models\Catalog;
use app\models\Product;
use yii\web\Controller;


class SiteController extends Controller
{
    public function actionIndex()
    {
        $yu = 0;
        unset($yu);

        dd(isset($yu), $yu );

        return $this->render('index');
    }
}
