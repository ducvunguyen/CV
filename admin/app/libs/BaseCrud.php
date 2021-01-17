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

        create: function(paramUrl = null){
            let url = paramUrl;
            if (paramUrl === null) url = this._urlCreate;
            console.log(url);
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
        }
    }
</script>