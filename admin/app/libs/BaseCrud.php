<link rel="stylesheet" href="../public/css/toastr.css">
<script src="../public/jquery-3.5.1.min.js"></script>
<script src="../public/js/toastr.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script>
    BaseCrud = {
        _urlLoadDataItem: null,
        _urlShowDetail: null,
        _urlCreate: null,
        _urlStore: null,
        _urlFormEdit: null,
        _urlUpdate: null,
        _urlDestroy: null,

        init: function (urlLoadDataItem = null, urlShowDetail = null, urlCreate = null, urlStore = null, urlFormEdit = null, urlUpdate = null, urlDelete = null){
            this._urlLoadDataItem = urlLoadDataItem;
            this._urlCreate = urlCreate;
            this._urlShowDetail = urlShowDetail;
            this._urlStore = urlStore;
            this._urlFormEdit = urlFormEdit;
            this._urlUpdate = urlUpdate;
            this._urlDestroy = urlDelete;

            this.loadDataItems();
        },

        loadDataItems: function () {
            $.ajax({
               url: this._urlLoadDataItem,
                type: 'POST',
                data: {},
                success: function (res){
                    $('#div-content').html(res);
                },error: function (err){
                    console.log(err);
                }

            });
        },

        show: function (paramId, paramUrl = null){
            let url;
            if (paramUrl !== null) url = paramUrl;
            else url = this._urlShowDetail;

            $.ajax({
                url: url,
                type: 'POST',
                data: {paramId},
                success: function (res) {
                    $('#modal').html(res);
                    $('#modal-show').modal('show');
                    toastr.success('load thanh cong');
                    console.log(res);
                }, error: function (){
                    console.log('fail');
                }
            });
        },

        create: function(paramUrl = null){ // se dung de show modal cho tao bat ky data nao vao db
            let url = paramUrl;
            if (paramUrl === null) url = this._urlCreate;
            $.ajax({
                url: url,
                type: 'GET',
                success: function(res){
                    console.log(res);
                    $('#modal').html(res);
                    $('#modal-form').modal('show');
                    toastr.success('Load Thành công !!');
                }, error: function() {
                    toastr.error('Có lỗi xảy ra !!!');
                }
            });
        },
        store: function (paramUrl = null){
            let url = paramUrl;
            if (paramUrl === null) url = this._urlStore;
            $.ajax({
                url: url,
                type: 'POST',
                data: $('#data-upload').serialize(),
                success: function (res){
                    if (res == 0) toastr.error('Thêm thất bại');
                    else {
                        toastr.success('Thêm thành công');
                        $('#modal-form').modal('hide');
                        BaseCrud.loadDataItems();
                    }
                }
            });
        },
        storeUploadFile(paramUrl = null){
            let url = paramUrl;
            if (paramUrl === null) url = this._urlStore;

            let fileBase64;
            // var formData = new FormData();
            var dataUpload = {
                nameFile: '',
                fileBase64: ''
            };
            if ($('#file-document')[0].files.length > 0){
                // formData.append('file', $('#'+file)[0].files[0]);
                var reader = new FileReader();
                reader.readAsDataURL($('#file-document')[0].files[0]);


                reader.onload = function () {
                    dataUpload.nameFile = $('#nameFile').val();
                    dataUpload.fileBase64 = reader.result;
                    $.ajax({
                        url,
                        type: 'POST',
                        data: dataUpload,
                        success: function (res){
                            if (res == 0) toastr.error('Thêm thất bại');
                            else {
                                toastr.success('Thêm thành công');
                                $('#modal-form').modal('hide');
                                BaseCrud.loadDataItems();
                            }
                        }
                    });
                };
            }
        },
        destroy: function (id = null, paramUrl = null){
            if (id === null) return toastr.error('Id đang rỗng');
            let url = paramUrl;
            if (paramUrl === null) url = this._urlDestroy;
            $.ajax({
                url: url,
                type: 'POST',
                data: {id},
                success: function (res){
                    if (res == 0) return toastr.error('Xóa thất bại');
                    toastr.success('Xóa thành công');
                    BaseCrud.loadDataItems();
                }, error: function (err){
                    toastr.error('Có lỗi xảy ra');
                }
            })
        },
        showFormEdit(id = null, paramUrl = null){
            if (id === null) return toastr.error('Id đang rỗng');
            let url = paramUrl;
            if (paramUrl === null) url = this._urlFormEdit;
            $.ajax({
               url: url,
                type: 'POST',
                data: {id},
                success: function (res){
                    $('#modal').html(res);
                    $('#modal-form-edit').modal('show');
                },error: function (err) {
                   toastr.error('Có lỗi xảy ra !');
                }
            });
        },
        update(id = null, paramUrl = null){
            if (id === null) return toastr.error('Id đang rỗng');
            let url = paramUrl;
            if (paramUrl === null) url = this._urlUpdate;
            url = `${url}&id=${id}`;
            $.ajax({
               url,
               type: 'POST',
               data: $('#data-upload-form-update').serialize(),
               success: function (res){
                   if (res == 0) return toastr.error('Cập nhật thất bại');
                   toastr.success('Cập nhật thành công');
                   $('#modal-form-edit').modal('hide');
                   BaseCrud.loadDataItems();
               },error: function (err) {
                    toastr.error('Có lỗi xảy ra !');
                }
            });
        }
    }
</script>