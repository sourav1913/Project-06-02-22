<?php
  session_start();
  $error=[];

    if(isset($_POST['submit'])){
      $main_header = trim(htmlentities($_POST['main_header']));
      $main_pra = trim(htmlentities($_POST['main_pra']));
      $title_one = trim(htmlentities($_POST['title_one']));
      $pra_one = trim(htmlentities($_POST['pra_one']));
      $link_a1 = trim(htmlentities($_POST['link_a1']));
      $link_a2 = trim(htmlentities($_POST['link_a2']));
     
      $title_two= trim(htmlentities($_POST['title_two']));
      $pra_two = trim(htmlentities($_POST['pra_two']));
      $pra_three = trim(htmlentities($_POST['pra_three']));
      
      $title_three = trim(htmlentities($_POST['title_three']));
      $pra_four = trim(htmlentities($_POST['pra_four']));
      $link_b1 = trim(htmlentities($_POST['link_b1']));
      $link_b2 = trim(htmlentities($_POST['link_b2']));
      $link_b3 = trim(htmlentities($_POST['link_b3']));
      
      $title_four = trim(htmlentities($_POST['title_four']));
      $pra_five = trim(htmlentities($_POST['pra_five']));
      $pra_six = trim(htmlentities($_POST['pra_six']));

      if(empty($main_header)){
        $_SESSION['main_header'] = "Enter Main Header!";
      }if(empty($main_pra)){
        $_SESSION['main_pra'] = "Enter Main Pragraph!";
      }if(empty($title_one)){
        $_SESSION['title_one'] = "Enter Title One!";
      }if(empty($pra_one)){
        $_SESSION['pra_one'] = "Enter Pragraph One!";
      }if(empty($link_a1)){
        $_SESSION['link_a1'] = "Enter Link Text a1!";
      }if(empty($link_a2)){
        $_SESSION['link_a2'] = "Enter Link Text a2!";
      }
      if(empty($title_two)){
        $_SESSION['title_two'] = "Enter Titel Two!";
      }if(empty($pra_two)){
        $_SESSION['pra_two'] = "Enter Pragraph Two!";
      }if(empty($pra_three)){
        $_SESSION['pra_three'] = "Enter Pragraph Three!";
      }
      if(empty($title_three)){
        $_SESSION['title_three'] = "Enter Title Three!";
      }if(empty($pra_four)){
        $_SESSION['pra_four'] = "Enter Pragraph Four!";
      }if(empty($link_b1)){
        $_SESSION['link_b1'] = "Enter link Text b1!";
      }if(empty($link_b2)){
        $_SESSION['link_b2'] = "Enter link Text b2!";
      }if(empty($link_b3)){
        $_SESSION['link_b3'] = "Enter link Text b3!";
      }
      if(empty($title_four)){
        $_SESSION['title_four'] = "Enter Title Four!";
      }if(empty($pra_five)){
        $_SESSION['pra_five'] = "Enter Pragraph Five!";
      }if(empty($pra_six)){
        $_SESSION['pra_six'] = "Enter Pragraph Six!";
      }
      if(!empty($main_header)){
        require_once '../database.php';         
        $query = "INSERT INTO modern_features(main_header, main_pra, title_one, pra_one, link_a1, link_a2, title_two, pra_two, pra_three, title_three, pra_four, link_b1, link_b2, link_b3, title_four, pra_five, pra_six) VALUES ('$main_header', '$main_pra', '$title_one', '$pra_one', '$link_a1', '$link_a2', '$title_two', '$pra_two', '$pra_three', '$title_three', '$pra_four', '$link_b1', '$link_b2', '$link_b3', '$title_four', '$pra_five', '$pra_six')";
        $result = mysqli_query($conn, $query);

        if($result){
            $_SESSION['success'] = "Services Insert successfull!";
            
            header("Location: index.php");
        }
       
}else{
    header("Location: insert.php");
}     

    }

session_unset();
