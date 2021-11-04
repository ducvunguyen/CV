<?php if(!defined('BASE_PATH_ADMIN')){ die('Ban khong co quyen truy cap'); } ?>
<button class="btn btn-primary" onclick="BaseCrud.create()"><i class="fa fa-plus" aria-hidden="true"></i> Tạo tài khoản người dùng</button>
<br>
<br>
<table class="table" style="background: white">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">fullname</th>
        <th scope="col">user name</th>
        <th scope="col">code</th>
        <th scope="col" class="text-center" rowspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listUser as $key => $item):?>
        <?php if ($_SESSION['id'] != $item['id']):?>
            <tr>
                <th scope="row"><?php echo $key + 1?></th>
                <td><?php echo $item['fullname'] ?></td>
                <td><?php echo $item['username'] ?></td>
                <td><?php echo $item['code'] ?></td>
                <td>
                    <button class="btn btn-default" onclick="BaseCrud.show(<?php echo $item['id'] ?>)">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
                <td>
                    <button class="btn btn-warning" onclick="BaseCrud.showFormEdit(<?php echo $item['id']?>, '?c=dashboard&d=showModalEdit')">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </button>
                </td>
                <td>
                    <button class="btn btn-danger" onclick="BaseCrud.destroy(<?php echo $item['id']?>, '?c=dashboard&d=destroy')">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
        <?php endif ?>
    <?php endforeach?>
    </tbody>
</table>
