<?php 
include "models/m_khach_hang.php";
class C_khach_hang {
    public function hien_thi_khach_hang(){       
        $khach_hang_show     = new M_khach_hang();
        $khach_hang_show_all = $khach_hang_show->show_khach_hang();
        $view = "views/khach_hang/v_khach_hang.php";
        include "templates/layout.php";
    }
    public function add_khach_hang(){
        $khach_hang_add = new M_khach_hang();
        $view = "views/khach_hang/v_add_khach_hang.php";
        include "templates/layout.php";
        if(isset($_POST['add_khach_hang'])){
            $khach_hang_id            = null;
            $khach_hang_name          = $_POST['khach_hang_name'];
            $khach_hang_so_dien_thoai = $_POST['khach_hang_so_dien_thoai'];
            $result = $khach_hang_add->add_khach_hang($khach_hang_id,$khach_hang_name,$khach_hang_so_dien_thoai);
            if($result){             
                echo "<script>alert('Thêm thành công !');window.location='khach_hang.php'</script>";
            }else{
                echo"<script>alert('Thêm không thành công !')</script>";
            }
        }
        
    }
    public function delete_khach_hang(){ 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $khach_hang_delete = new M_khach_hang();
            $result =$khach_hang_delete->delete_khach_hang($id);
            if($result){
                echo"<script>alert('Xóa thành công !');window.location='khach_hang.php'</script>";
            }
            else{
                echo"<script>alert('Xóa không thành công !')</script>";
            }
            
        }      
    }
    public function edit_khach_hang(){         
        $khach_hang_edit = new M_khach_hang(); 
        if(isset($_GET['id'])){
            $id = $_GET['id']; 
            $khach_hang_edit_by_id = $khach_hang_edit->read_khach_hang_by_id($id); 
            if(isset($_POST['khach_hang_edit'])){
                $khach_hang_id            = $id;
                $khach_hang_name          = $_POST['khach_hang_name_fix'];
                $khach_hang_so_dien_thoai = $_POST['khach_hang_so_dien_thoai_fix'];
                $result = $khach_hang_edit->edit_khach_hang($khach_hang_id,$khach_hang_name,$khach_hang_so_dien_thoai);
                if($result){            
                    echo "<script>alert('Sửa thành công !');window.location='khach_hang.php'</script>";
                }
                else{
                    echo"<script>alert('Sửa không thành công !')</script>";
                }
            }
            $view = "views/khach_hang/v_edit_khach_hang.php";
            include("templates/layout.php"); 
        }
    }
}
