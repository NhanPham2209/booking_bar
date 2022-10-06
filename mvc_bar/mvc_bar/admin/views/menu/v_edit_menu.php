<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sửa Menu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh Sách Menu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa MENU</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <?php foreach($menu_edit_by_id as $key => $value) { ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên món</label>
                    <input type="text" class="form-control" name="menu_name_fix"
                        value="<?php echo $value->menu_name; ?>">
                </div>
                <div class="form-group">
                    <label>Giá món</label>
                    <input type="text" class="form-control" name="menu_price_fix"
                        value="<?php echo $value->menu_price; ?>">
                </div>
                <div class="form-group">
                    <img src="../public/img/<?php echo $value->menu_img; ?>" width='100' class='img-responsive'>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh món</label>
                    <input type="file" class="form-control" name="menu_img_fix">
                </div>
                <div>
                    <input type="submit" value="Sửa menu" class="btn btn-success float-left" name="menu_edit">
                </div>
            </div>
            <?php } ?>
        </form>
    </div>
</div>