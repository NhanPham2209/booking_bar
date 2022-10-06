<?php
include "checklogin.php";
include 'controllers/c_booking_bar.php';
$booking = new C_booking_bar();
$booking->booking_bar();
?>