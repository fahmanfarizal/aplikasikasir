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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  
    
</head>
<body>
     <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                

            <button class="btn btn-success" data-toggle="modal" data-target="#update">Add New</button>

    
   
                                        <br/>
                                        <div id="update" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        
                                                        
                                                    </div>
                                                    <div class="modal-body"><?php include 'updatekeranjang.php'; ?></div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-success" data-dismiss="modal"> Close</button></div>
                                                </div>
                                            </div>
                                        </div>

                                    
                             
                <div class="row">
                    <!-- column -->
                    <div class="col-12"> 
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Latest Sales</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">NAME</th>
                                            <th class="border-top-0">STATUS</th>
                                            <th class="border-top-0">DATE</th>
                                            <th class="border-top-0">PRICE</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td class="txt-oflo">Elite admin</td>
                                            <td><span class="label label-success label-rounded">SALE</span> </td>
                                            <td class="txt-oflo">April 18, 2017</td>
                                            <td><span class="font-medium">$24</span></td>
                                             <td><span class="font-medium"><button class="btn btn-success" data-toggle="modal" data-target="#update">Update</button><button class="btn btn-success" data-toggle="modal" data-target="#update">Delete</button></span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="txt-oflo">Real Homes WP Theme</td>
                                            <td><span class="label label-info label-rounded">EXTENDED</span></td>
                                            <td class="txt-oflo">April 19, 2017</td>
                                            <td><span class="font-medium">$1250</span></td>
                                             <td><span class="font-medium"><button class="btn btn-success" data-toggle="modal" data-target="#update">Update</button><button class="btn btn-success" data-toggle="modal" data-target="#update">Delete</button></span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="txt-oflo">Ample Admin</td>
                                            <td><span class="label label-purple label-rounded">Tax</span></td>
                                            <td class="txt-oflo">April 19, 2017</td>
                                            <td><span class="font-medium">$1250</span></td>
                                             <td><span class="font-medium"><button class="btn btn-success" data-toggle="modal" data-target="#update">Update</button><button class="btn btn-success" data-toggle="modal" data-target="#update">Delete</button></span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="txt-oflo">Medical Pro WP Theme</td>
                                            <td><span class="label label-success label-rounded">Sale</span></td>
                                            <td class="txt-oflo">April 20, 2017</td>
                                            <td><span class="font-medium">-$24</span></td>
                                             <td><span class="font-medium"><button class="btn btn-success" data-toggle="modal" data-target="#update">Update</button><button class="btn btn-success" data-toggle="modal" data-target="#update">Delete</button></span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="txt-oflo">Hosting press html</td>
                                            <td><span class="label label-success label-rounded">SALE</span></td>
                                            <td class="txt-oflo">April 21, 2017</td>
                                            <td><span class="font-medium">$24</span></td>
                                             <td><span class="font-medium"><button class="btn btn-success" data-toggle="modal" data-target="#update">Update</button><button class="btn btn-success" data-toggle="modal" data-target="#update">Delete</button></span></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="txt-oflo">Digital Agency PSD</td>
                                            <td><span class="label label-danger label-rounded">Tax</span> </td>
                                            <td class="txt-oflo">April 23, 2017</td>
                                            <td><span class="font-medium">-$14</span></td>
                                             <td><span class="font-medium"><button class="btn btn-success" data-toggle="modal" data-target="#update">Update</button><button class="btn btn-success" data-toggle="modal" data-target="#update">Delete</button></span></td>
                                        </tr>
                                         <tr>
                                            
                                            <td class="txt-oflo">Digital Agency PSD</td>
                                            <td><span class="label label-danger label-rounded">Tax</span> </td>
                                            <td class="txt-oflo">April 23, 2017</td>
                                            <td><span class="font-medium">-$14</span></td>
                                            <td><span class="font-medium"><button class="btn btn-success" data-toggle="modal" data-target="#update">Update</button><button class="btn btn-success" data-toggle="modal" data-target="#update">Delete</button></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                
         
            <?php include 'footer.php'; ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        
    </div>
    
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>