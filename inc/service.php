<?php 
require_once "admin/database.php";
$query = "SELECT * FROM modern_services WHERE status = 1 ORDER BY id DESC LIMIT 8";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $datas = mysqli_fetch_all($result, 1);
}
?>

<!-- ======= Services Section ======= -->
<section class="services">
      <div class="container">

        <div class="row">
        <?php
        
            foreach($datas as $data){
        ?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box <?=$data['box_class_name']?>">
              <div class="icon"><i class="bx <?=$data['icon_class']?>"></i></div>
              <h4 class="title"><a href=""><?=$data['title']?></a></h4>
              <p class="description"><?=$data['description']?></p>
            </div>
          </div>

        <?php      
            }
        ?>
          
        </div>

      </div>
    </section><!-- End Services Section -->