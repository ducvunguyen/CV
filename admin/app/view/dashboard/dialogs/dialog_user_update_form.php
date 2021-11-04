<!-- Modal -->
<script href="../public/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.js"></script>
<div class="modal fade" id="modal-form-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tạo tài khoản</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="data-upload-form-update" class="data-upload">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <label>Tên tài khoản <span class="text-danger">(*)</span></label>
                            <input name="username" type="text" value="<?php echo $infoUser['username'] ?>" class="form-control" placeholder="Enter user name">
                        </div>
                        <div class="col-md-5 mt-3">
                            <label>Tên người dùng</label>
                            <input type="text" name="fullname" value="<?php echo $infoUser['fullname'] ?>" class="form-control" placeholder="Enter full name">
                        </div>
                        <div class="col-md-5 mt-3">
                            <label>Code</label>
                            <input type="text" name="code" value="<?php echo $infoUser['code'] ?>" class="form-control" placeholder="Enter code">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="BaseCrud.update(<?php echo $infoUser['id'] ?>, '?c=dashboard&d=update')">Save changes</button>
                </div>
            </form>
        </div>

        <!-- <script type="text/javascript">
            $('.datepicker').datepicker({
                format: 'mm/dd/yyyy',
                startDate: '-3d'
            });
        </script> -->