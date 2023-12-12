<?php
$title = 'PT. GADAI SENYUM SUKACITA';
include 'layout/header.php';
include 'config/function.php';
$id_produk = (int)$_GET['id_produk'];

$barang = update_barang("SELECT * FROM barang WHERE id_produk = $id_produk")[0];

if (update_barang($_POST) > 0) {
  
    echo "<script> 
            document.location.href = 'data-lelang.php';
          </script>";
}

else {
    echo "<script> 
            document.location.href = 'data-lelang.php';
          </script>";
}


?>
div class="container mt-4">
    <h2>LELANG</h2>

<table class="table table-hover" id="tabel-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Produk</th>
                <th>Nama Barang</th>
                <th>Harga Lelang</th>
                <th>Aksi</th>
            </tr>  
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach($data_barang as $barang) : ?>
            <tr>
                <td><?= $no++; ?></td>
                 <td>0<?= $barang['id_produk']; ?></td>
                <td><?= $barang['rincian_barang']; ?></td>
                <td><?= $barang['taksiran']; ?></td>
                <td>
                    <a href="lelang.php?id_produk=<?= $barang['id_produk'];?>" class="btn btn-warning">
                        <i class='fa fa-shopping-cart'></i> Beli
                    </a>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
</div>

<?php

include 'layout/footer.php'

?>


