<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $jl     = $_POST['jl'];
    $smt    = $_POST['smt'];
    $prodi  = $_POST['prodi'];

    if($nim=='' || $nama=='' || $jl=='' || $smt=='' || $prodi==''){
        echo "Mohon cek kembali, pastikan semua telah terisi!<br>";
        echo '<a href="input.php">kembali</a>';
        return;
    }

    $query = "insert into data_mahasiswa values('$nim', '$nama', '$jl', '$smt', '$prodi')";
    
    if($koneksi->query($query)===true){
        echo "<br>Data ".$nama.' berhasil disimpan';
    } else{
        echo '<br>Data gagal disimpan';
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>