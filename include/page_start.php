<?php

$page_index_str = '';
$page_status_str = '';
$page_history_str = '';
$page_clients_str = '';
$page_new_client_str = '';
$page_install_str = '';

if($page_status == TRUE)
{
    $page_status_str = ' class="active"';    
}
else if($page_history == TRUE)
{
    $page_history_str = ' class="active"';
}
else if($page_clients == TRUE)
{
    $page_clients_str = ' class="active"';
}
else if($page_new_client == TRUE)
{
    $page_new_client_str = ' class="active"';
}
else if($page_install)
{
    $page_install_str = ' class="active"';
}
else
{
    $page_index_str = ' class="active"';
}

$page_before_sidebar = '<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OpenVPN Landing Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>V</b>PN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>OpenVPN</b> Gateway</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="images/ovpnicon.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><b>OpenVPN</b> Gateway</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="images/ovpnicon.png" class="img-circle" alt="User Image">
                <p>
                  Open Source Web UI
                  <small>for managing OpenVPN</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <a href="https://github.com/viperman1271/openvpn-web" target="_blank"><center>Available on GitHub</center></a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/ovpnicon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Gateway Information</p>
        </div>
      </div>';

$page_sidebar =
'      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li' . $page_index_str . '><a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li' . $page_status_str . '><a href="status.php"><i class="fa fa-files-o"></i> <span>Status</span></a></li>
        <li' . $page_history_str . '><a href="history.php"><i class="fa fa-dashboard"></i> <span>History</span></a></li>
        <li' . $page_clients_str . '><a href="clients.php"><i class="fa fa-users"></i> <span>Clients</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-gears"></i> <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li' . $page_install_str . '><a href="install.php">Install</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->';
      
      
$page_after_sidebar = 
'    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">';
    
$page_start = $page_before_sidebar . $page_sidebar . $page_after_sidebar;
?>
