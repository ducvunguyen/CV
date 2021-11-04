<?php if (!defined('BASE_PATH_ADMIN')) {
    die('Ban khong co quyen truy cap');
} ?>
<button class="btn btn-primary" onclick="BaseCrud.create('?c=document&doc=create')"><i class="fa fa-plus" aria-hidden="true"></i>
    Upload tài liêu
</button>
<br>
<br>
<table class="table" style="background: white">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên tài liệu</th>
        <th scope="col">Người upload</th>
        <th scope="col" class="text-center" rowspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listDataDocument as $key => $item): ?>

        <tr>
            <th scope="row"><?php echo $key + 1 ?></th>
            <td><?php echo $item['nameFile'] ?></td>
            <td><?php echo $item['fullname'] ?></td>
            <td>
                <source src="<?php echo $item['base64']?>" type="audio/mpeg">
                <a class="btn btn-default" href="<?php echo $item['base64']?>" target="_blank">
                    Tải  file
                </a>
            </td>
            <td>
                <button class="btn btn-warning"
                        onclick="BaseCrud.showFormEdit(<?php echo $item['id'] ?>, '?c=dashboard&d=showModalEdit')">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
            </td>
            <td>
                <button class="btn btn-danger"
                        onclick="BaseCrud.destroy(<?php echo $item['id'] ?>, '?c=dashboard&d=destroy')">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
