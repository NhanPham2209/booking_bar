<?php 
    include "checklogin.php";
    include "controllers/c_img_bar.php";
    $add_menu = new C_img_bar();
    $add_menu->add_img_bar();
?>