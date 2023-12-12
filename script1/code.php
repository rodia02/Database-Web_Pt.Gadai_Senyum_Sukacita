<?php
 $query = "SELECT max(id) as maxKode FROM user";
 $hasil = mysqli_query($db, $query);
 $data = mysqli_fetch_array($hasil);

$maxkode = $data['maxKode'];

$nourut = (int) substr($maxkode, 2,3);

$nourut++
$char = 'ID';
$kodejadi = $char . sprintf("%03s", $nourut);
echo $kodejadi;