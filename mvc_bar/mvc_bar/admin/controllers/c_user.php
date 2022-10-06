<?php
@session_start();
include ("models/m_user.php");
class C_user
{
    function Hien_thi_dang_nhap()
    {
        $flag= false;
        if(isset($_POST["login"]))
        {
            
            $ten=$_POST["username"];
            $m_user=new M_user();
            $mk=$_POST["password"];
            $this->luu_dang_nhap($ten,$mk);
        }
        if(isset($_SESSION['user_admin']))
        {
            if($_SESSION['user_admin'] -> user_level == 1) {
                header("location:index.php");
                // echo print_r($_SESSION['user_admin']);
                // die();
            }
            else
            {
                $flag = true;
                header("location:login.php");
            }

        }

        else
        {
            if ($flag == true)
            {
               
                header("location:login.php");
            }
            else {
            }
            
            header("location:login.php");
        }




    }
    function thoat_dang_nhap()
    {
        unset($_SESSION['user_admin']);
        header("location:login.php");
    }

    function luu_dang_nhap($ten,$mk)
    {
        $m_user=new M_user();
        $user = $m_user->read_user_by_id_pass($ten,$mk);
        if(!empty($user)) {
            $_SESSION['user_admin'] = $user;
        }
    }

}
?>