<?php
    include "connect.php";
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $email = $_GET['email'];
    $telp = $_GET['telp'];
    $tgl = date("Y-m-d H:i:s");

    $sql = mysqli_query($conn, "insert into user_page values ('', '$nama', '$alamat', '$email', '$telp', '$tgl')");
    if($sql){
        echo "<script>window.location='index.php'</script>";
//        echo "test";
    }else{
        echo "Salah boosss";
    }