<!-- Modal -->
<script href="../public/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.js"></script>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tạo tài khoản</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="data-upload" class="data-upload">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <label>Tên tài liệu <span class="text-danger">(*)</span></label>
                            <input name="nameFile" id="nameFile" type="text" class="form-control" placeholder="Enter user name">
                        </div>
                        <div class="col-md-5 offset-md-2">
                            <label>Upload <span class="text-danger">(*)</span></label>
                            <input type="file" name="base64" class="form-control" id="file-document" placeholder="Enter password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="BaseCrud.storeUploadFile('?c=document&doc=uploadFile')">Save changes</button>
                </div>
            </form>
        </div>

        <!-- <script type="text/javascript">
            $('.datepicker').datepicker({
                format: 'mm/dd/yyyy',
                startDate: '-3d'
            });
        </script> -->