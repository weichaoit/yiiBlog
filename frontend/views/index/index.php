<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>年龄</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($userLists as $user):?>
        <tr>
            <td><?=$user->id?></td>
            <td><?=$user->name?></td>
            <td><?=$user->age?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>