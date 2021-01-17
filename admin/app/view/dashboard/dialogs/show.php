<!-- Modal -->
<style>
    .label{
        color: black;
    }

    input{
        background: #152036;
    }
</style>
<div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thông tin người dùng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" >
                    <div class="col-md-5">
                        <label fclass="label">Tên người dùng</label>
                        <div class="form-control" placeholder="Last name">
                            <?php echo $infoUser['fullname'] ?>
                        </div>
                    </div>
                    <div class="col-md-5 ml-auto">
                        <label fclass="label"> Email</label>
                        <div class="form-control" placeholder="Last name">
                            <?php echo $infoUser['email'] ?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5">
                        <label fclass="label">Ngày sinh</label>
                        <div class="form-control" placeholder="Last name">
                            <?php echo $infoUser['birthday'] ?>
                        </div>
                    </div>
                    <div class="col-md-5 ml-auto">
                        <label fclass="label">Nhóm ngành</label>
                        <div class="form-control" placeholder="Last name">
                            <?php echo $infoUser['name_user_skill'] ?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row" >
                    <div class="col-md-10">
                        <label fclass="label">Địa chỉ</label>
                        <div class="form-control" placeholder="Last name">
                            <?php echo $infoUser['address'] ?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row" >
                    <div class="col-md-5">
                        <label fclass="label">Kỹ năng</label>
                        <div class="form-control" placeholder="Last name">
                            <?php echo $infoUser['name_skill'] ?>
                        </div>
                    </div>
                    <div class="col-md-5 ml-auto">
                        <label fclass="label">Mức độ thông thạo</label>
                        <div class="form-control" placeholder="Last name">
                            <?php echo $infoUser['process'] ?>%
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>