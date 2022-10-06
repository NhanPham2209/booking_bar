<?php
include_once("database.php");
class M_menu extends database
{
    public function show_menu()
    {
            $sql = "SELECT * FROM menu";
            $this->setQuery($sql);
            return $this->loadAllRows();
   
    }   
    public function menu_add($menu_id,$menu_name,$menu_price,$menu_img)
    {
            $sql = "INSERT INTO menu VALUES (?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($menu_id,$menu_name,$menu_price,$menu_img));
   
    }
    public function menu_delete($id)
    {
        $sql = "DELETE FROM menu WHERE menu_id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
   
    }
    public function menu_edit($menu_id,$menu_name,$menu_price,$menu_img)
    {
            $sql = "UPDATE menu SET menu_name = ?,menu_price = ?,menu_img = ? WHERE menu_id = ?";
            $this->setQuery($sql);
            return $this->execute(array($menu_name,$menu_price,$menu_img,$menu_id));
   
    }
    public function read_menu_by_id($id)
    {
            $sql = "SELECT * FROM menu WHERE menu_id = ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($id));
   
    }
    public function random($string, $int)
        {
            return substr(str_shuffle($string), 0, $int);
        }
}