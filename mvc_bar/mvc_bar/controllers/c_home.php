<?php
include "models/m_web.php";
class C_home{
    public function hien_thi(){
        $table_all   = new M_web();
        $table       = $table_all->show_table();
        $dj_all      = new M_web();
        $dj          = $dj_all->show_dj();
        $menu_all    = new M_web();
        $menu        = $menu_all->show_menu();
        $img_bar_all = new M_web();
        $img_bar     = $img_bar_all->show_img_bar();
        $view        = "views/home/v_home.php";
        include ("templates/layout.php");
    }
}

?>