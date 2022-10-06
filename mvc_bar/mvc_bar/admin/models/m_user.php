<?php
include_once("database.php");
class M_user extends database
{
    function read_user()
    {
        $sql="SELECT * FROM users";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function read_user_by_idrole()
    {
        $sql="SELECT * FROM users WHERE user_level = 2";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function read_user_by_id_pass($ten,$mk)
    {
        $sql="SELECT * FROM users WHERE user_username = ? AND user_password = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten,md5($mk)));
    }
}