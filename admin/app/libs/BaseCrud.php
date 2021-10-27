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
        _urlEdit: null,
        _urlUpdate: null,
        _urlDestroy: null,

        init: function (urlLoadDataItem = null, urlShowDetail = null, urlCreate = null, urlStore = null, urlEdit = null, urlUpdate = null, urlDelete = null){
            this._urlLoadDataItem = urlLoadDataItem;
            this._urlCreate = urlCreate;
            this._urlShowDetail = urlShowDetail;
            this._urlStore = urlStore;
            this._urlEdit = urlEdit;
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
        destroy: function (id = null, paramUrl = null){
            if (id === null) return toastr.error('Id đang rỗng');
            let url = paramUrl;
            console.log(paramUrl)
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
        }
    }
</script>