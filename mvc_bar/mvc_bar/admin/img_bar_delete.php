<?php
include "checklogin.php";
include 'controllers/c_img_bar.php';
$img_bar_delete = new C_img_bar();
$img_bar_delete->delete_img_bar();
?>