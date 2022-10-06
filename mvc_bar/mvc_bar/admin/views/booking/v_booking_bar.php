<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách khách booking</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại khách hàng</th>
                    <th>Bàn số</th>
                    <th>Thời gian</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($khach_hang as $list => $item) { ?>
                <tr>
                    <td><?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $khach_hang_name = $m_khach_hang->read_infor_khach_hang($khach_hang_id);
                        foreach($khach_hang_name as $key => $value){
                            $name = $value->khach_hang_name;
                            echo$name;
                        } 
                    ?></td>
                    <td><?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $khach_hang_tel = $m_khach_hang->read_infor_khach_hang($khach_hang_id);
                        foreach($khach_hang_tel as $key_1 => $value_1){
                            $tel = $value->khach_hang_so_dien_thoai;
                            echo$tel;
                        } 
                    ?></td>
                    <td><?php 
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
                    ?></td>
                    <td><?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_5 => $value_5){
                            $time = $value_5->booking_thoi_gian;
                            
                        }
                        echo$time;
                    ?></td>
                    <td><span id="change_color" class="badge badge-dark dev1m">
                            <?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_6 => $value_6){
                            $status = $value_6->status;
                            
                        }
                        echo$status;
                    ?>
                        </span></td>
                    <td>
                        <a class="btn btn-primary" href='booking_bar_view_detail.php?view_detail=<?php $khach_hang_id   = $item->booking_khach_hang_id;echo $khach_hang_id; ?>'>
                            <i class="fa-solid fa-eye"></i>
                            <span> Xem chi tiết</span>
                        </a>
                        <a class="btn btn-warning" href='booking_bar_edit.php?edit=<?php $khach_hang_id = $item->booking_khach_hang_id;echo $khach_hang_id; ?>'>
                            <i class="fa-solid fa-pen-to-square"></i>
                            <span>Sửa</span>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
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
</style>