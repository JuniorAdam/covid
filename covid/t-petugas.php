<?php

include 'koneksi.php';
$sql = "SELECT * FROM pasien";

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
    $pinjam[] = $data;
}

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
            <div class="col-md">
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><i class="fas fa-user"></i> Data Pasien</h2>
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telp</th>
                        <th scope="col">Tgl</th>
                        <th scope="col">Suhu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($pinjam as $p) { ?>

                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['alamat'] ?></td>
                            <td><?= $p['telp'] ?></td>
                            <td><?= $p['tgl'] ?></td>
                            <td><?= $_POST['suhu'] ?></td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>

            </table>
        </div>
    </div>


    <?php

    ?>

</body>

</html>