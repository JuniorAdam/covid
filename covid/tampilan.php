<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM suhu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/covid/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Tambah Pasien</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="t-pasien.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="buku">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                            </div>

                            <div class="form-group">
                                <label for="buku">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
                            </div>

                            <div class="form-group">
                                <label for="buku">telp</label>
                                <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukkan No Telp">
                            </div>

                            <div class="form-group">
                                <label for="datepicker">Tanggal</label>
                                <input type="date" name="tgl" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="buku">SUHU TUBUH</label>
                                <select name="id_kategori" class="form-control" id="id_kategori">
                                    <option value="">-- SUHU TUBUH --</option>

                                    <?php
                                    while ($suhu = mysqli_fetch_assoc($query)) :
                                    ?>

                                        <option value="<?php echo $suhu['id_suhu']; ?>"><?php echo $suhu["suhu"]; ?></option>

                                    <?php
                                    endwhile;
                                    ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>