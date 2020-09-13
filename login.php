<?php 
session_start();
include'connect.php'; ?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Aplikasi Kasir berbasis PHP</title>
    <!-- Custom CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
     <link rel="stylesheet" href="dist/css1/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

<div class="container-fluid">
			     <div class="row">
                    <div class="col-12">
                        <div class="card card-body" >
                            <h4 class="card-title" align='center'>Login</h4>
                            <h5 class="card-subtitle" align='center'> ---------------- </h5>
                            <form class="form-horizontal m-t-30" method="post">
                                
                                <div class="form-group">
                                    <label for="example-email"> <span class="help">Username</span></label>
                                    <input type="Username" id="example-email" name="username" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" value="" name="password">
                                </div>
                               <div class="form-group">
                               	 <button class="btn btn-success"  align='center' name="login">Login</button>
                               	</div>
                                
                            </form>
                            <?php 
            if (isset($_POST['login']))
            {
             $ambil = $koneksi->query("SELECT * FROM login WHERE username='$_POST[username]' AND password='$_POST[password]'");
             $yangcocok = $ambil->num_rows;
             if ($yangcocok==1)
             {
              $_SESSION['udahlogin']=$ambil->fetch_assoc();
              echo "<div class='alert alert-info'>Login Sukses</div>";
              echo "<meta http-equiv='refresh' content='1;url=index.php'>";
             }
             else
             {
              echo "<div class='alert alert-danger'>Login Gagal</div>";
              echo "<meta http-equiv='refresh' content='1;url=login.php'>";
             }
            }
          ?>
                        </div>
                    </div>
                </div></div>

	  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
    <script src="dist/css1/jquery.min.js"></script>
  <script src="dist/css1/bootstrap.min.js"></script>
	</body>
	</html>
