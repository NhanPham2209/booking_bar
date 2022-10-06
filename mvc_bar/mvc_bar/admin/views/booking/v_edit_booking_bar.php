<?php foreach($khach_hang as $list => $item) { ?>
<div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            <h3 style="text-align: center; color:black;">Sửa thông tin booking của khách hàng <?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $khach_hang_name = $m_khach_hang->read_infor_khach_hang($khach_hang_id);
                        foreach($khach_hang_name as $key => $value){
                            $name = $value->khach_hang_name;
                            echo$name;
                        } 
                        ?></h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Họ và tên khách hàng</label>
                        <input type="text" class="form-control" name="khach_hang_name_fix" value="<?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $khach_hang_name = $m_khach_hang->read_infor_khach_hang($khach_hang_id);
                        foreach($khach_hang_name as $key => $value){
                            $name = $value->khach_hang_name;
                            echo$name;
                        } 
                        ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại khách hàng</label>
                        <input type="text" class="form-control" name="khach_hang_tel_fix" value=" <?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $khach_hang_tel = $m_khach_hang->read_infor_khach_hang($khach_hang_id);
                        foreach($khach_hang_tel as $key_1 => $value_1){
                            $tel = $value->khach_hang_so_dien_thoai;
                            echo$tel;
                        } 
                        ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Số bàn</label>
                        <select name="table_name" id="table_name" class="table_name form-control">
                            <option value="">---Chọn bàn---</option>
                            <?php foreach($table as $key => $value) {?>
                            <option value="<?php echo$value->table_id; ?>">
                                <?php echo $value->table_name. " ".number_format($value->table_price)." VNĐ"; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Vị trí bàn</label>
                        <select name="location_table" id="location_table" class="location_table form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Món ăn</label>
                        <div id="divOderMenu">
                            <div class="order row">
                                <div class="col-lg-4 col-md-4 form-group">
                                    <select class="form-control" name="menuName[]">
                                        <option>Chọn món ăn</option>
                                        <?php  foreach($menu as $key => $value) { ?>
                                        <option value="<?php echo$value->menu_id; ?>"><?php echo$value->menu_name; ?>
                                        </option>
                                        <?php  } ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 form-group">
                                    <input type="text" class="form-control" name="menuSoLuong[]"
                                        placeholder="Nhập số lượng">
                                </div>
                                <div class="col-lg-2 col-md-2 form-group">
                                    <input id="btnAddOrder" type="button" class="form-control" value="THÊM MÓN">
                                </div>
                                <div class="col-lg-2 col-md-2 form-group">
                                    <input onClick="window.location.reload();" type="button" class="form-control"
                                        value="XÓA TẤT CẢ MÓN">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng người</label>
                        <input type="text" class="form-control" name="so_luong_nguoi_fix" value="<?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_8 => $value_8){
                            $so_nguoi = $value_8->booking_so_nguoi;
                        } 
                        echo$so_nguoi." người";
                        ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Thời gian</label>
                        <input type="datetime-local" class="form-control" name="time_fix" value="<?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_9 => $value_9){
                            $time = $value_9->booking_thoi_gian;
                        } 
                        echo$time;
                        ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Ghi chú</label>
                        <input type="text" class="form-control" name="ghi_chu_fix" value="<?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_10 => $value_10){
                            $ghi_chu = $value_10->booking_ghi_chu;
                        } 
                        echo$ghi_chu;
                        ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <select name="change_status" id="" class="form-control">
                            <option value="<?php 
                        $khach_hang_id   = $item->booking_khach_hang_id;
                        $print_khach_hang = $m_booking->select_booking_bar_by_id($khach_hang_id);
                        foreach($print_khach_hang as $key_11 => $value_11){
                            $status = $value_11->status;
                        } 
                        echo$status;
                        ?>"></option>
                            <?php 
                            if($status == 'Chưa gọi') {
                                echo "<option value='Đã gọi'>Đã gọi</option>";         
                            } else {
                                echo "<option value='Chưa gọi'>Chưa gọi</option>";         
                            }    
                        ?>
                        </select>
                    </div>
                    <div>
                        <input type="submit" value="Cập nhật" class="btn btn-success float-left" name="booking_bar_edit">
                    </div>
                    <div class="div">
                        <?php print_r($id_booking_menu) ?>
                    </div>
                </div>
            </form>
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

.fl_right {
    float: right;
    padding: 15 10px;
    margin-bottom: 10px;
}
</style>
<script>
$(document).ready(function() {
    $("#table_name").change(function() {
        var id = $("#table_name").val();
        $.post("gettable2.php", {
            id_location: id
        }, function(data) {
            $("#location_table").html(data);
        })
    });

});
$('#btnAddOrder').click(function() {
    getRowOrder();
});

function getRowOrder() {
    var totalRow = $('#divOderMenu .order').length;
    if (totalRow > 100) {
        alert('Quán Bar này k có nhiều món vậy đâu =))');
    } else {
        $.ajax({
            url: "addroworder2.php",
            method: "GET",
            success: function(response) {
                $('#divOderMenu').append(response);
            }
        });
    }
}
</script>