<?php 
include 'inc/header.php';
include 'inc/sidebar.php';
include 'inc/database.php';
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
<?php

$raw=$db->query('select * from liability order by title asc');
// $info=$raw->fetch_all(MYSQLI_ASSOC);
while($info=$raw->fetch_assoc()){
    // echo "<pre>";
    // print_r($info);
};
?>
<!-- Main content -->
            <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12" >
                <div class="card" >
                  <div class="card-header border-0 bg-info">
                    <div class="d-flex justify-content-between ">
                      <h3 class="card-title ">Assets</h3>
                      <a href="javascript:void(0);">View Report</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h1>Assets Insert Form</h1>
                    <form action="assets_insert.php" method="post">
                    <table class="table table-boredered">
                        <tr>
                            
                            <td colspan="2">Title<input type="text" class="form-control" name="title" placeholder="Enter account title"></td>
                            
                            <td > Account Type<select name="ac_type" class="form-control select2" style="width: 100%;">
                                <option value="">Select Account Type</option>
                               <option value="fixed" >Fixed</option>
                               <option value="current">Current</option>
                                    </select></td>

                            
                        </tr>
                        <tr>
                            
                            <td colspan="3">Note<textarea name="note" cols="60" rows="4" class="form-control"></textarea></td>
                            
                        </tr>
                        
                        <tr>
                           
                            <td>Amount<input type="text" class="form-control" name="amount" placeholder="Enter amount"></td>
                            <td >Date<input type="date" name="date" class="form-control" placeholder="Enter date"></td> &nbsp &nbsp
                            <td><p>Status</p>  <input type="radio" class="form-check-input" value="active" name="state">Active &nbsp &nbsp  &nbsp &nbsp <input type="radio" class="form-check-input" value="inactive" name="state">Inactive</td>
                        </tr>
                        <tr>
                         
                          <td></td>
                          <td><a href="assets_show.php"  class="btn btn-block btn-secondary">Cancel</a></td>
                          <td><input type="submit" class="btn btn-block btn-primary" value="Save"></a></td>
                          
                         
                        </tr>
                    </table>
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