<?php 
include "models/m_menu.php";
class C_menu {

    public function show_menu(){       
        $m_menu = new M_menu();
        $menu = $m_menu->show_menu();
        $view = "views/menu/v_menu.php";
        include "templates/layout.php";
    }

    public function add_menu(){
        $m_menu_add = new M_menu();
        $view = "views/menu/v_add_menu.php";
        include "templates/layout.php";
        if(isset($_POST['menu_add'])){
            $menu_id            = null;
            $menu_name          = $_POST['menu_name_add'];
            $menu_price         = $_POST['menu_price_add'];
            $menu_img           = $_FILES['menu_img_add']['name'];
            $menu_image_temp    = $_FILES['menu_img_add']['tmp_name'];
            $result_menu_add    = $m_menu_add->menu_add($menu_id,$menu_name,$menu_price,$menu_img);
            if($result_menu_add){
                move_uploaded_file($menu_image_temp,"../public/img/$menu_img");              
                echo "<script>alert('Thêm thành công !');window.location='menu.php'</script>";
            }else{
                echo"<script>alert('Thêm không thành công !')</script>";
            }
        }
        
    }  

    public function edit_menu(){         
        $m_menu_edit = new M_menu(); 
        if(isset($_GET['id'])){
            $id = $_GET['id'];  
            $menu_edit_by_id = $m_menu_edit->read_menu_by_id($id);
            if(isset($_POST['menu_edit'])){            
                $menu_id_edit            = $id;
                $menu_name_edit          = $_POST['menu_name_fix'];
                $menu_price_edit         = $_POST['menu_price_fix'];
                $menu_img_edit           = $_FILES['menu_img_fix']['name'];
                $menu_image_temp         = $_FILES['menu_img_fix']['tmp_name'];
                $result_menu_edit        = $m_menu_edit->menu_edit($menu_id_edit,$menu_name_edit,$menu_price_edit,$menu_img_edit);
                if($result_menu_edit){
                    move_uploaded_file($menu_image_temp,"../public/img/$menu_img_edit");              
                    echo "<script>alert('Sửa thành công !');window.location='menu.php'</script>";
                }
                else{
                    echo"<script>alert('Sửa không thành công !')</script>";
                }
            }
            $view = "views/menu/v_edit_menu.php";
            include("templates/layout.php"); 
        }
    }

    public function menu_delete(){ 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_menu_delete              = new M_menu();
            $result_menu_delete         = $m_menu_delete->menu_delete($id);
            if($result_menu_delete){
                echo"<script>alert('Xóa thành công !');window.location='menu.php'</script>";
            }
            else{
                echo"<script>alert('Xóa không thành công !')</script>";
            }
            
        }      
    }
}