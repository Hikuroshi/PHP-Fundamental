<?php

require_once("config.php");

if(isset($_POST['register'])){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    $sql = "INSERT INTO users (name, username, email, password)
            VALUE (:name, :username, :email, :password)";
    $stmt = $db -> prepare($sql);

    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    $saved = $stmt -> execute($params);

    if($saved) header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register WebsiteHiku</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <p>&larr; <a href="index.php">Home</a></p>

                <h4>Bergabunglah bersama jutaan orang lainnya...</h4>
                <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input class="form-control" type="text" name="name" placeholder="Nama kamu">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Alamat email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar">
                </form>
            </div>
            <div class="col-md-6">
                <img class="img img-fluid" src="img/conect.png" alt="gambar conect">
            </div>
        </div>
    </div>
</body>
</html>