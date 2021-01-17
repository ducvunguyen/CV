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
<div id="modal">

</div>
<?php require 'app/libs/BaseCrud.php'?>
<script>
    BaseCrud.init('?c=dashboard&d=loadDataItems', '?c=dashboard&d=show', '?c=dashboard&d=create');
</script>
<!-- jquery
    ============================================ -->
<script src="../public/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="../public/js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="../public/js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="../public/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="../public/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="../public/js/owl.carousel.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="../public/js/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="../public/js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="../public/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../public/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="../public/js/metisMenu/metisMenu.min.js"></script>
<script src="../public/js/metisMenu/metisMenu-active.js"></script>
<!-- sparkline JS
    ============================================ -->
<script src="../public/js/sparkline/jquery.sparkline.min.js"></script>
<script src="../public/js/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
    ============================================ -->
<script src="../public/js/calendar/moment.min.js"></script>
<script src="../public/js/calendar/fullcalendar.min.js"></script>
<script src="../public/js/calendar/fullcalendar-active.js"></script>
<!-- float JS
    ============================================ -->
<script src="../public/js/flot/jquery.flot.js"></script>
<script src="../public/js/flot/jquery.flot.resize.js"></script>
<script src="../public/js/flot/curvedLines.js"></script>
<script src="../public/js/flot/flot-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="../public/js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="../public/js/main.js"></script>

</body>

</html>