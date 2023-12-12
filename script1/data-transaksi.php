<?php

$title = 'PT. GADAI SENYUM SUKACITA';
include 'layout/header.php';
include 'config/function.php';


$id_produk = (int)$_GET['id_produk'];

$data_penggadai = select("SELECT * FROM pembeli ORDER BY id_produk");
$produk = select("SELECT * FROM produk WHERE id_produk = $id_produk")[0];
$transaksi = select("SELECT * FROM transaksi WHERE id_produk = $id_produk")[0];
?>

<style type=text/css>
    body {
        background-color: #cc0;
    }
</style>
<div class="container mt-4">
    <h2>TRANSAKSI</h2>
    <br><br>

<table class="table table-hover" id="tabel-data">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Produk</th>
                <th>Nama Pembeli</th>
                <th>Nama Barang</th>
                <th>Tawaran Harga</th>
                <th>Aksi</th>
            </tr>  
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach($data_penggadai as $penggadai) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td>0<?= $produk['id_produk']; ?></td>
                <td><?= $penggadai['nama']; ?></td>
                <td><?= $produk['namaproduk']; ?></td>
                <td><?= $transaksi['pembayaran']; ?></td>
                <td>
                    <a href="accept-transaksi.php?id_produk=<?= $penggadai['id_produk'];?>" class="btn btn-warning">
                        <i class="fa-solid fa-check"></i> Accept
                    </a>
                    <a href="hapus-transaksi.php?id_produk=<?= $penggadai['id_produk'];?>" class="btn btn-warning">
                        <i class="fa-solid fa-xmark"></i></i> Decline
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
</div>

<?php

include 'layout/footer.php'

?>
