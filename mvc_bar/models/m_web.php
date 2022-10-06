<?php 
    require_once ("database.php");
    class M_web extends database{
        public function random($string, $int)
        {
            return substr(str_shuffle($string), 0, $int);
        }
        public function show_table(){
            $sql = "SELECT * from tables";
            $this->setQuery($sql);
            return $this->loadAllRows();
    
        }
        public function show_dj(){
            $sql = "SELECT * from dj";
            $this->setQuery($sql);
            return $this->loadAllRows();
    
        }
        public function show_khach_hang(){
            $sql = "SELECT * from khach_hang";
            $this->setQuery($sql);
            return $this->loadAllRows();
    
        }
        public function show_menu(){
            $sql = "SELECT * from menu";
            $this->setQuery($sql);
            return $this->loadAllRows();
    
        }
        public function show_img_bar(){
            $sql = "SELECT * from img_bar";
            $this->setQuery($sql);
            return $this->loadAllRows();
    
        }
        public function read_location_by_id($id){
            $sql = "SELECT * from location WHERE location_table_id = ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($id));
        }
        public function booking_bar($booking_id,$booking_khach_hang_name,$booking_ban_id,$booking_menu_id,$booking_so_nguoi,$booking_thoi_gian,$booking_ghi_chu,$status)
        {
            $sql = "INSERT INTO booking VALUES (?,?,?,?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($booking_id,$booking_khach_hang_name,$booking_ban_id,$booking_menu_id,$booking_so_nguoi,$booking_thoi_gian,$booking_ghi_chu,$status));
   
        }
        public function read_khach_hang_by_all($name,$tel)
        {
            $sql = "SELECT * FROM khach_hang WHERE khach_hang_name = ? AND khach_hang_so_dien_thoai = ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($name,$tel));
   
        }
        public function add_khach_hang($khach_hang_id,$khach_hang_name,$khach_hang_so_dien_thoai)
        {
            $sql = "INSERT  INTO khach_hang VALUES(?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($khach_hang_id,$khach_hang_name,$khach_hang_so_dien_thoai));
   
        }   
        public function add_booking_menu($booking_menu_id,$menu_id,$booking_menu_so_luong)
        {
            $sql = "INSERT  INTO booking_menu VALUES(?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($booking_menu_id,$menu_id,$booking_menu_so_luong));
   
        } 
        public function read_booking_menu_by_all($menu_id,$booking_menu_so_luong){
            $sql = "SELECT * FROM booking_menu WHERE menu_id = ? AND booking_menu_so_luong= ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($menu_id,$booking_menu_so_luong));
        }
        

    }
?>