<?php 
    include "checklogin.php";
    include "controllers/c_menu.php";
    $add_menu = new C_menu();
    $add_menu->add_menu();
?>