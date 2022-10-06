<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách bàn</h1>
                    <h2><a href="table_add.php"><input type="submit" value="Add new" class="btn btn-success float-left">
                    </h2>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh Sách bàn </li>
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
                    <th>id</th>
                    <th>Tên bàn</th>
                    <th>Content</th>
                    <th>Giá</th>
                    <th>Action</th>
                    <th>Hình ảnh</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($table_show_all as $key => $value){ ?>
                <tr>
                    <td><?php echo $value->table_id; ?></td>
                    <td><?php echo $value->table_name; ?></td>
                    <td><?php echo $value->table_content; ?></td>
                    <td><?php echo number_format($value->table_price)." VNĐ"; ?></td>
                    <td><img src="../public/img/<?php echo $value->table_img; ?>" width='100' class='img-responsive'>
                    </td>
                    <td> <a class="btn btn-info btn-sm" href="table_edit.php?id=<?php echo $value->table_id; ?>">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="table_delete.php?id=<?php echo $value->table_id; ?>">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>