<?php
include "checklogin.php";
include 'controllers/c_menu.php';
$menu_edit = new C_menu();
$menu_edit->edit_menu();
?>