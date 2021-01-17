<!-- Modal -->
<script href="../public/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.js"></script>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">

                  <div class="row">
                    <div class="col-md-5">
                        <label>Tên tài khoản [0] <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col-md-5 offset-1">
                        <label>Mật khẩu [1] <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <label>Địa chỉ [2]</label>
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <label>Ngày sinh</label>
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-1">
                        <label for="exampleFormControlSelect2">Nhóm ngành</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                          <option>Công nghệ thông tin</option>
                      </select>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-5">
                    <label>email</label>
                    <input type="email" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-5 offset-1">
                        <label for="exampleFormControlSelect2">Phone</label>
                        <input type="text" class="form-control" placeholder="First name">
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-5">
                    <label>avatar</label>
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="col-md-5">
                        <label for="exampleFormControlSelect2">Nhóm ngành</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                          <option>Admin</option>
                          <option>Người dùng</option>
                      </select>
                  </div>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>

<!-- <script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });
</script> -->