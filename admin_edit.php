<?php 
include 'inc/header.php';
include 'inc/sidebar.php';
include 'inc/database.php';
$aaa=$_GET['id'];
$raw=$db->query("select * from admin where id=$aaa");
$infor=$raw->fetch_assoc();
?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

<!-- Main content -->
            <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header border-0 bg-primary">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title ">Admin</h3>
                      <a href="javascript:void(0);">View Report</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h1>Admin Update Form</h1>
                    <form action="admin_update.php" method="post"> 
                        <input type="hidden" name="id" value="<?php echo $infor['id'] ?>">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $infor['name'] ?>" name="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $infor['email'] ?>" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $infor['password'] ?>" name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">status</label>
                    &nbsp &nbsp &nbsp &nbsp<input type="radio" value="active" name="status" <?php if($infor['status']=='active'){ echo "checked";} ?>>&nbsp Active &nbsp &nbsp <input type="radio" value="inactive" name="status" <?php if($infor['status']=='inactive'){ echo "checked";} ?>>&nbsp Inactive
                  </div>
                  
                      <div class="input-group-append ">
                          <a href="admin_show.php" class="btn btn-light">Cancel</a>&nbsp
                         <input type="submit" class="btn btn-primary" value="update">
                      </div>
                    </div>
                  </div>
                  
                <!-- /.card-body -->

               
              </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
                     
     
      <!-- contents goes here  -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">Anything you want</div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
  </body>
</html>