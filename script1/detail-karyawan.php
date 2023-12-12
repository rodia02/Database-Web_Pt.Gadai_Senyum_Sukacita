<?php 
$title = 'Detail Data';
include 'layout/header.php'; 
include 'config/function.php';

//mengambil nisn dari data yg dipilih
$id_pegawai = (int)$_GET['nik'];
//$nik = (int)$_GET['nik'];

$karyawan = select("SELECT * FROM karyawan WHERE nik = $id_pegawai")[0];
$detail_data_karyawan = select("SELECT * FROM detail_data_karyawan WHERE nik = $id_pegawai")[0];

if (!isset($_SESSION['status_login'])|| $_SESSION["status_login"] !== true){
    echo "<script> 
            alert('Anda tidak dapat mengakses!');
            document.location.href = 'data-karyawan.php';
          </script>";
}
?>

<style type=text/css>
    body {
        background-color: #cc0;
    }
</style>

  <div class="container mt-4">
    <h3>Data <?= $detail_data_karyawan['nama'] ?></h3>
    <br>
    <table class="table table-striped">
        <tr>
            <td><b>Nama Lengkap</b></td>
            <td><?= $detail_data_karyawan['nama']; ?></td>
        </tr>

        <tr>
            <td><b>NIK (Nomor Induk Kependudukan)</b></td>
            <td><?= $detail_data_karyawan['nik']; ?></td>
        </tr>

        <tr>
            <td><b>No HP Aktif (No WA)</b></td>
            <td><?= $karyawan['no_hp']; ?></td>
        </tr>

        <tr>
            <td><b>Jenis Kelamin</b></td>
            <td><?= $detail_data_karyawan['jenis_kelamin']; ?></td>
        </tr>

        <tr>
            <td><b>Alamat</b></td>
            <td><?= $detail_data_karyawan['alamat']; ?></td>
        </tr>

        <tr>
            <td><b>Gaji</b></td>
            <td><?= $karyawan['gaji']; ?></td>
        </tr>
        
    </table>
    
    	
    <a href="javascript:window.history.go(-1);" class="btn btn-dark mt-4">
        <i class="fa-solid fa-circle-arrow-left"></i> Kembali
    </a>

  </div>
  
<?php include 'layout/footer.php'; ?>