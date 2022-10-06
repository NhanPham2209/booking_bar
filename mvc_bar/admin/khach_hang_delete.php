<?php
include "checklogin.php";
include 'controllers/c_khach_hang.php';
$khach_hang_delete = new C_khach_hang();
$khach_hang_delete->delete_khach_hang();
?>