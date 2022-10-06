<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sửa khách hàng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh Sách khách hàng</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa khách hàng</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
        <?php foreach($khach_hang_edit_by_id as $key => $value) { ?> 
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên khách hàng</label>
                    <input type="text"  class="form-control" name="khach_hang_name_fix" value="<?php echo$value->khach_hang_name; ?>">
                </div>
                <div class="form-group">
                    <label>Số điện thoại khách hàng</label>
                    <input type="text"  class="form-control" name="khach_hang_so_dien_thoai_fix" value="<?php echo$value->khach_hang_so_dien_thoai; ?>">
                </div>
                <div>
                    <input type="submit" value="Sửa khách hàng" class="btn btn-success float-left"  name="khach_hang_edit">
                </div>
            </div>
            <?php } ?>
        </form>
    </div>
</div>