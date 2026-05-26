<?php
include 'koneksi.php';

if (isset($_POST['submit'])){
    $u = $_POST['username'];
    $e = $_POST['email'];
    $p = $_POST['password'];

    $q = "INSERT INTO tb_users(username,email,password)VALUES('$u','$e','$p')";
    $hasil = mysqli_query($conn, $q);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">username</label><br>
        <input type="text" name="username" required><br>
        <label for="">email</label><br>
        <input type="email" name="email" required><br>
        <label for="">password</label><br>
        <input type="password" name="password" required><br>
        <button name="submit">submit</button>
    </form>
</body>
</html>