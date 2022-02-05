<?php
    require_once '../inc/header.php';
    require_once '../database.php';

    $query = "SELECT * FROM modern_banners";
    $result = mysqli_query($conn, $query);
  
    if(mysqli_num_rows($result)> 0){
      $datas = mysqli_fetch_all($result, 1);
    } 
?>
   
   <section id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h2>All Banners <a href="insert.php" class="btn btn-primary">Add Banner</a></h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr class="table-dark btn-primary">
                                    <th>Id</th>
                                    <th>Img</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>

                                <?php 
                                    foreach($datas as $data){
                                ?>
                                    <tr>
                                        <td><?= $data['id']?></td>
                                        <td><img width="100" src="../../uploads/banners/<?= $data['photo'];?>" alt=""></td>
                                        <td><?= $data['title']?></td>
                                        <td><?= substr($data['description'],0,50, )."...."?></td>    
                                        <td>
                                        <a href="user.php?id=<?= $data['id'];?>" class="badge bg-primary btn">View</a>
                                        <a href="uedite.php?id=<?=$data['id'];?>" class="badge bg-primary btn">Edit</a>
                                        <a href="udelete.php?id=<?= $data['id'];?>" class="badge bg-primary btn">Delete</a>
                                        </td>                                    
                                    </tr>
                                <?php
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    require_once '../inc/footer.php';
