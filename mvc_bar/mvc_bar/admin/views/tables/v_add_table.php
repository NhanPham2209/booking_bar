<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm bàn</h1>
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
            <h3 class="card-title">Thêm Bàn</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên bàn</label>
                    <input type="text"  class="form-control" name="table_name">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <input type="text"  class="form-control" name="table_content">
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file"  class="form-control" name="table_img">
                </div>
                
                <div class="form-group">
                    <label for="txtHotline">Giá bàn</label>
                    <input type="text"  class="form-control" name="table_price">
                </div>
                <div>
                    <input type="submit" value="Add table" class="btn btn-success float-left"  name="add_table">
                </div>
            </div>
        </form>
    </div>
</div>