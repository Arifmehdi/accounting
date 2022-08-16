<?php 
include ('inc/header.php');
include ('inc/sidebar.php');
include ('inc/database.php');
$aaa=$_GET['id'];
$raw=$db->query("select * from account_heads where id=$aaa");
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
                  <div class="card-header border-0 bg-success">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title ">ACCOUNT HEAD</h3>
                      <a href="javascript:void(0);">View Report</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h1>Account Head Update Form</h1>
                    <form action="accountHead_update.php" method="post"> 
                <div class="card-body">
                <div class="form-group">
                   <input type="hidden" value="<?php echo $infor['id'] ?>" name="id">
                 <select name="ac_type" id="" class="form-control select2" style="width: 100%;" >
                    <option value="">Select Account Type</option>
                     <option value="asset" <?php if($infor['type']=='asset'){ echo 'selected';} ?>>Asset</option>
                     <option value="liability" <?php if($infor['type']=='liability'){ echo 'selected';} ?>>liability</option>
                     <option value="equity" <?php if($infor['type']=='equity'){ echo 'selected';} ?>>Equity</option>
                     <option value="income" <?php if($infor['type']=='income'){ echo 'selected';} ?>>Income</option>
                     <option value="expense" <?php if($infor['type']=='expense'){ echo 'selected';} ?>>Expense</option>
                 </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Account name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $infor['name']?>" name="ac_name" placeholder="Enter account name">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">status</label>
                    &nbsp &nbsp &nbsp &nbsp<input type="radio" value="active" name="status" <?php if($infor['status']=='active'){ echo 'checked';} ?>>&nbsp Active &nbsp &nbsp <input type="radio" value="inactive" name="status" <?php if($infor['status']=='inactive'){ echo 'checked';} ?>>&nbsp Inactive
                  </div>
                  
                      <div class="input-group-append ">
                          <a href="accountHead_show.php" class="btn btn-light">Cancel</a>&nbsp
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