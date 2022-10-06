<?php
include "checklogin.php";
include 'controllers/c_img_bar.php';
$img_bar = new C_img_bar();
$img_bar->hien_thi_img_bar();
?>