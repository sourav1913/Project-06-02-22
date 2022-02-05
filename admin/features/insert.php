<?php
    require_once "../inc/header.php";
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Add Features <a href="index.php" class="btn btn-primary">All Features</a></h2>
                    </div>
                    <div class="body-header">
                        <form action="features_post.php" method="post" enctype="multipart/form-data" style="padding: 10px;">
                            <div class="form-group">
                            <label><h5><b>Main</b></h5></label>
                                <input type="text" name="main_header" placeholder="Enter Header" class="form-control">
                                <input type="text" name="main_pra" placeholder="Enter Pragraph" class="form-control">
                            </div>

                            <div class="form-group">
                                <label><h5><b>Features_One:</b></h5></label>
                                    <input type="text" name="title_one" placeholder="Title" class="form-control">       
                                    <input type="text" name="pra_one" placeholder="Pragraph_one Insert" class="form-control">
                                    <input type="text" name="link_a1" placeholder="Link : Pragraph_one" class="form-control">   
                                    <input type="text" name="link_a2" placeholder="Link : Pragraph_two" class="form-control">   
                            </div>

                            <div class="form-group">
                               <label><h5><b>Features_Two:</b></h5></label>
                                    <input type="text" name="title_two" placeholder="Title" class="form-control">       
                                    <input type="text" name="pra_two" placeholder="Pragraph_one Insert" class="form-control">
                                    <input type="text" name="pra_three" placeholder="Pragraph_two Insert" class="form-control">   
                            </div>

                            <div class="form-group">
                                <label><h5><b>Features_Three:</b></h5></label>
                                    <input type="text" name="title_three" placeholder="Title" class="form-control">       
                                    <input type="text" name="pra_four" placeholder="Pragraph Insert" class="form-control">
                                    <input type="text" name="link_b1" placeholder="Link : Pragraph_one" class="form-control">
                                    <input type="text" name="link_b2" placeholder="Link : Pragraph_two" class="form-control">   
                                    <input type="text" name="link_b3" placeholder="Link : Pragraph_three" class="form-control">      
                            </div>

                            <div class="form-group">
                                <label><h5><b>Features_Four:</b></h5></label>
                                    <input type="text" name="title_four" placeholder="Title" class="form-control">       
                                    <input type="text" name="pra_five" placeholder="Pragraph_one Insert" class="form-control">
                                    <input type="text" name="pra_six" placeholder="Pragraph_two Insert" class="form-control">   
                            </div>

                            <div class="form-group">
                                <label></label>
                                <input type="submit" name="submit" value="Submit" class="form-control btn-primary">   
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</section>
<br><br>
<?php
    require_once "../inc/header.php";