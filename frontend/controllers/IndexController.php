<?php
namespace frontend\controllers;

// 引入Account类
use frontend\models\User;
use yii\web\Controller;
use Yii;

class IndexController extends Controller
{
    /**
     * 使用的是 account表
     */
    public function actionIndex(){

        var_dump(\Yii::$app->db);

        exit;
        $userLists = User::find()->all();
        return $this->render('index', [
            'userLists' => $userLists,
        ]);
    }

    public function actionAdd(){
        //var_dump($_POST);
        if(isset($_POST['name'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];

            // 使用活动记录新增数据
            $account = new User();

            $account->name = $name;
            $account->age = $age;
            $account->save();
            exit('保存成功!');
        }
        return $this->render('add');
    }
}