<?php     $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
    $conn-> set_charset("utf8");

    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    }

session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}
  $id = $_SESSION['id'];
	$nombre = $_SESSION['nombre'];
	$rol_id = $_SESSION['rol_id'];
  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Oporfin | Admin V1.0 </title>
  <link rel="icon" type="image/png" href="../img/favicon.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <link rel="stylesheet" href="sweet/dist/sweetalert2.min.css">


</head>
<body class="sidebar-mini layout-fixed sidebar-open sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>


  </nav>
  <!-- /.navbar -->