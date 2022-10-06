<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Khách Hàng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm Khách Hàng</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Họ tên khách hàng</label>
                    <input type="text"  class="form-control" name="khach_hang_name">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại khách hàng</label>
                    <input type="text"  class="form-control" name="khach_hang_so_dien_thoai">
                </div>
                
                    <input type="submit" value="Add khách hàng" class="btn btn-success float-left"  name="add_khach_hang">
                </div>
            </div>
        </form>
    </div>
</div>