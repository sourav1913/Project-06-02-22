<?php
    require_once "../inc/header.php";
?>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div class="card">
                        <div class="card-header">
                            <h2>Add Banners <a href="index.php" class="btn btn-primary">All Banner</a></h2>
                        </div>
                        <div class="card-body">
                            <form action="banner_post.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" placeholder="Title">   
                                </div>
                                
                                <div class="form-group">
                                    <textarea name="description" placeholder="Description" class="form-control"></textarea>   
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="btn_text" class="form-control" placeholder="Button Text">   
                                </div>
                                
                                <div class="form-group">
                                    <input type="url" name="btn_url" class="form-control" placeholder="Button URL">   
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Banner Image : </label>
                                    <input type="file" name="banner_img" class="form-control">   
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Submit" class="form-control btn-primary">   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    require_once "../inc/footer.php";
?>