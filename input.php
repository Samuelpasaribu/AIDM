<?php
    include_once('template/head.php');
?>
<body>
    <div class="row">
        <div class="container">
        <h2><i class="fa fa-plus"></i> Form Tambah Data Mahasiswa</h2>
        <hr>
        <form class="form-horizontal" method="post" action="simpan.php">
            <div class="form-group">
                <label for="nim" class="col-sm-2 control-label">NIM</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nim" name="nim" placeholder="nim">
                </div>
            </div>

            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                </div>
            </div>

            <div class="form-group">
                <label for="jl" class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-4">
                <select name="jl" class="form-control">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label for="smt" class="col-sm-2 control-label">Semester</label>
                <div class="col-sm-4">
                    <select name="smt" class="form-control">
                        <option value="">-- Pilih Semester --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="prodi" class="col-sm-2 control-label">Prodi</label>
                <div class="col-sm-4">
                    <select name="prodi" class="form-control">
                        <option value="">-- Pilih Prodi --</option>
                        <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                        <option value="D3 Kebidanan">D3 Kebidanan</option>
                        <option value="D3 Farmasi">D3 Farmasi</option>
                        <option value="D3 Akuntansi">D3 Akuntansi</option>
                        <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                        <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                        <option value="D3 Teknik Elektro">D3 Teknik Elektro</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</body>
<?php
    include_once('template/script.php');
?>
</html>

