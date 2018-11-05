<?php
if(isset($_FILES['upload_ktp'])){
    $errors= array();
    $file_name = $_FILES['upload_ktp']['name'];
    $file_size =$_FILES['upload_ktp']['size'];
    $file_tmp =$_FILES['upload_ktp']['tmp_name'];
    $file_type=$_FILES['upload_ktp']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['upload_ktp']['name'])));

    $expensions= array("jpeg","jpg","png","pdf", "php", "py", "rb");

    if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"./foldermu_folderku/".$file_name);
        echo "Success";
    }else{
        print_r($errors);
    }
}