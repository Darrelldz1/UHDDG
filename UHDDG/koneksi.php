<?php
$koneksi = new mysqli('localhost', 'root', '', 'logres');
if ($koneksi) {
    // echo "Koneksi Berhasil";
}else{
    echo $koneksi->error;
}

?>