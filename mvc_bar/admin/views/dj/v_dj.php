<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách DJ</h1>
                    <h2><a href="dj_add.php"><input type="submit" value="Add new" class="btn btn-success float-left">
                    </h2>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh Sách DJ </li>
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
                    <th>Tên Dj</th>
                    <th>Hình ảnh</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dj_show_all as $key => $value){ ?>
                <tr>
                    <td><?php echo $value->dj_id; ?></td>
                    <td><?php echo $value->dj_name; ?></td>
                    <td><img src="../public/img/<?php echo $value->dj_img; ?>" width='100' class='img-responsive'>
                    <td> <a class="btn btn-info btn-sm" href="dj_edit.php?id=<?php echo $value->dj_id; ?>">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="dj_delete.php?id=<?php echo $value->dj_id; ?>">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>