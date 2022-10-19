<?php
    session_start();
    error_reporting(0);
    if($_SESSION['status'] =="login"){
        header("location:../index.php");
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- CSS Login -->
    <link rel="stylesheet" href="../assets/css/styleLogin.css">
</head>
<body>
    <main class="form-signin w-100 m-auto">
        <form action="login_proses.php" method="POST">
            <center>
            <h1 class="h3 mb-3 fw-normal"> Login</h1>
            </center>
            <!-- Pesan -->
            <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "belum_login"){
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        Anda Harus Login Dulu!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                    }else if($_GET['pesan'] == "gagal"){
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        Username dan Password Anda Salah!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                    }else if($_GET['pesan'] == "logout"){
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        Anda Berhasil Logout!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                    }
                }
            ?>

            <div class="form-floating">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>

            <div class="form-floating">
                <input type="password" name="password" id="username" class="form-control" placeholder="Password">
                <label for="floatingInput">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary">Login</button>
        </form>
    </main>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>