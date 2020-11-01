<?php 
session_start();
if(!isset($_SESSION['admin_email'])){
  echo "<script>location.href='login.php'</script>";
}
include "includes/count.php";
include "includes/fetch.php";
include "includes/message.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Avicenna | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="shortcut icon" href="../images/avfavicon.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="event.php" class="nav-link">Event</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="post.php" class="nav-link">Post</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/avicenna/dashboard/" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AVICENNA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/avicenna/dashboard/" class="nav-link active">
                  <i class="fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
             
            </ul>
          </li>
        

              <li class="nav-item">
                <a href="post.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Post</p>
                </a>
              </li>

             <li class="nav-item">
            <a href="" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Events
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="event.php?source=add_event" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="event.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Available Events</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            
              <li class="nav-item">       
                    <a href="logout.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Logout</p>
                    </a>
               </li>
             
          </li>
        
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <p>Admitted Pupils</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>         
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $event_count; ?><sup style="font-size: 20px"></sup></h3>
                <p>Events</p>
              </div>
              <div class="icon">
                <i class="fa fa-calendar"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $assignment_count; ?></h3>

                <p>Assignments</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>            
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $subscriber_count; ?></h3>

                <p>Subscribers</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
      
            </div>
          </div>

        </div>

        <!-- Main row -->
        <div class="row">
          <section class="col-lg-7 connectedSortable">
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Visitors Messages</h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-primary"><?php echo $message_count?></span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>

              <div class="card-body">

              <?php
               while($messages = $message_rows->fetch_array()){
                   if(!empty($messages)){
                     $email = $messages['email'];
                     $name = $messages['name'];
                     $message = $messages['message'];
                     $date = $messages['date'];
                ?>
                <!-- <div class="direct-chat-messages"> -->
                  
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left"><?php echo $name.' - '.$email;?></span>
                      <span class="direct-chat-timestamp float-right"><?php echo $date;?></span>
                    </div>
                   
                    <img class="direct-chat-img" src="../images/avlogo.jpg" alt="message user image">
                   
                    <div class="direct-chat-text">
                      <?php echo $message;?>
                    </div>
              
                  <!-- </div>  -->
              <?php
              
             }
             else{
                 echo "No message available";
               }            
                  }
                 
                 ?>
              </div>    
            </div><br>
           
            <!--Newsletter starts-->

            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Newsletter Subscribers</h3>

                <div class="card-tools">
                  <span class="badge badge-primary"><?php echo $subscriber_count?></span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="direct-chat-messages">
                  
                <?php
                while($letters = $news_rows->fetch_array()){
                   if(!empty($letters)){
                     $email = $letters['email'];
                     ?>
                  <div class="direct-chat-msg">               
                    <div class="" style="padding-left: 10px; background-color:#d2d6de;border-radius: 5px; height: 30px;">
                      <?php echo $email; ?>
                    </div>             
                  </div>  
                  <?php              
                   }else{?>
                     <div class="direct-chat-msg">               
                    <div class="" style="padding-left: 10px; background-color:#d2d6de;border-radius: 5px; height: 30px;">
                      No subscriber Available
                    </div>             
                  </div>
                  <?php }
                  }
                  ?>
              </div>
     
              <div class="card-footer">
                <form method="post">
                  <div class="input-group">
                  <input type="text" name="subject" placeholder="Subject of message" class="form-control">
                    <input type="text" name="message" placeholder="Message" class="form-control">
                    <span class="input-group-append">
                      <button name="message_all" type="submit" class="btn btn-primary">Message Subscribers</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <!--Newsletter Ends-->

          </section>
          <section class="col-lg-5 connectedSortable">
            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  School Map
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;">
              
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253209.46958995383!2d3.
                  764091805383785!3d7.421133394405419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10
                  398d77eeff086f%3A0x3b33e
                  0f76e8e04a9!2sIbadan!5e0!3m2!1sen!2sng!4v1603810837041!5m2!1sen!2sng" width="100%" height="100%" 
                  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              
              
              </div>
              </div>
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>

                  </div>
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                  </div>
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                  </div>
                </div>
              </div>
            </div>

          </section>
        </div>
      </div>
    </section>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="">Avicenna</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Designed by </b>Lightsource & Merilek
    </div>
  </footer>


  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
