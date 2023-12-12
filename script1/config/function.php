<?php

include 'koneksi.php';

//fungsi menampilkan data
function select($query)
{
    //panggil koneksi database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


//fungsi menghapus data lunas
function lunas($id_produk)
{
    global $db;

    //query hapus data penggadai, barang,  transaksi
    $query = "DELETE FROM penggadai WHERE id_produk = $id_produk";
    $query1 = "DELETE FROM barang WHERE id_produk = $id_produk";
    $query2 = "DELETE FROM transaksi WHERE id_produk = $id_produk";


    mysqli_query($db, $query);
    mysqli_query($db, $query1);
    mysqli_query($db, $query2);

    return mysqli_affected_rows($db); 
}

//fungsi menghapus data lelang
function lelang($id_produk)
{
    global $db;

    $query = "DELETE FROM penggadai WHERE id_produk = $id_produk";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db); 
}

//fungsi menghapus produk
function delete_produk($id_produk)
{
    global $db;

    //query hapus data produk
    $query = "DELETE FROM barang WHERE id_produk = $id_produk";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi menghapus transaksi dan pembeli
function delete_transaksi($id_produk)
{
    global $db;

    //query hapus pembeli
    $query = "DELETE FROM transaksi WHERE id_produk = $id_produk";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi create data barang
function create_barang($post)
{
    global $db;

    $rincian_barang = $post['rincian_barang'];
    $jenis_barang = $post['jenis_barang'];
    $taksiran = $post['taksiran'];
    $label_barang = $post['label_barang'];

    $query = "INSERT INTO barang VALUES(null, '$rincian_barang', '$jenis_barang', '$taksiran', '$label_barang')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi menambahkan data penggadai
function create_penggadai($post)
{
    global $db;

    $id_produk = $post['id_produk'];
    $nama = $post['nama'];
    $nik = $post['nik'];   
    $tanggal_lahir = $post['tanggal_lahir'];
    $alamat = $post['alamat'];
    $no_hp = $post['no_hp'];

    //query tambah data
    $query = "INSERT INTO penggadai VALUES(null, '$id_produk', '$nama', '$nik', '$tanggal_lahir', '$alamat' , '$no_hp')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi menambahkan data penggadai
function create_transaksi($post)
{
    global $db;

    $jlh_pinjaman = $post['jlh_pinjaman'];
    $tgl_jatuh_tempo = $post["tgl_jatuh_tempo"];
    $id_produk = $post['id_produk'];
    $id_pegawai = $post['id_pegawai'];

    $query = "INSERT INTO transaksi VALUES(null, '$jlh_pinjaman', '$tgl_jatuh_tempo', '$id_produk', '$id_pegawai' )";
    
    mysqli_query($db, $query);
}

//fungsi menambahkan data dari formulir lelang
function create_pembelilelang($post)
{
    global $db;

    $id_produk = $post['id_produk'];
    $nik = $post['nik'];
    $no_hp = $post['no_hp'];
    $nama = $post['nama'];
    

    //query tambah data
    $query = "INSERT INTO pembeli_lelang VALUES(null,  '$id_produk', '$nik', '$no_hp','$nama')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
} 

//fungsi menambahkan data dari formulir karyawan
function create_karyawan($post)
{
    global $db;

    $nama = $post['nama'];
    $password = $post['password'];
    $nik = $post['nik'];
    $jenis_kelamin = $post['jenis_kelamin'];
    $no_hp= $post['no_hp'];
    $alamat = $post['alamat'];
    $gaji = $post['gaji'];
    
    //query tambah data
    $query = "INSERT INTO detail_data_karyawan VALUES(null,  '$nama', '$password', '$nik','$jenis_kelamin', '$alamat')";
    $query1 = "INSERT INTO karyawan VALUES(null, '$nik', '$no_hp', '$gaji')";

    mysqli_query($db, $query);
    mysqli_query($db, $query1);

    return mysqli_affected_rows($db);
} 


//fungsi update data 
function update_data($post)
{
    global $db;

    $id_produk = $post['id_produk'];
    $nama = $post['nama'];
    $nik = $post['nik'];  
    $rincian_barang = $post['rincian_barang'];
    $tanggal_lahir = $post['tanggal_lahir'];
    $alamat = $post['alamat'];
    $taksiran = $post['taksiran'];
    $no_hp = $post['no_hp'];
    $jlh_pinjaman = $post['jlh_pinjaman'];
    $tgl_jatuh_tempo = $post['tgl_jatuh_tempo'];
    $jenis_barang = $post['jenis_barang'];

    //query ubah data
    $query = "UPDATE penggadai SET nama = '$nama', nik = '$nik', tanggal_lahir = '$tanggal_lahir', 
     alamat = '$alamat', no_hp = '$no_hp' WHERE id_produk = $id_produk";
    //query ubah data produk
    $query1 = "UPDATE barang SET rincian_barang = '$rincian_barang', taksiran = '$taksiran', jenis_barang = '$jenis_barang' WHERE id_produk = $id_produk";
    $query2 = "UPDATE transaksi SET  jlh_pinjaman = '$jlh_pinjaman', tgl_jatuh_tempo = '$tgl_jatuh_tempo' WHERE id_produk = $id_produk";

    mysqli_query($db, $query);
    mysqli_query($db, $query1);
    mysqli_query($db, $query2);

    return mysqli_affected_rows($db); 
    
}
function update_barang($query)
{

    global $db;

    $id_produk = (int)$_GET['id_produk'];
    $query = "UPDATE barang SET  label_barang = 'Lelang'
    WHERE id_produk = $id_produk";
    lelang($id_produk);

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
    
}

?>