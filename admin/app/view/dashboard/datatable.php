<?php if(!defined('BASE_PATH_ADMIN')){ die('Ban khong co quyen truy cap'); } ?>
<button class="btn btn-primary" onclick="BaseCrud.create()"><i class="fa fa-plus" aria-hidden="true"></i> Tạo tài khoản người dùng</button>
<br>
<br>
<table class="table" style="background: white">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">fullname</th>
        <th scope="col">email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Ngày sinh</th>
        <th scope="col">Nhóm ngành</th>
        <th scope="col">Kỹ năng</th>
        <th scope="col">Mức độ thông thạo</th>
        <th scope="col" class="text-center" rowspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listUser as $key => $item):?>
        <tr>
            <th scope="row"><?php echo $key + 1?></th>
            <td><?php echo $item['fullname'] ?></td>
            <td><?php echo $item['email'] ?></td>
            <td><?php echo $item['address'] ?></td>
            <td><?php echo $item['birthday'] ?></td>
            <td><?php echo $item['name_user_skill'] ?></td>
            <td><?php echo $item['name_skill'] ?></td>
            <td><?php echo $item['process'] ?>%</td>
            <td>
                <button class="btn btn-default" onclick="BaseCrud.show(<?php echo $item['id'] ?>)">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </button>
            </td>
            <td>
                <button class="btn btn-warning">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
            </td>
            <td>
                <button class="btn btn-danger">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
    <?php endforeach?>
    </tbody>
</table>
