<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nidafund - Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="rptrequest.php">Back Office</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
    <!--
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    -->
      <!-- Navbar -->

      <ul class="navbar-nav ml-auto ml-md-0">
      <!--
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      -->
      <!--
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      -->

        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <!-- <a class="dropdown-item" href="#">Settings</a> -->
            <!-- <a class="dropdown-item" href="#">Activity Log</a> -->
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>

      </ul>


    </nav>

    <div id="wrapper">

      <!-- Sidebar -->

      <ul class="sidebar navbar-nav">
        <!--
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        -->
        <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        -->
        <!--
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        -->
        <li class="nav-item active">
          <a class="nav-link" href="rptrequest.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Request Report</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Back Office</a>
            </li>
            <li class="breadcrumb-item active">Request Report</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              รายการขอใบเสร็จรับเงิน</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>ID</th>
                      <th>วันที่ขอใบเสร็จ</th>
                      <th>ชื่อ</th>
                      <th>นามสกุล</th>
                      <th>จำนวนเงิน (บาท)</th>
                      <th>หลักฐาน</th>
                      <th>ประเภทการออกใบเสร็จ</th>
                      <th>ข้อมูลส่วนตัว</th>
                      <th>ข้อมูลใบเสร็จ</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="text-center">
                      <th>ID</th>
                      <th>วันที่ขอใบเสร็จ</th>
                      <th>ชื่อ</th>
                      <th>นามสกุล</th>
                      <th>จำนวนเงิน (บาท)</th>
                      <th>หลักฐาน</th>
                      <th>ประเภทการออกใบเสร็จ</th>
                      <th>ข้อมูลส่วนตัว</th>
                      <th>ข้อมูลใบเสร็จ</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php

                        // include Database connection file
                        $confile = $_SERVER["DOCUMENT_ROOT"]. "/appconf/dbcon.php";
                        include($confile);

                        $query = "SELECT * FROM nf2018_treceiptrequest ORDER BY reqdatetime DESC";

                        $result = $con->query($query);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>'.$row['id'].'</td>';
                                echo '<td class="text-center">'.$row["reqdatetime"].'</td>';
                                echo '<td>'.$row['fname'].'</td>';
                                echo '<td>'.$row['lname'].'</td>';
                                echo '<td class="text-right">'.number_format($row['amount'],2).'</td>';
                                echo '<td class="text-center"><a href="http://nidafund.nida.ac.th/main/evidence/'.$row['uploadfilename'].'" target="_blank">หลักฐาน</a></td>';
                                if( $row['receiptaddresstype'] == '02' ) {
                                  echo '<td class="text-center">ในนาม</td>';
                                }
                                else {
                                  echo '<td class="text-center">ส่วนตัว</td>';
                                }
                                echo '<td class="text-center"><button onclick="getPersonDetail('.$row['id'].')" class="btn btn-info">Detail</button></td>';
                                echo '<td class="text-center"><button onclick="getReceiptDetail('.$row['id'].')" class="btn btn-info">Detail</button></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo "0 results";
                        }
                        $con->close();
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">...</div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>National Institute of Development Administration</em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © National Institute of Development Administration 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <div id="modalDetail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirmModalLongTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                  <h4 class="modal-title" id="modalDetailTitle">รายละเอียดข้อมูลที่อยู่ใบเสร็จ</h4>
                </div>
                <div class="modal-body">
                  <div id="detail_name"></div>
                  <div id="detail_address"></div>
                  <div id="detail_subdistrict"></div>
                  <div id="detail_district"></div>
                  <div id="detail_province"></div>
                  <div id="detail_postalcode"></div>
                  <div id="detail_phone"></div>
                  <div id="detail_mobile"></div>
                  <div id="detail_email"></div>
                  <!--<div id="receipt_amount"></div>-->
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" id="btnConfirm" class="btn btn-default">ยืนยัน</button> -->
                    <button type="button" id="btnReceiptInfoClose" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    <input type="hidden" id="hidden_user_id">
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <script src="js/rptrequest.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
