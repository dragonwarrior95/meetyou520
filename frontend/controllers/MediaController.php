<?php
/**
 * Created by PhpStorm.
 * User: meitu
 * Date: 2018/9/3
 * Time: 12:26
 */

namespace frontend\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;


class MediaController extends Controller
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