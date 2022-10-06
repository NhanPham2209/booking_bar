<?php 
    include 'models/m_menu.php'; 
    $random     = new M_menu();
    $m_menu     = new M_menu();
    $menu1      = $m_menu -> show_menu();
    $rand       = $random -> random('123456789', 6).time();
?>
<div class="order row" data-row="<?=$rand;?>">
    <div class="col-lg-4 col-md-4 form-group">
        <select name="menuName[]" class="form-control" data-row="<?=$rand;?>">
            <option>Chọn món ăn</option>
            <?php  foreach($menu1 as $key => $value) { ?>
            <option value="<?php echo$value->menu_id; ?>"><?php echo$value->menu_name; ?></option>
            <?php  } ?>
        </select>
    </div>
    <div class="col-lg-4 col-md-4 form-group">
        <input type="text" class="form-control" name="menuSoLuong[]" placeholder="Nhập số lượng món" data-row="<?=$rand;?>">
    </div>
    <div class="col-lg-4 col-md-4 form-group">
        <input onclick="f_<?=$rand;?>()" type="button" class="form-control" value="XÓA MÓN"></button>
    </div>
</div>
<script>
function f_<?=$rand;?>() {
    $('.order[data-row="<?=$rand;?>"]').remove();
}
</script>