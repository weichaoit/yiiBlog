<?php
// 创建表单.
$form = \yii\bootstrap\ActiveForm::begin();
?>

<?=$form->field($model,'name')->textInput()->label('姓名');?>
<?=$form->field($model,'password')->passwordInput()->label('密码');?>
<?=$form->field($model,'age')->textInput()->label('年龄');?>
<?=$form->field($model,'sex')->radioList(['男','女'])->label('年龄');?>
<?=$form->field($model,'hobby')->checkboxList(['乒乓球','篮球','足球'])->label('爱好');?>
<?=$form->field($model,'intro')->textarea()->label('简介');?>
<?=\yii\bootstrap\Html::submitButton('提交',['class'=>'btn btn-danger'])?>

<?php  \yii\bootstrap\ActiveForm::end(); ?>
