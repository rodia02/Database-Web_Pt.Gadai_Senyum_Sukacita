<?php

$title = 'Formulir Pendaftaran Karyawan';
include 'layout/header.php';
include 'config/function.php';

//cek apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
    if (create_karyawan($_POST) > 0) {
      echo "<script>
              alert('Data berhasil ditambah!');
              document.location.href = 'data-karyawan.php';
             </script>";
    }
  
    else {
      echo "<script>
              alert('Data gagal ditambah!');
              document.location.href = 'form-karyawan.php';
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
    <h3>Formulir Tambah Karyawan</h3>

    <form action="" method="post">
    <div class="row mt-4" style="border: 1px solid grey;">
        <div class="col-sm mt-3" style="padding: 30px 50px">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap </label>
                <input type="text" class="form-control" id="nama" name="nama" style="width: 60%" placeholder="NAMA KARYAWAN" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password" style="width: 60%;" 
                placeholder="PASSWORD KARYAWAN"  required>
            </div>

            <div class="mb-3">
                <label for="nik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                <input type="number" class="form-control" id="nik" name="nik" style="width:60%" placeholder="NIK KARYAWAN"  required>
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
            </div>

            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP Aktif (No WA)</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" style="width: 60%;" 
                placeholder="contoh: 081xxxxxxxxx"  required>
            </div>

        </div>
            
        <div class="col-sm mt-3" style="padding: 30px 50px">
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="2" style="width: 60%" placeholder="ALAMAT" required></textarea>
            </div>

            <div class="mb-3">
                <label for="gaji" class="form-label">Gaji</label>
                <input type="text" class="form-control" id="gaji" name="gaji" style="width: 60%;" 
                placeholder="Jumlah gaji yang diajukan"  required>
            </div>

        </div>
  </div>

    <button type="submit" name="tambah" class="btn btn-primary mt-4" 
    style="float: left; font-family: 'Quicksand'; color: white">
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