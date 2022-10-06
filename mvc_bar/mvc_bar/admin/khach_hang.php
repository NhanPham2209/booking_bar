<?php
include "checklogin.php";
include 'controllers/c_khach_hang.php';
$khach_hang = new C_khach_hang();
$khach_hang->hien_thi_khach_hang()
?>