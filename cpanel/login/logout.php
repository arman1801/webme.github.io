<?php
    //mengaktifkan session
    session_start();

    //menghapus semua session
    session_destroy();

    //mengarahkan halaman setelah logout
    header("location:login.php?pesan=logout");
?>