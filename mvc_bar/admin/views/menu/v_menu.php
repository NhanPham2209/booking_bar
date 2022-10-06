<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách menu chính</h1>
                    <h2><a href="menu_add.php"><input type="submit" value="Add new" class="btn btn-success float-left">
                    </h2>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh Sách menu </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tên menu</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($menu as $key => $value){ ?>
                <tr>
                    <td><?php echo $value->menu_id; ?></td>
                    <td><?php echo $value->menu_name; ?></td>
                    <td><?php echo number_format($value->menu_price)." VNĐ"; ?></td>
                    <td><img src="../public/img/<?php echo $value->menu_img; ?>" width='100' class='img-responsive'></td>
                    <td><a class="btn btn-info btn-sm" href="menu_edit.php?id=<?php echo $value->menu_id; ?>">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="menu_delete.php?id=<?php echo $value->menu_id; ?>">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>


                <?php } ?>
            </tbody>
        </table>
    </div>
</div>