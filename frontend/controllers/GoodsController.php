<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/18
 * Time: 13:32
 */

namespace frontend\controllers;


use yii\web\Controller;

class GoodsController extends Controller {

//    public $layout = false;

    public function actionIndex(){

        return $this->render('index',['goods'=>'1345']);
    }
}