<?php 
include "models/m_dj.php";
class C_dj {
    public function hien_thi_dj(){       
        $dj_show     = new M_dj();
        $dj_show_all = $dj_show->show_dj();
        $view = "views/dj/v_dj.php";
        include "templates/layout.php";
    }
    public function add_dj(){
        $dj_add = new M_dj();
        $view = "views/dj/v_add_dj.php";
        include "templates/layout.php";
        if(isset($_POST['add_dj'])){
            $dj_id            = null;
            $dj_name          = $_POST['dj_name'];
            $dj_img           = $_FILES['dj_img']['name'];
            $dj_image_temp    = $_FILES['dj_img']['tmp_name'];
            $result = $dj_add->add_dj($dj_id,$dj_name,$dj_img);
            if($result){
                move_uploaded_file($dj_image_temp,"../public/img/$dj_img");              
                echo "<script>alert('Thêm thành công !');window.location='dj.php'</script>";
            }else{
                echo"<script>alert('Thêm không thành công !')</script>";
            }
        }
        
    }
    public function delete_dj(){ 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $dj_delete = new M_dj();
            $result =$dj_delete->delete_dj($id);
            if($result){
                echo"<script>alert('Xóa thành công !');window.location='dj.php'</script>";
            }
            else{
                echo"<script>alert('Xóa không thành công !')</script>";
            }
            
        }      
    }
    public function edit_dj(){         
        $dj_edit = new M_dj(); 
        if(isset($_GET['id'])){
            $id = $_GET['id'];  
            $dj_edit_by_id = $dj_edit->read_dj_by_id($id);
            if(isset($_POST['edit_dj_fix'])){
                $dj_id            = $id;
                $dj_name          = $_POST['dj_name_fix'];
                $dj_img           = $_FILES['dj_img_fix']['name'];
                $dj_image_temp    = $_FILES['dj_img_fix']['tmp_name'];
                $result = $dj_edit->edit_dj($dj_id,$dj_name,$dj_img);
                if($result){
                    move_uploaded_file($dj_image_temp,"../public/img/$dj_img");              
                    echo "<script>alert('Sửa thành công !');window.location='dj.php'</script>";
                }
                else{
                    echo"<script>alert('Sửa không thành công !')</script>";
                }
            }
            $view = "views/dj/v_edit_dj.php";
            include("templates/layout.php"); 
        }
    }
}
