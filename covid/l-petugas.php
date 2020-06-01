<?php
include 'koneksi.php';

if (isset($_POST['login'])) {

    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM petugas WHERE nama='$nama' AND password='$password' ";
    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);

    if ($count == 1) {
        $data_login = mysqli_fetch_assoc($res);

        $_SESSION['id_petugas'] = $data_login['id_petugas'];

        $_SESSION['nama'] = $data_login['nama'];

        $_SESSION['status'] = "login";


        header("Location: t-petugas.php");

        setcookie("message", "delete", time() - 1);
    } else {

        setcookie("message", "Maaf, Username atau Password salah", time() + 3600);

        header("Location: t-petugas.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>

    <form action="" class="box" method="POST">
        <h1>LOGIN</h1>
        <input type="text" name="username" placeholder="Nama .." required>
        <input type="password" name="password" placeholder="Password .." required>
        <input type="submit" name="login" value="Login">
    </form>

</body>