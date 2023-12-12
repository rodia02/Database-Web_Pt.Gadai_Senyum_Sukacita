<?php

include 'config/function.php';

$id_produk = (int)$_GET['id_produk'];

if (delete_transaksi($id_produk) > 0) {
    echo "<script> 
            alert('Data berhasil dihapus!');
            document.location.href = 'data-gadai.php';
          </script>";
}

else {
    echo "<script> 
            alert('Data gagal dihapus!');
            document.location.href = 'data-gadai.php';
          </script>";
}

?>