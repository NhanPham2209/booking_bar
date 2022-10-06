<?php
include "checklogin.php";
include 'controllers/c_img_bar.php';
$img_bar_edit = new C_img_bar();
$img_bar_edit->edit_img_bar();
?>