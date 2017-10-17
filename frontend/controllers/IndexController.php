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
        // 使用AR
        // 表示查询出account中的所有数据
//        var_dump(\Yii::$app->db);
//        $db = new \yii\db\Connection();
//        var_dump(Yii::$app->params['pi']);
        // 设置别名
//        Yii::setAlias('@myroot', 'D:/yii');
//        Yii::setAlias('@myurl', 'http://www.yii.com');
//        echo "<hr/>";
//        var_dump(Yii::getAlias('@web'));
//        exit;
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
            $account = new Account();

            $account->name = $name;
            $account->age = $age;
            $account->save();
            exit('保存成功!');
        }
        return $this->render('add');
    }
}