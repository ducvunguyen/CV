<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
            <strong><img src="img/logo/logosn.png" alt="" /></strong>
        </div>
        <div class="nalika-profile">
            <div class="profile-dtl">
                <a href="?c=profile"><img src="https://t4.ftcdn.net/jpg/03/46/93/61/360_F_346936114_RaxE6OQogebgAWTalE1myseY1Hbb5qPM.jpg" alt="" /></a>
                <h2><?php echo $_SESSION['fullname']?></h2>
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a  href="<?php echo INDEX_PATH?>">
                            <span class="mini-click-non">Người dùng</span>
                        </a>
                    </li>

                    <li class="active">
                        <a  href="<?php echo DOCUMENT_PATH?>">
                            <span class="mini-click-non">Quản lý tài liệu</span>
                        </a>
                    </li>

                    <li><a title="Password Recovery" href="?c=dashboard&d=logout"><span class="mini-sub-pro">Logout</span></a></li>
                </ul>
            </nav>
        </div>
    </nav>
</div>