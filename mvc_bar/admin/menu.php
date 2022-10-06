<?php
include_once 'checklogin.php';
include('controllers/c_menu.php');
$c_banner = new C_menu();
$c_banner->show_menu();
?>