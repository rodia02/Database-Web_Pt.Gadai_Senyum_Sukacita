<?php

$title = 'Formulir Persetujuan Nasabah';
include 'layout/header.php';
include 'config/function.php';

//cek apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
    if (create_barang($_POST) > 0) {
      echo "<script>
              document.location.href = 'form-penggadai.php';
             </script>";
    }
  
    else {
      echo "<script>
              alert('Data gagal ditambah!');
              document.location.href = 'form-barang.php';
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
    <h3 class="text-center">Formulir Persetujuan Nasabah</h3>

    <form action="" method="post">
    <div class="row" style="padding: 30px 50px">

        <div class="col"> </div>
        <div class="col" style=" padding: 30px 50px; background-color: #def880;">
          
            <div class="mb-3">
                <label for="rincian_barang" class="form-label">Rincian Barang Jaminan</label>
                <textarea class="form-control" id="rincian_barang" name="rincian_barang" rows="2"  
                placeholder="Tertera merk, tipe, serta kondisi" required></textarea>
            </div>

            <div class="mb-3">
                <label for="jenis_barang" class="form-label">Jenis Barang</label>
                <select class="form-select" id="jenis_barang" name="jenis_barang" required>
                    <option selected value="">::Pilih Jenis Barang::</option>
                    <option value="Kendaraan">Kendaraan</option>
                    <option value="Elektronik">Elektronik</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="taksiran">Taksiran Harga</label>
                <input type="text" class="form-control" id="taksiran" name="taksiran"
                placeholder="Taksiran Harga Barang yang digadai"  required>
            </div>

            <div class="mb-3">
                <label for="label_barang" class="form-label">Jenis Transaksi</label>
                <select class="form-select" id="label_barang" name="label_barang"  required>
                    <option selected value="">::Pilih Tipe Transaksi::</option>
                    <option value="Gadai">Gadai</option>
                    <option value="Lelang">Lelang</option>
                </select>
            </div>

            <button type="submit" name="tambah" class="btn btn-primary mt-4" 
            style="float: left; font-family: 'Quicksand'; color: white">
            Next
            </button>

            <a href="javascript:window.history.go(-1);" class="btn btn-dark mt-4" style="margin-left: 4pt">
            Kembali
            </a>

        </div>
        <div class="col"> </div>
  </div>

  </form>

</div>


<?php

include 'layout/footer.php';

?>