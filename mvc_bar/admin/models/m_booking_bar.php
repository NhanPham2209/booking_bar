<?php
include_once("database.php");
class M_booking_bar extends database
{
    public function show_booking_bar()
    {
            $sql = "SELECT * FROM booking";
            $this->setQuery($sql);
            return $this->loadAllRows();
   
    }
    public function select_booking_bar_by_id($id)
    {
            $sql = "SELECT * FROM booking WHERE booking_khach_hang_id = ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($id));
   
    }
    public function show_booking_bar_id_khach_hang()
    {
            $sql = "SELECT DISTINCT booking_khach_hang_id FROM booking";
            $this->setQuery($sql);
            return $this->loadAllRows();
   
    }
    public function show_booking_bar_id_khach_hang_by_id($id)
    {
            $sql = "SELECT DISTINCT booking_khach_hang_id FROM booking WHERE booking_khach_hang_id = ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($id));
   
    }
    public function read_infor_khach_hang($id)
    {
        $sql = "SELECT * from khach_hang WHERE khach_hang_id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    } 
    public function read_location($id)
    {
        $sql = "SELECT * from location WHERE location_id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    public function read_tables($id)
    {
        $sql = "SELECT * from tables WHERE table_id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }  
    public function read_booking_menu($id)
    {
        $sql = "SELECT * from booking_menu WHERE booking_menu_id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    public function read_menu($id)
    {
        $sql = "SELECT * from menu WHERE menu_id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    public function change_status($status,$id)
    {
            $sql = "UPDATE booking SET status = ? WHERE booking_id = ?";
            $this->setQuery($sql);
            return $this->execute(array($status,$id));
   
    }
    public function read_booking_by_id($id)
    {
            $sql = "SELECT * FROM booking WHERE booking_id = ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($id));
   
    }
    public function show_table(){
        $sql = "SELECT * from tables";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function edit_khach_hang($khach_hang_id,$khach_hang_name,$khach_hang_so_dien_thoai)
    {
        $sql = "UPDATE khach_hang SET khach_hang_name = ?,khach_hang_so_dien_thoai = ? WHERE khach_hang_id = ?";
        $this->setQuery($sql);
        return $this->execute(array($khach_hang_name,$khach_hang_so_dien_thoai,$khach_hang_id));
   
    } 
    public function edit_booking_bar($booking_id,$booking_khach_hang_id,$booking_ban_id,$booking_menu_id,$booking_so_nguoi,$booking_thoi_gian,$booking_ghi_chu,$status)
    {
        $sql = "UPDATE booking SET booking_id = ?,booking_ban_id=?,booking_menu_id=?,booking_so_nguoi=?,booking_thoi_gian=?,booking_ghi_chu=?,status=? WHERE booking_khach_hang_id = ?";
        $this->setQuery($sql);
        return $this->execute(array($booking_id,$booking_ban_id,$booking_menu_id,$booking_so_nguoi,$booking_thoi_gian,$booking_ghi_chu,$status,$booking_khach_hang_id));
   
    } 
    public function edit_booking_menu($booking_menu_id,$menu_id,$booking_menu_so_luong)
    {
        $sql = "UPDATE booking_menu SET menu_id = ?,booking_menu_so_luong=? WHERE booking_menu_id = ?";
        $this->setQuery($sql);
        return $this->execute(array($menu_id,$booking_menu_so_luong,$booking_menu_id));
   
    } 
    
}