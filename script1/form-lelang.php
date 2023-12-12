<?php

$title = 'Formulir Pembelian Lelang';
include 'layout/header.php';
include 'config/function.php';

$nomor = (int)$_GET['nomor'];
$produk = select("SELECT * FROM produk WHERE id_produk = $nomor")[0];

//cek apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
    if (create_transaksi($_POST) > 0) {
      echo "<script>
              alert('Pembelian berhasil! Menunggu konfirmasi');
              document.location.href = 'data-lelang.php';
             </script>";
    }
  
    else {
      echo "<script>
              alert('Pembelian barang gagal!');
              document.location.href = 'form-lelang.php';
             </script>";
    }
}

?>

<style type=text/css>
    body {
        background-color: #D3D3D3;
    }
</style>

<div class="container mt-4">
    <h3>Formulir Pembelian Barang</h3>

    <form action="" method="post">
    <div class="row mt-4" style="border: 1px solid grey;">
        <div class="col-sm mt-3" style="padding: 30px 50px">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap </label>
                <input type="text" class="form-control" id="nama" name="nama" style="width: 40%" placeholder="NAMA PEMBELI" required>
            </div>

            <div class="mb-3">
                <label for="nik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                <input type="number" class="form-control" id="nik" name="nik" style="width:40%" placeholder="NIK PEMBELI"  required>
            </div>
            
            <div class="mb-3">
                <label for="no_telp" class="form-label">No HP Aktif (No WA)</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" style="width: 40%;" 
                placeholder="contoh: 081xxxxxxxxx"  required>
            </div>

            <div class="mb-3">
                <label for="id_produk" class="form-label">ID Produk: <?= $produk['id_produk']; ?></label>
                <input type="text" class="form-control" id="id_produk" name="id_produk" style="width: 40%;" 
                value="<?= $produk['id_produk'];?>" placeholder="Masukkan sesuai id produk"  required>
            </div>

        </div>
        <div class="col-sm mt-3" style="padding: 30px 50px">

            <div class="mb-3">
                <label for="trans" class="form-label">Metode Pembayaran</label><br>
                <select class="form-control" id="trans" name="trans" style="width: 40%;">
                    <option value="BANK/ATM BRI">BANK/ATM BRI</option>
                    <option value="BANK/ATM BRI">MBANKING BRI</option>
                    <option value="BANK/ATM BNI">BANK/ATM BNI</option>
                    <option value="BANK/ATM BNI">MBANKING BNI</option>
                    <option value="BANK/ATM BCA">BANK/ATM BCA</option>
                    <option value="BANK/ATM BCA">MBANKING BCA</option>
                    <option value="BANK Lainnya">BANK Lainnya</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="no_rek" class="form-label">No Rekening</label>
                <input type="text" class="form-control" id="no_rek" name="no_rek" style="width: 40%;" 
                placeholder="input no rekening "  required>
            </div>

            <div class="mb-3">
                <label for="pembayaran" class="form-label">
                    Nominal Penawaran Lelang
                    <br> Minimal <?= $produk['taksiran']; ?></br>
                </label>
                <input type="text" class="form-control" id="pemabayaran" name="pembayaran" style="width: 40%;"
                value="<?= $produk['taksiran'];?>" placeholder="Harga penawaran lelang"  required>
            </div>
            

        </div>
  </div>

    <button type="submit" name="tambah" class="btn btn-primary mt-4" 
    style="float: left; font-family: 'Quicksand'; color: white" href="transaksi.php?nomor=<?= $penggadai['nomor'];?>">
       Tambah
    </button>

    <a href="javascript:window.history.go(-1);" class="btn btn-dark mt-4" style="margin-left: 4pt">
       Kembali
    </a>


  </form>

</div>


<?php

include 'layout/footer.php';

?>