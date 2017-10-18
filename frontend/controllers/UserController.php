<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/18
 * Time: 14:43
 */

namespace frontend\controllers;


use frontend\models\RegisterForm;
use yii\web\Controller;

class UserController extends Controller {

    public function actionRegister(){

        $model = new RegisterForm();
        $request = \yii::$app->request;
        if($request->isPost){
            if($model->load($request->post())){
                $model->validate();
            }
            exit;
        }




        return $this->render('register',[
            'model' => $model,
        ]);
    }
}