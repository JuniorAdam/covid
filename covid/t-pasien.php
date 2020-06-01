<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['pengarang'];
    $tgl = $_POST['ringkasan'];
    $id_suhu = $_POST['id_suhu'];


    $sql = "INSERT INTO pasien VALUES('','$nama','$alamat','$telp','$tgl','$id_suhu')";

    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);

    if ($count == 1) {
        echo "<script>
                alert('Data Berhasil Ditambahkan'); 
                document.location.href='index.php';
              </script>";
    } else {
        echo "<script>
        alert('Data Berhasil Ditambahkan'); 
        document.location.href='index.php';
      </script>";
    }
}
