<?php 
    include "checklogin.php";
    include "controllers/c_dj.php";
    $add_menu = new C_dj();
    $add_menu->add_dj();
?>