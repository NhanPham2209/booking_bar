<?php
include "checklogin.php";
include 'controllers/c_booking_bar.php';
$booking_bar_edit = new C_booking_bar();
$booking_bar_edit->edit_booking_bar();
?>