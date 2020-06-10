<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jl = $_POST['jl'];
    $smt = $_POST['smt'];    
    $prodi = $_POST['prodi'];   

    if($nim=='' || $nama=='' || $jl=='' || $smt=='' || $prodi==''){
        echo "Gagal update, pastikan semua kolom di form telah terisi!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }

    $query = "update data_mahasiswa set nama='$nama', jenis_kelamin='$jl', semester='$smt', prodi='$prodi' where nim='$nim'";

    if($koneksi->query($query)===true){
        echo "<br>Data ".$nama.' berhasil diupdate';
    } else{
        echo '<br>Data gagal diupdate';
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>