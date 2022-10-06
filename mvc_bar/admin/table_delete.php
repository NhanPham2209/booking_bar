<?php
include "checklogin.php";
include 'controllers/c_table.php';
$table_delete = new C_table();
$table_delete->delete_table();
?>