<?php
    include "connect.php";
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = mysqli_query($conn, "select * from login_level_satu where users = '$username' and pass = '$password'");
        $result = mysqli_num_rows($sql);
        $data = mysqli_fetch_assoc($sql);
        if ($result > 0){
            $_SESSION['status'] = 'logged_in';
            $_SESSION['credentials'] = 'USERS';
            setcookie("CREDENTIALS", "USERS", time() + (86400 * 30), "/");
            echo "<script>alert('Selamat di page USERS');window.location='index.php'</script>";
        }else{
            echo "<script>alert('Maaf identitas anda tidak kami ketahui!');window.location='kepo_ya.php'</script>";
        }
    }else{
        echo "<script>alert('Maaf cara anda masuk tidak kami ketahui!');window.location='kepo_ya.php'</script>";
    }