<?php
include "checklogin.php";
include 'controllers/c_table.php';
$table_edit = new C_table();
$table_edit->edit_table();
?>