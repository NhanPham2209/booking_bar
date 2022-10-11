<?php foreach($khach_hang as $list => $item) { ?>
<div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            <h3 style="text-align: center; color:black;">Thông tin chi tiết booking của khách hàng <?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $khach_hang_name = $m_khach_hang->read_infor_khach_hang($khach_hang_id);
                        foreach($khach_hang_name as $key => $value){
                            $name = $value->khach_hang_name;
                            echo$name;
                        } 
                        ?></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-warning fl_right" href='booking_bar_edit.php?edit=<?php $khach_hang_id = $item->booking_khach_hang_id;echo $khach_hang_id; ?>'>
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Sửa</span>
            </a>
            <table class="table table-bordered table-hover">
                <thead>
                    <th>Thông tin</th>
                    <th>Chi tiết</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Họ và tên khách hàng</td>
                        <td>
                            <?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $khach_hang_name = $m_khach_hang->read_infor_khach_hang($khach_hang_id);
                        foreach($khach_hang_name as $key => $value){
                            $name = $value->khach_hang_name;
                            echo$name;
                        } 
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại khách hàng</td>
                        <td>
                            <?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $khach_hang_tel = $m_khach_hang->read_infor_khach_hang($khach_hang_id);
                        foreach($khach_hang_tel as $key_1 => $value_1){
                            $tel = $value->khach_hang_so_dien_thoai;
                            echo$tel;
                        } 
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Số bàn</td>
                        <td>
                            <?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_2 => $value_2){
                            $id_table = $value_2->booking_ban_id;
                            $location = $m_location->read_location($id_table);
                            foreach($location as $key_3 => $value_3){
                                $id_table       =  $value_3->location_table_id;
                                $tables         =  $m_table->read_tables($id_table);
                                $location_table =  $value_3->location_table;
                                foreach($tables as $key_4 => $value_4){
                                    $table_name  = $value_4->table_name;
                                    $table_price = $value_4->table_price;
                                }                                  
                            }
                        }
                        echo$table_name." - "."Vị trí bàn số ".$location_table;
                        ?>
                        </td>
                    </tr>

                    <?php
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_5 => $value_5){
                    ?>
                    <tr>
                        <td>Món ăn - số lượng</td>
                        <td>
                            <?php
                                $id_booking_menu = $value_5->booking_menu_id;
                                $menu_booking = $m_booking_menu->read_booking_menu($id_booking_menu);
                                foreach($menu_booking as $key_6 => $value_6){
                                    $id_menu = $value_6->menu_id;
                                    $menus   = $m_menu->read_menu($id_menu);
                                    $so_luong = $value_6->booking_menu_so_luong;
                                    foreach($menus as $key_7 => $value_7){
                                        $menu_name  = $value_7->menu_name;
                                        $menu_price = $value_7->menu_price;
                                    }
                                }
                                echo$menu_name." - "." Đơn giá: ".number_format($menu_price)." VNĐ"." - "."Số lượng:"." ".$so_luong;
                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                    
                    <tr>

                        <td>Số lượng người</td>
                        <td>
                            <?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_8 => $value_8){
                            $so_nguoi = $value_8->booking_so_nguoi;
                        } 
                        echo$so_nguoi." người";
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Thời gian</td>
                        <td>
                            <?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_9 => $value_9){
                            $time = $value_9->booking_thoi_gian;
                        } 
                        echo$time;
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Ghi chú cho quán</td>
                        <td>
                            <?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_10 => $value_10){
                            $ghi_chu = $value_10->booking_ghi_chu;
                        } 
                        echo$ghi_chu;
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Trạng thái</td>
                        <td><span class="badge badge-dark dev1m">
                                <?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_11 => $value_11){
                            $status = $value_11->status;
                        } 
                        echo$status;
                        ?>
                            </span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php } ?>
<style>
.dev1m {
    padding: 10px;
    text-align: center;
    background-color: green;
    text-transform: uppercase;
}

.dev1m_js {
    padding: 10px;
    text-align: center;
    background-color: red;
    text-transform: uppercase;
}
.fl_right{
    float: right;
    padding: 15 10px;
    margin-bottom: 10px;
}
</style>