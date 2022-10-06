<?php
include "checklogin.php";
include 'controllers/c_menu.php';
$menu_delete = new C_menu();
$menu_delete->menu_delete();
?>