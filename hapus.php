<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $nim = $_GET['nim'];

    if($nim==''){
        echo "Gagal hapus data!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }

    $query = "delete from data_mahasiswa where nim='$nim'";

    if($koneksi->query($query)===true){
        echo "<br>Data ".$nim.' berhasil dihapus';
    } else{
        echo '<br>Data gagal dihapus';
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>