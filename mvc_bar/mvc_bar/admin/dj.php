<?php
include "checklogin.php";
include 'controllers/c_dj.php';
$dj = new C_dj();
$dj->hien_thi_dj()
?>