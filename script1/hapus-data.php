<?php

include 'config/function.php';

//menerima nisn yang dipilih administrator
//$nomor = (int)$_GET['nomor'];
$id_produk = (int)$_GET['id_produk'];

if (lunas($id_produk) > 0) {
    echo "<script>
            document.location.href = 'data-gadai.php';
          </script>";
}

else {
    echo "<script> 
            document.location.href = 'data-gadai.php';
          </script>";
}

?>