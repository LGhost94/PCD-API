<?php
session_start();
if(!isset($_GET["page"]))
  echo '<script>window.location="bookings"</script>';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pro:Centric</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href=""> <!-- Page Icon/Logo -->

<!--=============================
=            Plugins            =
==============================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]--> 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/responsive.dataTables.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="views/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="views/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
    <!-- Select2 -->
  <link rel="stylesheet" href="views/bower_components/select2/dist/css/select2.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="views/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="views/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- jQuery 3 -->
  <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="views/dist/js/adminlte.min.js"></script>
  <!-- DataTables -->
  <script src="views/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="views/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="views/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <!-- Sweet Alert -->
  <script src="views/plugins/sweetalert2/sweetalert.min.js"></script>
  <!-- fullCalendar -->
  <script src="views/bower_components/moment/moment.js"></script>
  <script src="views/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
  <!-- Slimscroll -->
  <script src="views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- Select2 -->
  <script src="views/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- date-range-picker -->
<script src="views/bower_components/moment/min/moment.min.js"></script>
<script src="views/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="views/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
</head>

<!--==========================
=            Body            =
===========================-->

<body class="hold-transition skin-yellow sidebad-collapse sidebar-mini">

<?php
    echo '<div class="wrapper">';
    include "modules/header.php";
    include "modules/sidebar.php";
    if(isset($_GET["page"])){
      if($_GET["page"]=="bookings" || $_GET["page"]=="groups" || $_GET["page"]=="notice" || $_GET["page"]=="rooms" || $_GET["page"]=="ticker")
        include "modules/".$_GET["page"].".php";
      else
      include "modules/404.php";
    }
    include "modules/footer.php";
    echo '</div>';
  
?>
<script src="views/js/model.js"></script>
</body>
</html>
