<?php
    session_start(); // memulai session
    session_destroy(); // menghapus session
    header("location:Login.php"); // mengambalikan ke form_login.php
?>