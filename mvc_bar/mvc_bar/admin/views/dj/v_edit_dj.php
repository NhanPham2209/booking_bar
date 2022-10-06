<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sửa DJ</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh Sách Dj</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa Dj</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
        <?php foreach($dj_edit_by_id as $key => $value) { ?> 
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên Dj</label>
                    <input type="text"  class="form-control" name="dj_name_fix" value="<?php echo$value->dj_name; ?>">
                </div>
                <div class="form-group">
                 <img src="../public/img/<?php echo $value->dj_img; ?>" width='100' class='img-responsive'>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file"  class="form-control" name="dj_img_fix" >
                </div>
                <div>
                    <input type="submit" value="Sửa DJ" class="btn btn-success float-left"  name="edit_dj_fix">
                </div>
            </div>
            <?php } ?> 
        </form>
    </div>
</div>