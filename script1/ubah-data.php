<?php

$title = 'Ubah Data';
include 'config/function.php'; 
include 'layout/header.php';

//mengambil nisn dari data yg dipilih
$id_produk = (int)$_GET['id_produk'];

$barang = select("SELECT * FROM barang WHERE id_produk = $id_produk")[0];
$penggadai = select("SELECT * FROM penggadai ORDER BY id_produk = $id_produk")[0];
$transaksi = select("SELECT * FROM transaksi ORDER BY id_produk = $id_produk")[0];

//cek apakah tombol ubah ditekan
if (isset($_POST['ubah'])) {
  if (update_data($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'data-gadai.php';
           </script>";
  }
  else {
    echo "<script> 
            document.location.href = 'data-gadai.php';
          </script>";
}
}

?>

<style type=text/css>
    body {
        background-color: #cc0;
    }
</style>

<div class="container mt-4">
  <h3>Ubah Data <?= $penggadai['nama'] ?></h3>

  <form action="" method="post">
  <div class="row mt-4" style="border: 1px solid grey;">
        <div class="col-sm mt-3" style="padding: 30px 50px">
            <input type="hidden" name="id_produk" value="<?= $penggadai['id_produk'];?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap </label>
                <input type="text" class="form-control" id="nama" name="nama" style="width: 60%" 
                value="<?= $penggadai['nama']; ?>" placeholder="NAMA PESERTA" required>

            </div>

            <div class="mb-3">
                <label for="nik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                <input type="number" class="form-control" id="nik" name="nik" style="width:60%" 
                value="<?= $penggadai['nik']; ?>" placeholder="NIK PENGGADAI"  required>
            </div>

            <div class="mb-3">
                <label for="rincian_barang" class="form-label">Rincian Barang Jaminan</label>
                <textarea class="form-control" id="Rincian_Barang" name="rincian_barang" rows="2" style="width: 60%" 
                placeholder="Tertera merk, tipe, serta kondisi" required><?= $barang['rincian_barang']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="taksiran">Taksiran Harga</label>
                <input type="text" class="form-control" id="taksiran" name="taksiran" style="width: 60%;" 
                value="<?= $barang['taksiran']; ?>" placeholder="Taksiran Harga Barang yang digadai"  required>
            </div>

            <div class="mb-3">
                <label for="jlh_pinjaman" class="form-label">Jumlah Pinjaman</label>
                <input type="text" class="form-control" id="jlh_pinjaman" name="jlh_pinjaman" style="width: 60%;" 
                value="<?= $transaksi['jlh_pinjaman']; ?>" placeholder="Jumlah pinjaman yang diajukan"  required>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" type="date" style="width: 60%" 
                value="<?= $penggadai['tanggal_lahir']; ?>" required>
            </div>

        </div>
            
        <div class="col-sm mt-3" style="padding: 30px 50px">
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="2" style="width: 60%" 
                placeholder="ALAMAT" required><?= $penggadai['alamat']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP Aktif (No WA)</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" style="width: 40%;" 
                value="<?= $penggadai['no_hp']; ?>" placeholder="contoh: 081xxxxxxxxx"  required>
            </div>

            <div class="mb-3">
                <label for="tgl_jatuh_tempo" class="form-label">Tanggal Jatuh Tempo</label>
                <input class="form-control" id="tgl_jatuh_tempo" name="tgl_jatuh_tempo" type="date" style="width: 60%" 
                value="<?= $transaksi['tgl_jatuh_tempo']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="jenis_barang" class="form-label">Jenis Barang</label>
                <select class="form-select" id="jenis_barang" name="jenis_barang" style="width: 60%" required>
                    <option selected value="<?= $barang['jenis_barang']; ?>">::Pilih Jenis Barang::</option>
                    <option value="Kendaraan" <?= $barang == 'Kendaraan' ? 'selected' : null ?>>Kendaraan</option>
                    <option value="Elektronik" <?= $barang == 'Elektronik' ? 'selected' : null ?>>Elektronik</option>
                </select>
            </div>

        </div>
  </div>

    <button type="submit" name="ubah" class="btn btn-success mt-4" style="float: left;">
        <i class="fa-solid fa-pen-to-square"></i> Ubah
    </button>
    <a href="javascript:window.history.go(-1);" class="btn btn-dark mt-4" style="margin-left: 4pt">
      <i class="fa-solid fa-circle-arrow-left"></i> Kembali
    </a>

  </form>
</div>
  
<?php include 'layout/footer.php'; ?>