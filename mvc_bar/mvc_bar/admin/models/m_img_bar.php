<?php
include_once("database.php");
class M_img_bar extends database
{
    public function show_img_bar()
    {
            $sql = "SELECT * FROM img_bar";
            $this->setQuery($sql);
            return $this->loadAllRows();
   
    }
    public function add_img_bar($img_bar_id,$img_bar_name,$img_bar_image)
    {
            $sql = "INSERT INTO img_bar VALUES (?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($img_bar_id,$img_bar_name,$img_bar_image));
   
    }
    public function delete_img_bar($id)
    {
        $sql = "DELETE FROM img_bar WHERE img_bar_id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
   
    }
    public function read_img_bar_by_id($id)
    {
            $sql = "SELECT * FROM img_bar WHERE img_bar_id = ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($id));
   
    }
    public function edit_img_bar($img_bar_id,$img_bar_name,$img_bar_image)
    {
            $sql = "UPDATE img_bar SET img_bar_name = ?,img_bar_image = ? WHERE img_bar_id = ?";
            $this->setQuery($sql);
            return $this->execute(array($img_bar_name,$img_bar_image,$img_bar_id));
   
    }
    
}