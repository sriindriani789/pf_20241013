<?php 
//cek tombol submit sudah ditekan/belum
if (isset($_POST["submit"])){

    // cek username & password
    if( $_POST["username"] == "admin" && $_POST ["password"] 
    == "123") {
    
    // jika benar direct ke halaman admin
    header ("location: admin.php");
     exit;

    } else {
    // jika salah, tampilkan pesan kesalahan
    $error = true;
    }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>login</title>
</head>
<body>
    <h1>halaman login</h1>
    <?php if (isset($error)) :?>
    <p style="color :red; font-style:italic;">username / password salah!</p>
    <?php endif; ?>

    <form action= "" method="post">
        <li>
            <label for="username">username: </label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">password: </label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">login</button>
        </li>
    </form>
</body>
</html>