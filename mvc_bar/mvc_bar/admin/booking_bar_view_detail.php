<?php
include "checklogin.php";
include 'controllers/c_booking_bar.php';
$booking_bar_view_detail = new C_booking_bar();
$booking_bar_view_detail->view_detail_booking_bar();
?>