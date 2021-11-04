<?php
    include 'app/view/layout/header.php';
    include 'app/view/layout/side_bar.php';
?>
<div class="all-content-wrapper">
    <?php include 'app/view/layout/header.php'; ?>
    <br>
    <div class="calender-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="calender-inner" id="div-content">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal"></div>
<?php require 'app/libs/BaseCrud.php'?>
<script>
    BaseCrud.init('?c=dashboard&d=loadDataItems', '?c=dashboard&d=show', '?c=dashboard&d=create', '?c=dashboard&d=store');
</script>
<!-- jquery
<?php
include 'app/view/layout/footer.php';
?>