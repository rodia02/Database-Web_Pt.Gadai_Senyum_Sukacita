<?php

session_start();

?>

<!doctype html>
<html>
   <head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="./css/stylesheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <script src="https://kit.fontawesome.com/2d17ba45f4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  </head>

  <body>
    <div class="header">  
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>  

                <div class="collapse navbar-collapse" id="navbarNav">
        
                <ul class="navbar-nav">
                
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">HOME</a>
                    </li>
                    
                    <li class="nav-item ms-auto"> 
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        MORE INFO
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="lowongan-kerja.php">Lowongan Kerja</a></li>
                            <li><a class="dropdown-item" href="data-karyawan.php">Karyawan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data-lelang.php">LELANG</a>
                    </li>

                    <?php if (isset($_SESSION['status_login'])) : ?>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        DATA PEGADAIAN
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="data-gadai.php">Data Penggadai</a></li>
                            <li><a class="dropdown-item" href="data-pembeli-lelang.php">Data Pembeli Lelang</a></li>
                        </ul>
                    </li>
                    
                    <?php endif; ?>

                </ul>
                </div>
                    
                    <?php if (!isset($_SESSION['status_login'])) : ?>
                    <a class="nav-link" href="login.php">
                        <span class="material-symbols-outlined ms-auto" style="color: white">
                            account_circle
                            <span class="tooltiptext">
                                <p>Login</p>
                            </span>
                        </span>
                    </a>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['status_login'])) : ?>
                    <a class="nav-link" href="logout.php">
                        <span class="material-symbols-outlined ms-auto" style="color: white;">
                            logout
                            <span class="tooltiptext">
                                <p>Logout</p>
                            </span>
                        </span>
                    </a>
                    <?php endif; ?>
            </div>
        </nav> 
    </div>