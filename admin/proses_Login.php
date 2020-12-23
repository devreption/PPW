<?php
    include('Koneksi/Koneksi.php');   
    session_start();

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login = mysqli_query($koneksi,"SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
        $cek = mysqli_num_rows($login);

        if($cek == 1){
            $data = mysqli_fetch_assoc($login);
            $id = $data['id_admin'];
            $_SESSION['admin'] = $id;

            echo "<script> alert('Berhasil login');
            location.href='Home.php';</script>";
        }else{
            echo "<script> alert('Gagal login');
            location.href='Login.php';</script>";
        }
    }
?>