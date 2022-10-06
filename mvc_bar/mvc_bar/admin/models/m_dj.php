<?php
include_once("database.php");
class M_dj extends database
{
    public function show_dj()
    {
            $sql = "SELECT * FROM dj";
            $this->setQuery($sql);
            return $this->loadAllRows();
   
    }
    public function read_dj_by_id($id)
    {
            $sql = "SELECT * FROM dj WHERE dj_id = ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($id));
   
    }
    public function add_dj($dj_id,$dj_name,$dj_img)
    {
            $sql = "INSERT INTO dj VALUES (?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($dj_id,$dj_name,$dj_img));
   
    }
    public function delete_dj($id)
    {
        $sql = "DELETE FROM dj WHERE dj_id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
   
    }
    public function edit_dj($dj_id,$dj_name,$dj_img)
    {
            $sql = "UPDATE dj SET dj_name = ?,dj_img = ? WHERE dj_id = ?";
            $this->setQuery($sql);
            return $this->execute(array($dj_name,$dj_img,$dj_id));
   
    }
}