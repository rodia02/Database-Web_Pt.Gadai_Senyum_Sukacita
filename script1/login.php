<?php
session_start();
include 'config/koneksi.php';

if(isset($_POST['login'])){

    $user= mysqli_real_escape_string($db,$_POST['username']);
    $pass= mysqli_real_escape_string($db,$_POST['password']);

    $cek  = mysqli_query($db, "SELECT * FROM detail_data_karyawan WHERE nama ='".$user."'");
    if(mysqli_num_rows($cek)> 0){

        $d = mysqli_fetch_object($cek);
         if(($pass) == $d->password) {
            $_SESSION['status_login'] = true;
            $_SESSION['nik']=$d->nik;
            
            echo "<script> 
                window.location = 'home.php'; 
                </script>";
         } 
         else {
           $error = true;
         }
    }
    
    else{
        $error = true;
    }
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url('img/bg.png');
        background-size: 100%;
        
    }
    
    #card {
        width: 100%;
        display: flex;
        max-width: 850px;
        background: rgb(230, 227, 227,0.6);
        border-radius: 15px;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }
    
    #card-content {
        width: 600px;
    }
    
    form {
        width: 250px;
        margin: auto;
    }
    
    h1 {
        margin: 20px;
        text-align: center;
        font-weight: bolder;
        text-transform: uppercase;
    }
    
    hr {
        border-top: 3px solid #0000FF;
    }
    
    p {
        text-align: center;
        margin: 10px;
    }
    
    .right img {
        width: 450px;
        height: 100%;
        padding-right: 50px;
        padding-top: 35px;
        padding-bottom: 35px;
    }
    
    form label {
        display: block;
        font-size: 16px;
        font-weight: 600;
        padding: 5px;
    }
    
    input {
        width: 100%;
        margin: 2px;
        border: none;
        outline: none;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid gray;
    }
    
    #submit-btn {
        border: none;
        outline: none;
        padding: 8px;
        width: 252px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 20px;
        border-radius: 5px;
        background: #0000FF;
    }
    
    #submit-btn:hover {
        background: rgb(100, 149, 237);
    }
    
    
    @media (max-width: 880px) {
        #card {
            width: 100%;
            max-width: 750px;
            margin-left: 20px;
            margin-right: 20px;
        }
    
        form {
            width: 300px;
            margin: 20px auto;
        }
    
        #card-content {
            width: 400px;
            padding: 20px;
        }
    
        #submit-btn {
            width: 100%;
        }
    
        .right img {
            width: 100%;
            height: 100%;
        }
    }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. GADAI SENYUM SUKACITA </title>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <form method="post" class="form" action="login.php">
                <h1>Login</h1>
                <hr>
                <p>PT. GADAI SENYUM SUKACITA</p>
                <label for="user-username" >&nbsp;username</label>
                <input id="user-username" class="form-content" type="username" name="username" autocomplete="on" required />
                <div class="form-border"></div>
                <label for="user-password" >&nbsp;Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>
                <input id="submit-btn" type="submit" name="login" value="LOGIN" />

                <?php if (isset($error)) : ?>
                <div class="alert alert-danger text-center mt-4" role="alert">
                    Username/Password SALAH!
                </div>
                <?php endif; ?>
            </form>

        </div>
        <div class="right">
            <img src="img/icon.png" alt="PT. GADAI SENYUM SUKACITA">
        </div>
    </div>

<?php 

include 'layout/script.php';

?>