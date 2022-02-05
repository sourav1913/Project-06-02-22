<?php
    require_once "../database.php";
    $id = $_GET['id'];
    $query ="SELECT * FROM modern_banners WHERE id = $id";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result)){
        $data = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
        $title = trim(htmlentities($_POST['title']));
        $description = trim(htmlentities($_POST['description']));
        $btn_text = trim(htmlentities($_POST['btn_text']));
        $btn_url = trim(htmlentities($_POST['btn_url']));
        $photo = $_FILES['photo'];
       
    
        if(empty($title)){
            $error['title'] = "Enter Your Title!";
        }if(empty($description)){
            $error['description'] = "Description is Requied!";
        }if(empty($btn_text)){
            $error['btn_text'] = "Enter Your Button Name!";
        }if(empty($btn_url)){
            $error['btn_url'] = "Enter Your Button Link!";
        }if(empty($photo['title'])){
            $error['photo'] = "Upload Your Photo!";
        }
       
       
        if(!empty($title) && !empty($photo['name'])){
            require_once "../database.php";
                if($photo['name']){
                    $ext = explode('.',$photo['name']);
                    $photoName = $title.'-'.time().'.'.end($ext);
                    $uploads = move_uploaded_file($photo["tmp_name"], '../../uploads/banners/'. $photoName);
                    $xFile = "../../uploads/banners/" .$data['photo'];
                    if($xFile){
                        unlink($xFile); 
                    }
                    $query = "UPDATE modern_banners SET title='$title', description='$description',btn_text='$btn_text',btn_url='$btn_url', photo ='$photoName' WHERE id = $id";    
                    $result = mysqli_query($conn,$query);
                }else{ 
                    $query = "UPDATE modern_banners SET title='$title', description='$description',btn_text='$btn_text',btn_url='$btn_url' WHERE id = $id";    
                    $result = mysqli_query($conn,$query);
                }
                }if($result){
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
                                        if(isset($error['btn_text'])){
                                            echo "<p style = 'color:red;'>".$error['btn_text']."</p>";
                                    }
                                    ?>
                                <input type="text" class="form-control" name="btn_text" value="<?= $data['btn_text']?>">
                                </div>
                                
                                <div class="mb-3">
                                    <?php
                                        if(isset($error['btn_url'])){
                                            echo "<p style = 'color:red;'>".$error['btn_url']."</p>";
                                    }
                                    ?>
                                <input type="text" class="form-control" name="btn_url" value="<?= $data['btn_url']?>">
                                </div>
                                
                                <div class="mb-3">
                                    <?php
                                    if(isset($error['title'])){
                                        echo "<p style = 'color:red;'>".$error['photo']."</p>";
                                    }
                                    ?>
                                    <input type="file" class="form-control" name="photo">
                                </div>
                                <div class="mb-3">
                                <td><img width="40" src="../../uploads/banners/<?= $data['photo']?>" alt=""></td>
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