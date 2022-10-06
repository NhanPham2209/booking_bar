<?php
include_once("database.php");
class M_table extends database
{
    public function show_table()
    {
            $sql = "SELECT * FROM tables";
            $this->setQuery($sql);
            return $this->loadAllRows();
   
    }
    public function read_table_by_id($id)
    {
            $sql = "SELECT * FROM tables WHERE table_id = ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($id));
   
    }
    public function add_table($table_id,$table_name,$table_content,$table_price,$table_img)
    {
            $sql = "INSERT INTO tables VALUES (?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($table_id,$table_name,$table_content,$table_price,$table_img));
   
    }
    public function delete_table($id)
    {
        $sql = "DELETE FROM tables WHERE table_id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
   
    }
    public function edit_table($table_id,$table_name,$table_content,$table_price,$table_img)
    {
            $sql = "UPDATE tables SET table_name = ?,table_content = ?,table_price = ?,table_img = ? WHERE table_id = ?";
            $this->setQuery($sql);
            return $this->execute(array($table_name,$table_content,$table_price,$table_img,$table_id));
   
    }
    public function read_location_by_id($id){
        $sql = "SELECT * from location WHERE location_table_id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
}