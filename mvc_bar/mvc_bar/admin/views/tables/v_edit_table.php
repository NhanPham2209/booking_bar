<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sửa table</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh Sách table</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa table</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <?php foreach($read_table_by_id as $key => $value) { ?> 
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên bàn</label>
                    <input type="text"  class="form-control" name="table_name_fix" value="<?php echo$value->table_name; ?>">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <input type="text"  class="form-control" name="table_content_fix" value="<?php echo$value->table_content; ?>">
                </div>
                <div class="form-group">
                 <img src="../public/img/<?php echo $value->table_img; ?>" width='100' class='img-responsive'>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh bàn</label>
                    <input type="file"  class="form-control" name="table_img_fix" >
                </div>
                
                <div class="form-group">
                    <label>Giá bàn</label>
                    <input type="text"  class="form-control" name="table_price_fix" value="<?php echo$value->table_price; ?>">
                </div>
                <div>
                    <input type="submit" value="Sửa table" class="btn btn-success float-left"  name="table_edit">
                </div>
            </div>
            <?php } ?> 
        </form>
    </div>
</div>