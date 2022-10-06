<?php
include "checklogin.php";
include 'controllers/c_dj.php';
$dj_delete = new C_dj();
$dj_delete->delete_dj();
?>