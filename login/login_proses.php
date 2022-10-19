<?php
    //mengaktifkan session php
    session_start();

    //menghubungkan dengan koneksi
    include '../config/koneksi.php';

    //menangkap data yang dikirim dari form login
    $username   = $_POST['username'];
    $password   = MD5($_POST['password']);

    //menyeleksi data admin 
    $data = mysqli_query($koneksi, "SELECT * FROM tuser WHERE 
    username='$username' AND password='$password'");

    //menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username']   = $username;
        $_SESSION['status']     = "login";

        header("location:../index.php");
    }else{
        header("location:index.php?pesan=gagal");
    }
?>