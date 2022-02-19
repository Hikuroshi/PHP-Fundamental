<?php

require_once("config.php");

if(isset($_POST['login'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db -> prepare($sql);

    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt -> execute($params);

    $user = $stmt -> fetch(PDO::FETCH_ASSOC);

    if($user){
        if(password_verify($password, $user["password"])){
            session_start();
            $_SESSION["user"] = $user;
            header("Location: timeline.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login WebsiteHiku</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <p>&larr; <a href="index.php">Home</a></p>

                <h4>Masuk ke WebsiteHiku</h4>
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

                <form action="" method="POST">
                    <div class="form-group my-2">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username atau email">
                    </div>
                    <div class="form-group my-2">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    
                    <div class="d-grid gap-1 my-3">
                        <input type="submit" class="btn btn-success" name="login" value="Masuk">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
    </div>
</body>
</html>