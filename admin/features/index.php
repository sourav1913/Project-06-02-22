<?php
    require_once "../inc/header.php";
    require_once "../database.php";

    $query = "SELECT * FROM modern_features";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)>0){
        $datas = mysqli_fetch_all($result, 1);
    }
?>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                    <h2>All Features <a href="insert.php" class="btn btn-primary">Add Features</a></h2>
                    </div>
                    <div class="card-body">

                    <?php
                        foreach($datas as $data){
                    ?>

                        <table class="table table-bordered">
                            <tr class="table-dark">
                                <label><h5><b>Main</b></h5></label>
                                <td>Id</td>
                                <td>Top_Header</td>
                                <td>Top_Pragraph</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <td><?= $data['id']?></td>
                                <td><?= $data['main_header']?></td>
                                <td><?= $data['main_pra']?></td>
                                <td>
                                <a href="edit.php?id=<?= $data['id'];?>" class="badge bg-primary btn">Edit</a>
                                <a href="delete.php?id=<?= $data['id'];?>" class="badge bg-primary btn">Delete</a>
                                </td>
                            </tr>
                        </table>
                            
                        <table class="table table-bordered">
                            <tr class="table-dark">
                                <label><h5><b>Features_One:</b></h5></label>
                                <td>Id</td>
                                <td>Image</td>
                                <td>Title</td>
                                <td>Pragraph</td>
                                <td>Link_a1</td>
                                <td>Link_a2</td>
                                <td>Action</td>
                            </tr>

                            <tr>
                                <td><?= $data['id']?></td>                                        
                                <td><img width="100" src="../../uploads/banners/<?= $data['photo'];?>" alt=""></td>
                                <td><?= $data['title_one']?></td>
                                <td><?= $data['pra_one']?></td>
                                <td><?= $data['link_a1']?></td>
                                <td><?= $data['link_a2']?></td>
                                <td>
                                <a href="edit.php?id=<?= $data['id'];?>" class="badge bg-primary btn">Edit</a>
                                <a href="delete.php?id=<?= $data['id'];?>" class="badge bg-primary btn">Delete</a>
                                </td>
                            </tr>
                        </table>


                        <table class="table table-bordered">
                            <tr class="table-dark">
                                <label><h5><b>Features_Two:</b></h5></label>
                                <td>Id</td>
                                <td>Image</td>
                                <td>Title</td>
                                <td>Pragraph_1</td>
                                <td>Pragraph_2</td>
                                <td>Action</td>
                            </tr>

                            <tr>
                                <td><?= $data['id']?></td>   
                                <td><img width="100" src="../../uploads/banners/<?= $data['photo'];?>" alt=""></td>
                                <td><?= $data['title_two']?></td>
                                <td><?= $data['pra_two']?></td>
                                <td><?= $data['pra_three']?></td>
                                <td>
                                <a href="edit.php?id=<?= $data['id'];?>" class="badge bg-primary btn">Edit</a>
                                <a href="delete.php?id=<?= $data['id'];?>" class="badge bg-primary btn">Delete</a>
                                </td>
                            </tr>
                        </table>


                        <table class="table table-bordered">
                            <tr class="table-dark">
                                <label><h5><b>Features_Three:</b></h5></label>
                                <td>Id</td>
                                <td>Image</td>
                                <td>Title</td>
                                <td>Pragraph_1</td>
                                <td>Link_a1</td>
                                <td>Link_a2</td>
                                <td>Link_a3</td>
                                <td>Action</td>
                            </tr>

                            <tr>
                                <td><?= $data['id']?></td>
                                <td><img width="100" src="../../uploads/banners/<?= $data['photo'];?>" alt=""></td>
                                <td><?= $data['title_three']?></td>
                                <td><?= $data['pra_four']?></td>
                                <td><?= $data['link_b1']?></td>
                                <td><?= $data['link_b2']?></td>
                                <td><?= $data['link_b3']?></td>
                                <td>
                                <a href="edit.php?id=<?= $data['id'];?>" class="badge bg-primary btn">Edit</a>
                                <a href="delete.php?id=<?= $data['id'];?>" class="badge bg-primary btn">Delete</a>
                                </td>
                            </tr>
                        </table>


                        <table class="table table-bordered">
                            <tr class="table-dark">
                                <label><h5><b>Features_Four:</b></h5></label>
                                <td>Id</td>
                                <td>Image</td>
                                <td>Title</td>
                                <td>Pragraph_1</td>
                                <td>Pragraph_2</td>
                                <td>Action</td>
                            </tr>

                            <tr>
                                <td><?= $data['id']?></td>
                                <td><img width="100" src="../../uploads/banners/<?= $data['photo'];?>" alt=""></td>
                                <td><?= $data['title_four']?></td>
                                <td><?= $data['pra_five']?></td>
                                <td><?= $data['pra_six']?></td>
                                <td>
                                <a href="edit.php?id=<?= $data['id'];?>" class="badge bg-primary btn">Edit</a>
                                <a href="delete.php?id=<?= $data['id'];?>" class="badge bg-primary btn">Delete</a>
                                </td>
                            </tr>
                        </table>
                    <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    require_once "../inc/footer.php";