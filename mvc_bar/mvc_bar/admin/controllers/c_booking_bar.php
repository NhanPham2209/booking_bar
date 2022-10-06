<?php 
include "models/m_booking_bar.php";
include "models/m_table.php";
include "models/m_menu.php";
class C_booking_bar{
    public function booking_bar(){  
        $m_booking              = new M_booking_bar();
        $booking                = $m_booking->show_booking_bar();
        $m_khach_hang           = new M_booking_bar();
        $khach_hang             = $m_khach_hang->show_booking_bar_id_khach_hang();
        $m_location             = new M_booking_bar();  
        $m_table                = new M_booking_bar(); 
        $m_booking_menu         = new M_booking_bar(); 
        $m_menu                 = new M_booking_bar();      
        $view                   = "views/booking/v_booking_bar.php";
        include "templates/layout.php";
    }
    public function view_detail_booking_bar(){
        if(isset($_GET['view_detail'])){
            $id = $_GET['view_detail'];
            $m_khach_hang = new M_booking_bar();
            $khach_hang   = $m_khach_hang->show_booking_bar_id_khach_hang_by_id($id);
            $m_booking              = new M_booking_bar();
            $m_location             = new M_booking_bar();  
            $m_table                = new M_booking_bar(); 
            $m_booking_menu         = new M_booking_bar(); 
            $m_menu                 = new M_booking_bar(); 
        }
             
        $view                   = "views/booking/v_view_detail_booking_bar.php";
        include "templates/layout.php";
    }
    public function edit_booking_bar(){
        
        $table_all    = new M_table();
        $table        = $table_all->show_table();
        $m_booking              = new M_booking_bar();
        $m_location             = new M_booking_bar();  
        $m_table                = new M_booking_bar(); 
        $m_booking_menu         = new M_booking_bar();
        $m_module               = new M_booking_bar();
        $menu_all               = new M_menu();
        $menu                   = $menu_all->show_menu();
        if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $m_khach_hang = new M_booking_bar();
            $khach_hang   = $m_khach_hang->show_booking_bar_id_khach_hang_by_id($id);
            
            if(isset($_POST['booking_bar_edit'])){
                $m_khach_hang = new M_booking_bar();
                $khach_hang   = $m_khach_hang->show_booking_bar_id_khach_hang_by_id($id);
                $ho_ten             = $_POST['khach_hang_name_fix'];
                $tel                = $_POST['khach_hang_tel_fix'];
                $locationTable      = $_POST['location_table'];
                $menuName           = $_POST['menuName'];
                $menuSoLuong        = $_POST['menuSoLuong'];
                $edit_khach_hang    = $m_khach_hang->edit_khach_hang($id,$ho_ten,$tel);
                foreach($menuName  as $index => $menuNames){
                    $menu_id                = $menuNames;
                    $booking_menu_so_luong  = $menuSoLuong[$index];
                    foreach($khach_hang as $list => $item) { 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_5 => $value_5){
                            $id_booking_menu = $value_5->booking_menu_id;
                            // $result_booking_menu    = $m_module->edit_booking_menu($id_booking_menu,$menu_id,$booking_menu_so_luong);
                        }
                    }
                    
                    
                    
                    // $read_booking_menu      = $m_module->read_booking_menu_by_all($menu_id,$booking_menu_so_luong);
                    // foreach($read_booking_menu as $key => $value){
                    //     $booking_menu_id    = $value->booking_menu_id;
                    //     $result_booking_bar = $m_booking->booking_bar($id,$booking_khach_hang_id,$locationTable,$booking_menu_id,$soNguoi,$time,$ghiChu,'Chưa gọi');
                    // }           
                }
            }

        }
            
        $view = "views/booking/v_edit_booking_bar.php";
        include "templates/layout.php";
        }
}