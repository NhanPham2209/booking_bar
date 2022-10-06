<?php
    include 'models/m_web.php';
    $m_module       = new M_web();
    $m_khach_hang   = new M_web();
    $m_booking      = new M_web();
    if(isset($_POST['booking_bar'])){      
        $id                =  null;
        $hoTen             = $_POST['ho_ten'];
        $tel               = $_POST['so_dien_thoai'];
        $time              = $_POST['thoi_gian'];
        $soNguoi           = $_POST['so_nguoi'];
        $locationTable     = $_POST['location_table'];
        $menuName          = $_POST['menuName'];
        $menuSoLuong       = $_POST['menuSoLuong'];
        $ghiChu            = $_POST['ghi_chu'];
        $result_khach_hang = $m_khach_hang->add_khach_hang($id,$hoTen,$tel);
        $read_khach_hang   = $m_khach_hang->read_khach_hang_by_all($hoTen,$tel);
        foreach($read_khach_hang as $key => $value){
            $booking_khach_hang_id  = $value->khach_hang_id;
        }
        foreach($menuName as $index => $menuNames){
            $menu_id                = $menuNames;
            $booking_menu_so_luong  = $menuSoLuong[$index];
            $result_booking_menu    = $m_module->add_booking_menu($id,$menu_id,$booking_menu_so_luong);
            $read_booking_menu      = $m_module->read_booking_menu_by_all($menu_id,$booking_menu_so_luong);
            foreach($read_booking_menu as $key => $value){
                $booking_menu_id    = $value->booking_menu_id;
                $result_booking_bar = $m_booking->booking_bar($id,$booking_khach_hang_id,$locationTable,$booking_menu_id,$soNguoi,$time,$ghiChu,'Chưa gọi');
            }           
        }
        if($result_booking_bar){
            echo"<script>alert('Đặt bàn thành công! Nhân viên sẽ liên hệ với bạn sớm !');window.location='index.php'</script>";
        }
        else{
            echo "<script>alert('Đặt bàn không thành công,vui lòng đặt lại!')</script>";
        }
        
    }
?>