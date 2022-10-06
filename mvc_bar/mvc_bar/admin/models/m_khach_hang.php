<?php
include_once("database.php");
class M_khach_hang extends database
{
    public function show_khach_hang()
    {
            $sql = "SELECT * FROM khach_hang";
            $this->setQuery($sql);
            return $this->loadAllRows();
   
    }
    public function read_khach_hang_by_id($id)
    {
            $sql = "SELECT * FROM khach_hang WHERE khach_hang_id = ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($id));
   
    }
    public function add_khach_hang($khach_hang_id,$khach_hang_name,$khach_hang_so_dien_thoai)
    {
            $sql = "INSERT INTO khach_hang VALUES (?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($khach_hang_id,$khach_hang_name,$khach_hang_so_dien_thoai));
   
    }
    public function delete_khach_hang($id)
    {
        $sql = "DELETE FROM khach_hang WHERE khach_hang_id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
   
    }
    public function edit_khach_hang($khach_hang_id,$khach_hang_name,$khach_hang_so_dien_thoai)
    {
        $sql = "UPDATE khach_hang SET khach_hang_name = ?,khach_hang_so_dien_thoai = ? WHERE khach_hang_id = ?";
        $this->setQuery($sql);
        return $this->execute(array($khach_hang_name,$khach_hang_so_dien_thoai,$khach_hang_id));
   
    }
}