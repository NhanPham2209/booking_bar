<?php 
    include "checklogin.php";
    include "controllers/c_khach_hang.php";
    $add_khach_hang = new C_khach_hang();
    $add_khach_hang->add_khach_hang();
?>