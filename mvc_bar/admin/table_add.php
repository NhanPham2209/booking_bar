<?php 
    include "checklogin.php";
    include "controllers/c_table.php";
    $add_menu = new C_table();
    $add_menu->add_table();
?>