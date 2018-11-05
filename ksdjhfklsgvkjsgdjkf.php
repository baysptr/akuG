<?php
include "connect.php";
session_start();

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = mysqli_query($conn, "select * from tb_abal where users = '$username' and pass = '$password'");
    $result = mysqli_num_rows($sql);
    $data = mysqli_fetch_assoc($sql);
    if ($result > 0){
        $_SESSION['status'] = 'logged_in';
        $_SESSION['credentials'] = 'ADMINS';
        setcookie("CREDENTIALS", "ADMINS", time() + (86400 * 30), "/");
    }else{
        echo "<script>alert('Maaf identitas anda tidak kami ketahui!');window.location='index.php'</script>";
    }