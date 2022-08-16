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

$aaa=$_GET['id'];
$raw=$db->query("select * from assets where id=$aaa");
$infor=$raw->fetch_assoc();
print_r($infor);
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
                    <h1>Assets Update Form</h1>
                    <form action="assets_update.php" method="post">
                    <table class="table table-boredered">
                        <tr>
                            <input type="hidden" value="<?php echo $infor['id'] ?>" name="id">
                            <td colspan="2">Title<input type="text" class="form-control" name="title" value="<?php echo $infor['title'] ?>" placeholder="Enter account title"></td>
                            

                            <td > Account Type<select name="ac_type" class="form-control select2" style="width: 100%;">
                                <option >Select Account Type</option>
                               <option value="fixed" <?php if($infor['type']=='fixed'){ echo 'selected'; } ?>>Fixed</option>
                               <option value="current" <?php if($infor['type']=='current'){ echo 'selected'; } ?>>Current</option>
                                    </select></td>
                        </tr>
                        <tr>
                            
                            <td colspan="3">Note<textarea name="note" cols="60" rows="4" class="form-control"><?php echo $infor['note'] ?></textarea></td>
                            
                        </tr>
                        
                        <tr>
                           
                            <td>Amount<input type="text" class="form-control" name="amount" placeholder="Enter amount" value="<?php echo $infor['amount'] ?>"></td>
                            <td >Date<input type="date" name="date" class="form-control" placeholder="Enter date" value="<?php echo $infor['date'] ?>"></td> &nbsp &nbsp
                            <td><p>Status</p>  <input type="radio" value="active" class="form-check-input"  name="state" <?php  if($infor['status']=='active'){ echo 'checked'; } ?> >Active &nbsp &nbsp  &nbsp &nbsp <input type="radio" value="inactive" class="form-check-input"  name="state" <?php  if($infor['status']=='inactive'){ echo 'checked'; } ?> >Inactive</td>
                        </tr>
                        <tr>
                         
                          <td></td>
                          <td><a href="assets_show.php"  class="btn btn-block btn-secondary">Cancel</a></td>
                          <td><input type="submit" class="btn btn-block btn-primary" value="Update"></a></td>
                          
                         
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