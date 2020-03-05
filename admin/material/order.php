<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
      <?php
      require 'header.php';
      ?>

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
   <?php
     include "aside.php";
    ?>       
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Order</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                    </div>
                

                   </div>
                   <!--------------------------start page---------------------->
                <div class="col-lg-12">
                        <div class="card">
                                                               <div class="card-header">
                                        <div class="card-actions">
                                            <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                            <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                            <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                        </div>
                                        <h4 class="card-title m-b-0"></h4>
                                    </div>
                            <div class="card-block collapse show">
 
                            <!-- Nav tabs -->
                                <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Completed</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Pending</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Cancel</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-20" id="home2" role="tabpanel">
                                      <div class="table-responsive">
                                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <td>Order ID</td>
                                                <td>Product ID</td>
                                                <td>Vendor ID</td>
                                                <td>User ID</td>
                                                <td>Amount</td>
                                                <td>From</td>
                                                <td>Till</td>
                                                <td>Invoice</td>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <tr><td>404040</td>
                                                <td>100000</td>
                                                 <td>100000</td>
                                                 <td>10000</td>
                                                 <td>5000</td>
                                                <td>26-11-2000</td>
                                                <td>3 months </td>
                                                <td><center><a href="invoice.php" data-toggle="tooltip" data-original-title="Create invoice"><i class="fa fa-pencil text-inverse m-r-10"></i> </a></center></td>
                                               
                                            </tr>
                                            <tr><td>404040</td>
                                                <td>100000</td>
                                                 <td>100000</td>
                                                 <td>10000</td>
                                                 <td>5000</td>
                                                <td>26-11-2000</td>
                                                <td>3 months </td>
                                                <td><center><a href="invoice.php" data-toggle="tooltip" data-original-title="Create invoice"><i class="fa fa-pencil text-inverse m-r-10"></i> </a></center></td>
                                            </tr>
                                            </tbody>
                                    </table>
                                
                                </div>
                                
                                </div>
                                <div class="tab-pane  p-20" id="profile2" role="tabpanel">
                                     <div class="table-responsive">
                                        <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <td>Order ID</td>
                                                <td>Product ID</td>
                                                <td>Vendor ID</td>
                                                <td>User ID</td>
                                                <td>Amount</td>
                                                <td>From</td>
                                                <td>Till</td>
                                                <td>Invoice</td>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <tr><td>404040</td>
                                                <td>100000</td>
                                                 <td>100000</td>
                                                 <td>10000</td>
                                                 <td>5000</td>
                                                <td>26-11-2000</td>
                                                <td>3 months </td>
                                                <td><center><a href="invoice.php" data-toggle="tooltip" data-original-title="Create invoice"><i class="fa fa-pencil text-inverse m-r-10"></i> </a></center></td>
                                               
                                            </tr>
                                            <tr><td>404040</td>
                                                <td>100000</td>
                                                 <td>100000</td>
                                                 <td>10000</td>
                                                 <td>5000</td>
                                                <td>26-11-2000</td>
                                                <td>3 months </td>
                                                <td><center><a href="invoice.php" data-toggle="tooltip" data-original-title="Create invoice"><i class="fa fa-pencil text-inverse m-r-10"></i> </a></center></td>
                                            </tr>
                                            </tbody>
                                    </table>
                                </div>
                                </div>
                                <div class="tab-pane p-20" id="messages2" role="tabpanel"> <div class="table-responsive">
                                        <table id="example25" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <td>Order ID</td>
                                                <td>Product ID</td>
                                                <td>Vendor ID</td>
                                                <td>User ID</td>
                                                <td>Amount</td>
                                                <td>From</td>
                                                <td>Till</td>
                                                <td>Invoice</td>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <tr><td>404040</td>
                                                <td>100000</td>
                                                 <td>100000</td>
                                                 <td>10000</td>
                                                 <td>5000</td>
                                                <td>26-11-2000</td>
                                                <td>3 months </td>
                                                <td><center><a href="invoice.php" data-toggle="tooltip" data-original-title="Create invoice"><i class="fa fa-pencil text-inverse m-r-10"></i> </a></center></td>
                                               
                                            </tr>
                                            <tr><td>404040</td>
                                                <td>100000</td>
                                                 <td>100000</td>
                                                 <td>10000</td>
                                                 <td>5000</td>
                                                <td>26-11-2000</td>
                                                <td>3 months </td>
                                                <td><center><a href="invoice.php" data-toggle="tooltip" data-original-title="Create invoice"><i class="fa fa-pencil text-inverse m-r-10"></i> </a></center></td>
                                            </tr>
                                            </tbody>
                                    </table>
                                </div></div>
                            </div>
                        </div>
                    </div>
                  </div>  
                                    
                                    

                 <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
               <?php
                    include "R_sidebar.php";
                ?>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
                  <?php
                    include "footer.php";
                ?>  
                        <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
     <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
           
        ]
    });
    $('#example24').DataTable({
        dom: 'Bfrtip',
        buttons: [
           
        ]
    });
    $('#example25').DataTable({
        dom: 'Bfrtip',
        buttons: [
           
        ]
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>

</html>