<?php

$title = 'PT. GADAI SENYUM SUKACITA';
include 'layout/header.php';
include 'config/function.php';

//$data_karyawan  = select("SELECT * FROM karyawan INNER JOIN
                //detail_data_karyawan ON karyawan.nik= detail_data_karyawan.nik");
$data_detail = select("SELECT * FROM pembeli_lelang");
?>

<style type=text/css>
    body {
        background-color: #cc0;
    }
</style>

<div class="container mt-4">
    <h2>DATA PEMBELI LELANG</h2>
    <table class="table table-hover" id="tabel-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Barang</th>
                <th>PEMBELI</th>
                <th>No HP</th>
            </tr>  
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php //foreach($data_barang as $barang)  : ?>
            <?php //foreach($data_karyawan as $karyawan)  : ?>
            <?php foreach($data_detail as $detail)  : ?>

            <tr></tr>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $detail['id_produk']; ?></td>
                <td><?= $detail['nama']; ?></td>
                <td><?= $detail['no_hp']; ?></td>
            
            </tr>
            <?php //endforeach; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>

<?php

include 'layout/footer.php'

?>

