<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách khách hàng</h1>
                    <h2><a href="khach_hang_add.php"><input type="submit" value="Add new" class="btn btn-success float-left">
                    </h2>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách khách hàng </li>
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
                    <th>Họ tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($khach_hang_show_all as $key => $value){ ?>
                <tr>
                    <td><?php echo $value->khach_hang_id; ?></td>
                    <td><?php echo $value->khach_hang_name; ?></td>
                    <td><?php echo $value->khach_hang_so_dien_thoai; ?></td>
                    <td> <a class="btn btn-info btn-sm" href="khach_hang_edit.php?id=<?php echo $value->khach_hang_id; ?>">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="khach_hang_delete.php?id=<?php echo $value->khach_hang_id; ?>">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>


                <?php } ?>
            </tbody>
        </table>
    </div>
</div>