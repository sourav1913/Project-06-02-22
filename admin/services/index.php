<?php
    require_once "../inc/header.php";
    require_once "../database.php";

    $query = "SELECT * FROM modern_services";
    $result = mysqli_query($conn, $query);
  
    if(mysqli_num_rows($result)> 0){
      $datas = mysqli_fetch_all($result, 1);
    } 
?>
   
   <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>All Service <a href="insert.php" class="btn btn-primary">Add Service</a></h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Id</th>
                                    <th>Icon Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>

                                <?php 
                                    foreach($datas as $data){
                                ?>
                                    <tr>
                                        <td><?= $data['id']?></td>
                                        <td><?= $data['icon_class']?></td>
                                        <td><?= $data['title']?></td>
                                        <td><?= substr($data['description'],0,50, )."...."?></td>
                                        <td>
                                        <a href="user.php?id=<?= $data['id']?>" class="badge bg-primary btn">View</a>
                                        <a href="uedite.php?id=<?=$data['id']?>" class="badge bg-primary btn">Edit</a>
                                        <a href="udelete.php?id=<?= $data['id']?>" class="badge bg-primary btn">Delete</a>
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
    require_once "../inc/footer.php";
?>