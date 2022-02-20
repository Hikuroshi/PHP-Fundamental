<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebsiteHiku Timeline</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img class="img img-fluid rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" alt="Foto">

                        <h3><?php echo $_SESSION["user"]["name"] ?></h3>
                        <p><?php echo $_SESSION["user"]["email"] ?></p>

                        <p><a href="logout.php">Logout</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form action="" method="post">
                    <div class="form-group my-3">
                        <textarea class="form-control" placeholder="Apa yang kamu pikirkan?"></textarea>
                    </div>
                </form>

                <?php for($i=0; $i<6; $i++){ ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non consequatur sapiente rerum, est ex, inventore, distinctio odit sed pariatur culpa eos nulla dolore! Corrupti pariatur consequuntur nesciunt autem at cum?
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>