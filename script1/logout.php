<?php
session_start();

if (isset($_SESSION['status_login'])) {
    $_SESSION = [];
    session_unset();
    session_destroy();

    echo "<script>
          alert('Berhasil logout!');
                window.location = 'home.php'; 
          </script>";
}

else {
echo "<script>
      alert('Anda belum login!');
      window.location = 'home.php';
      </script>";
}
?>