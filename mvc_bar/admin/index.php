<?php 
    include_once 'checklogin.php';
    include_once ("controllers/c_home.php");
    $c_home = new C_home();
    $c_home->index();
?>