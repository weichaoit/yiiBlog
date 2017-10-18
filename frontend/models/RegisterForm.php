<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/18
 * Time: 14:42
 */

namespace frontend\models;


use yii\base\Model;

class RegisterForm extends Model {

    public $id;
    public $name;
    public $age;
    public $sex;
    public $password;
    public $hobby;
    public $intro;

    /**
     * 定义自动验证规则
     */
     public function rules() {

         return [
             ['name','required','message'=>'名字必须填写'],
             ['password','required','message'=>'密码不能为空'],
             [['age','sex','hobby','intro'],'required','message'=>'必填'],
             ['age','integer','message'=>'年龄必须为整数'],

         ];
     }

}