<?php
include "checklogin.php";
include 'controllers/c_dj.php';
$dj_edit = new C_dj();
$dj_edit->edit_dj();
?>