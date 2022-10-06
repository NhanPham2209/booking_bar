<?php 
include "models/m_table.php";
class C_table {
    public function hien_thi_table(){       
        $table_show     = new M_table();
        $table_show_all = $table_show->show_table();
        $view = "views/tables/v_table.php";
        include "templates/layout.php";
    }
    public function add_table(){
        $table_add = new M_table();
        $view = "views/tables/v_add_table.php";
        include "templates/layout.php";
        if(isset($_POST['add_table'])){
            $table_id            = null;
            $table_name          = $_POST['table_name'];
            $table_content       = $_POST['table_content'];
            $table_price         = $_POST['table_price'];
            $table_img           = $_FILES['table_img']['name'];
            $table_image_temp    = $_FILES['table_img']['tmp_name'];
            $result = $table_add->add_table($table_id,$table_name,$table_content,$table_price,$table_img);
            if($result){
                move_uploaded_file($table_image_temp,"../public/img/$table_img");              
                echo "<script>alert('Thêm thành công !');window.location='table.php'</script>";
            }else{
                echo"<script>alert('Thêm không thành công !')</script>";
            }
        }
        
    }
    public function delete_table(){ 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $table_delete = new M_table();
            $result =$table_delete->delete_table($id);
            if($result){
                echo"<script>alert('Xóa thành công !');window.location='table.php'</script>";
            }
            else{
                echo"<script>alert('Xóa không thành công !')</script>";
            }
            
        }      
    }
    public function edit_table(){         
        $table_edit = new M_table();        
        if(isset($_GET['id'])){
            $id = $_GET['id'];  
            $read_table_by_id = $table_edit->read_table_by_id($id);
            if(isset($_POST['table_edit'])){
                $table_show_all = $table_edit->show_table();
                $table_id            = $id;
                $table_name          = $_POST['table_name_fix'];
                $table_content       = $_POST['table_content_fix'];
                $table_price         = $_POST['table_price_fix'];
                $table_img           = $_FILES['table_img_fix']['name'];
                $table_image_temp    = $_FILES['table_img_fix']['tmp_name'];
                $result = $table_edit->edit_table($table_id,$table_name,$table_content,$table_price,$table_img);
                if($result){
                    move_uploaded_file($table_image_temp,"../public/img/$table_img");              
                    echo "<script>alert('Sửa thành công !');window.location='table.php'</script>";
                }
                else{
                    echo"<script>alert('Sửa không thành công !')</script>";
                }
            }
            $view = "views/tables/v_edit_table.php";
            include("templates/layout.php"); 
        }
    }
}
?>