<?php
session_start();

$error=[];

    if(isset($_POST['submit'])){
        $title = trim(htmlentities($_POST['title']));
        $description = trim(htmlentities($_POST['description']));
        $icon_class = trim(htmlentities($_POST['icon_class']));
        $box_class_name = trim(htmlentities($_POST['box_class_name']));
        
        if(empty($title)){
            $_SESSION['title'] = "Title Name Required!";
        }if(empty($description['description'])){
            $_SESSION['description'] = "Description Required!";
        }if(empty($icon_class['icon_class'])){
            $_SESSION['icon_class'] = "Icon Class Name Required!";
        }if(empty($box_class['box_class_name'])){
            $_SESSION['box_class_name'] = "Box Class Name Required!";
        }if(!empty($title)){
            require_once '../database.php';         
            $query = "INSERT INTO modern_services(title, description, icon_class, box_class_name) VALUES ('$title', '$description', '$icon_class', '$box_class_name')";
            $result = mysqli_query($conn, $query);

            if($result){
                $_SESSION['success'] = "Services Insert successfull!";
                
                header("Location: index.php");
            }
           
    }else{
        header("Location: insert.php");
    }     
}