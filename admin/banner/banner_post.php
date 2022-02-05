<?php
session_start();
$error=[];

    if(isset($_POST['submit'])){
        $title = trim(htmlentities($_POST['title']));
        $description = trim(htmlentities($_POST['description']));
        $btn_text = trim(htmlentities($_POST['btn_text']));
        $btn_url = trim(htmlentities($_POST['btn_url']));
        $banner_img = $_FILES['banner_img'];
        
        if(empty($title)){
            $_SESSION['title'] = "Enter Your Banner Title!";
        }if(empty($banner_img['name'])){
            $_SESSION['photo'] = "Upload Your Banner Image!";
        }if(!empty($title) && !empty($banner_img['name'])){
            require_once '../database.php'; 

            $photoex = explode('.', $banner_img['name']);
            $photo_name = $title.'.'.end($photoex);
            $fileUpload = move_uploaded_file($banner_img['tmp_name'],'../../uploads/banners/'.$photo_name);
            if($fileUpload){
            $query = "INSERT INTO modern_banners(title, description, btn_text, btn_url, photo) VALUES ('$title', '$description', '$btn_text', '$btn_url', '$photo_name')";
            $result = mysqli_query($conn, $query);

            if($result){
                $_SESSION['success'] = "Banner Insert successfull!";
                header("Location: index.php");
            }
        }   
    }else{
        header("Location: insert.php");
    }     
}