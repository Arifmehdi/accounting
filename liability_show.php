<?php
include 'inc/header.php';
include 'inc/sidebar.php';
include 'inc/database.php';


?>

<!-- start modal -->
<ng-template #content let-c="close" let-d="dismiss">
  <div class="modal-header">
    <h4 class="modal-title" id="modal-basic-title">Hi there!</h4>
    <button type="button" class="btn-close" aria-label="Close" (click)="d('Cross click')"></button>
  </div>
  <div class="modal-body">
    <p>Hello, World!</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-outline-dark" (click)="c('Save click')">Save</button>
  </div>
</ng-template>

<button class="btn btn-lg btn-outline-primary" (click)="open(content)">Launch demo modal</button>
<!-- start modal -->

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
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title">Online Store Visitors</h3>
                      <a href="liability_chart.php">View Report</a>

                    </div>
                  </div>
                  <div class="card-body">
                    <h1>Liability List</h1>
                    <a href="liability_form.php" class="btn btn-sm btn-success">Add New</a>
                    <!-- between search---- -->
                    <div class="text-right"><form action="liability_BetweenSearch_show.php" method="post">  &nbsp<input type="date" name="first">&nbsp Between &nbsp<input type="date" name="second">&nbsp &nbsp<input type="submit" value="search" name="submit"></div></form><br>
                    <?php //$raww=$db->query('select * from liability where ') ?>
                     <table class="table table-bordered ">
                      <tr class="table-primary">
                            <td>SL</td>
                            <td>Title</td>
                            <td>Note</td>
                            <td>People</td>
                            <td>Amount</td>
                            <td>Date</td>
                            <td>Status</td>
                            <td>Action
                             </td>
                      </tr>
          <?php $raw=$db->query('select liability.*,people.name from liability inner join people on people.id=liability.people_id'); $ali=0; while($info=$raw->fetch_assoc()){  //print_r($info); ?>
                        <tr >
                            <td><?php echo ++$ali ?></td>
                            <td><?php  echo $info['title'] ?></td>
                            <td><?php  echo $info['note'] ?></td>
                            <td><?php  echo $info['name'] ?></td>
                            <td><?php  echo $info['amount'] ?></td>
                            <td><?php  echo $info['date'] ?></td>
                            <td><?php  echo $info['status'] ?></td>
                            <td><a href="liability_edit.php?id=<?php  echo $info['id'] ?>" class="btn btn-xs btn-primary">Edit</a>&nbsp<a href="liability_delete.php?id=<?php  echo $info['id'] ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to remove it?')">Delete</a></td>
                      </tr>
                      <?php } ?>
                    </table>
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

      <!-- ------------------   liability edit end here------------------ -->
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
$raw=$db->query("select * from liability where id=$aaa");
$infor=$raw->fetch_assoc();

?>
            <!-- Main content -->
            <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title ">Liability CRUD</h3>
                      <a href="javascript:void(0);">View Report</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h1>Liability Update Form</h1>
                   <form action="liability_update.php" method="post"> 
                    <table class="table table-boredered">
                        <tr>
                          <input type="hidden" value="<?php echo $infor['id'] ?>" name="id" >
                            
                            <td colspan="2">Title<input type="text" class="form-control" name="title" value="<?php echo $infor['title'] ?>"></td>
                            

                            <td> People Id<select  name="people" class="form-control select2" style="width: 100%;">
                                <option value="">Select People</option>
                                <?php $raw=$db->query('select * from people order by name asc'); while($info=$raw->fetch_assoc()){  ?>
                                  <option value="<?php echo $info['id'] ?>" <?php if($infor['people_id']==$info['id']){ echo 'selected';} ?>><?php echo $info['name'] ?></option>
                                  <?php } ?>
                                    </select></td>
                        </tr>
                        <tr>
                           
                            <td colspan="3">Note<textarea name="note" cols="60" rows="4" class="form-control"><?php echo $infor['note'] ?></textarea></td>
                        </tr>
                        
                        <tr>
                            
                            <td>Amount<input type="text" class="form-control" name="amount" value="<?php echo $infor['amount'] ?>"></td>
                            <td>Date<input type="date" name="date" class="form-control" value="<?php echo $infor['date'] ?>"></td>
                            <td><p>Status</p>  <input type="radio" class="form-check-input" value="active" name="state" <?php if($infor['status']=='active'){ echo 'checked';} ?>>Active &nbsp &nbsp  &nbsp &nbsp <input type="radio" class="form-check-input" value="inactive" name="state" <?php if($infor['status']=='inactive'){ echo 'checked';} ?>>Inactive</td>
                        </tr>
                        <tr>
                          <td ></td>
                          <td><a href="index.php"  class="btn btn-block btn-secondary">Cancel</a></td>
                          <td><input type="submit" class="btn btn-block btn-primary" value="Update"> </td>
                          </form>
                          
                         <!-- <td colspan="2"><button class="btn btn-block btn-success">Press me</button></td>  -->
                            <!-- <td colspan="2"><a href="" id="button" class="btn btn-block btn-success">Insert</a></td> -->
                        </tr>
                    </table>
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
                     
      <!-- ------------------   liability edit start here------------------ -->
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