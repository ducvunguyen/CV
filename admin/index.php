<?php
//define('BASE_PATH_ADMIN', 'admin/index.php');

if(file_exists('app/route/web.php')){
    require_once('app/config/constant.php');
    require 'app/route/web.php';
}else{
    echo "Ban khong co quyen truy cap";
}


?>