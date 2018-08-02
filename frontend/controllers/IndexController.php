<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2018/7/8
 * Time: 14:37
 */

namespace frontend\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;


class IndexController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}