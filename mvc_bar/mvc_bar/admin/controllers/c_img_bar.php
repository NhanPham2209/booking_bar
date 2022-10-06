<?php 
include "models/m_img_bar.php";
class C_img_bar {
    public function hien_thi_img_bar(){       
        $img_bar_show     = new M_img_bar();
        $img_bar_show_all = $img_bar_show->show_img_bar();
        $view = "views/img_bar/v_img_bar.php";
        include "templates/layout.php";
    }
    public function add_img_bar(){
        $img_bar_add = new M_img_bar();
        $view = "views/img_bar/v_add_img_bar.php";
        include "templates/layout.php";
        if(isset($_POST['add_img_bar'])){
            $img_bar_id             = null;
            $img_bar_name           = $_POST['img_bar_name'];
            $img_bar_image          = $_FILES['img_bar_image']['name'];
            $img_bar_image_temp     = $_FILES['img_bar_image']['tmp_name'];
            $result = $img_bar_add->add_img_bar($img_bar_id,$img_bar_name,$img_bar_image);
            if($result){
                move_uploaded_file($img_bar_image_temp,"../public/img/$img_bar_image");              
                echo "<script>alert('Thêm thành công !');window.location='img_bar.php'</script>";
            }else{
                echo"<script>alert('Thêm không thành công !')</script>";
            }
        }
    }
    public function delete_img_bar(){ 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $img_bar_delete = new M_img_bar();
            $result =$img_bar_delete->delete_img_bar($id);
            if($result){
                echo"<script>alert('Xóa thành công !');window.location='img_bar.php'</script>";
            }
            else{
                echo"<script>alert('Xóa không thành công !')</script>";
            }
            
        }      
    }
    public function edit_img_bar(){         
        $img_bar_edit = new M_img_bar();        
        if(isset($_GET['id'])){
            $id = $_GET['id']; 
            $read_img_bar_by_id = $img_bar_edit->read_img_bar_by_id($id); 
            if(isset($_POST['img_bar_edit_fix'])){
                $img_bar_id            = $id;
                $img_bar_name          = $_POST['img_bar_name_fix'];
                $img_bar_image         = $_FILES['img_bar_image_fix']['name'];
                $img_bar_image_temp    = $_FILES['img_bar_image_fix']['tmp_name'];
                $result = $img_bar_edit->edit_img_bar($img_bar_id,$img_bar_name,$img_bar_image);
                if($result){
                    move_uploaded_file($img_bar_image_temp,"../public/img/$img_bar_image");              
                    echo "<script>alert('Sửa thành công !');window.location='img_bar.php'</script>";
                }
                else{
                    echo"<script>alert('Sửa không thành công !')</script>";
                }
            }
            $view = "views/img_bar/v_edit_img_bar.php";
            include("templates/layout.php"); 
        }
    }

}
