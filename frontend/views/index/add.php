<form action="" method="post">
    <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
    <div class="form-group">
        <label>姓名</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>年龄</label>
        <input type="text" class="form-control" name="age">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-danger" value="提交">
    </div>
</form>