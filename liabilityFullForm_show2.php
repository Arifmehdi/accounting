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
     <!-- Main content -->
            <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title">Online Store Visitors</h3>
                      <a href="javascript:void(0);">View Report</a>

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
                            <td>Account Head</td>
                            <td>Transaction</td>
                            <td>Action
                             </td>
                      </tr>

                      <!-- join query example----- -->
                      <!-- SELECT employee.first_name, employee.last_name,// call.start_time, call.end_time,// call_outcome.outcome_text
FROM employee
INNER JOIN call ON call.employee_id = employee.id
INNER JOIN call_outcome ON call.call_outcome_id = call_outcome.id
ORDER BY call.start_time ASC; -->

<!-- sum example 1----- -->
<!-- $stmt = $handler->prepare('SELECT SUM(value) AS value_sum FROM codes');
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$sum = $row['value_sum'];

sum example 2 day status also----
$sql_qry = "SELECT SUM(duration_sec) AS count 
    FROM tbl_npt 
    WHERE date='09-10-2018' AND status='off'";


$duration = $connection->query($sql_qry);
$record = $duration->fetch_array();
$total = $record['count'];

echo $total;
 -->
          <?php $raw=$db->query('select liability.*,people.name, from liability join people on people.id=liability.people_id'); $ali=0; while($info=$raw->fetch_assoc()){  //print_r($info); ?>
          <?php //$raw=$db->query('select liability.*,people.name,account_heads.name from liability inner join people on liability.people_id=people.id inner join account_heads on where people.id=liability.people_id and acount_heads.id=transactions.account_head_id'); $ali=0; while($info=$raw->fetch_assoc()){  print_r($info); ?> 
          <?php //$aaa=$db->query('select transactions.account_head_id,account_heads.name from transactions  join people on transactions.account_head_id=account_heads.id'); $ali=0; while($infoo=$aaa->fetch_assoc()){  //print_r($info); ?>
         
                        <tr >
                            <td><?php echo ++$ali ?></td>
                            <td><?php  echo $info['title'] ?></td>
                            <td><?php  echo $info['note'] ?></td>
                            <td><?php  echo $info['name'] ?></td>
                            <td><?php  echo $info['amount'] ?></td>
                            <td><?php  echo $info['date'] ?></td>
                            <td><?php  echo $info['status'] ?></td>
                            <td></td>
                            <td></td>
                            <td><a href="liability_edit.php?id=<?php  echo $info['id'] ?>" class="btn btn-xs btn-primary">Edit</a>&nbsp<a href="liability_delete.php?id=<?php  echo $info['id'] ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to remove it?')">Delete</a></td>
                      </tr>
                      <?php //} ?>
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