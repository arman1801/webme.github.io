<?php
    //mengaktifkan session
    session_start();

    //menghapus semua session
    session_destroy();

    //mengarahkan halaman setelah logout
    header("location:index.php?pesan=logout");
?>