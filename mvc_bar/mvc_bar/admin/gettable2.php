<?php   
   include("models/m_table.php");
   $id_location     = $_POST['id_location'];
   $location_table  = new M_table();
   $read_location   = $location_table->read_location_by_id($id_location);
   foreach($read_location as $key => $value) { ?>
        <option value="<?php echo $value->location_id ?>"><?php echo "Bàn số ".$value->location_table;?></option>

<?php } ?>