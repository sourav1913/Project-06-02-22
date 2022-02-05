<?php

    session_start();
    require_once "../database.php";
    $id = $_GET['id'];
    $query ="SELECT * FROM modern_services WHERE id = $id";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result)){
        $data = mysqli_fetch_assoc($result);
    }
    
    $error=[];
    
        if(isset($_POST['submit'])){
            $title = trim(htmlentities($_POST['title']));
            $description = trim(htmlentities($_POST['description']));
            $icon_class = trim(htmlentities($_POST['icon_class']));
            $box_class_name = trim(htmlentities($_POST['box_class_name']));
            
            if(empty($title)){
                $_SESSION['title'] = "Enter Your Banner Title!";
            }if(empty($description['description'])){
                $_SESSION['description'] = "Enter Your Description!";
            }if(empty($icon_class['icon_class'])){
                $_SESSION['icon_class'] = "Enter Your Icon Class Name!";
            }if(empty($box_class_name['box_class_name'])){
                $_SESSION['box_class_name'] = "Enter Box Class Name!";
            }if(!empty($title)){
                        
                $query = "UPDATE modern_services SET title='$title', description='$description',icon_class='$icon_class',box_class_name='$box_class_name' WHERE id = $id";    
                $result = mysqli_query($conn,$query);
                if($result){
                    $_SESSION['success'] = "Services Insert successfull!";
                    header("Location: index.php");
                }
               
        }else{
            header("Location: index.php");
        }     
    }
require_once "../inc/header.php";
?>
<section id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
        
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Banners</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <?php
                                        if(isset($error['title'])){
                                            echo "<p style = 'color:red;'>".$error['title'] ."</p>";
                                        }
                                    ?>
                                    <input type="text" class="form-control" name="title" value="<?= $data['title']?>" >
                                </div>
                                
                                
                                <div class="mb-3">
                                    <?php
                                        if(isset($error['description'])){
                                            echo "<p style = 'color:red;'>".$error['description']."</p>";
                                        }
                                    ?>
                                    <input type="text" class="form-control" name="description" value="<?= $data['description']?>">
                                </div>
                                
                                
                                <div class="mb-3">
                                    <?php
                                        if(isset($error['icon_class'])){
                                            echo "<p style = 'color:red;'>".$error['icon_class']."</p>";
                                    }
                                    ?>
                                <input type="text" class="form-control" name="icon_class" value="<?= $data['icon_class']?>">
                                </div>
                                
                                <div class="mb-3">
                                    <?php
                                        if(isset($error['box_class_name'])){
                                            echo "<p style = 'color:red;'>".$error['box_class_name']."</p>";
                                    }
                                    ?>
                                <input type="text" class="form-control" name="box_class_name" value="<?= $data['box_class_name']?>">
                                </div>
                            
                                <input type="submit" class=" btn btn-primary" name="submit" value="Update">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
 require_once "../inc/footer.php";