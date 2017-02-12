<?php

namespace frontend\modules\seller\controllers;

use yii\web\Controller;

/**
 * Default controller for the `seller` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionHome()
    {
        echo "11";
    }
}
