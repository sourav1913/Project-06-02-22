 
<?php
require_once "admin/database.php";
  $query = "SELECT * FROM modern_features";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) > 0){
    $datas = mysqli_fetch_all($result, 1);
  }
?>
<!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

      <?php
        
        foreach($datas as $data){
      ?>

        <div class="section-title">
          <h2 class="main_header"><?=$data['main_header']?></h2>
          <p class="main_pra"><?=$data['main_pra']?></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="uploads/features/<?=$data['photo']?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3 class="title_one"><?=$data['title_one']?></h3>
            <p class="fst-italic pra_one"><?=$data['pra_one']?></p>
            <ul>
              <li class="link_a1"><i class="bi bi-check"></i><?=$data['link_a1']?></li>
              <li class="link_a2"><i class="bi bi-check"></i><?=$data['link_a2']?></li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3 class = "title_two"><?=$data['title_two']?></h3>
            <p class="fst-italic pra_two"><?=$data['pra_two']?></p>
            <p class="pra_three"><?=$data['pra_three']?></p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3 class="title_three"><?=$data['title_three']?></h3>
            <p class="pra_four"><?=$data['pra_four']?></p>
            <ul>
              <li class="link_b1"><i class="bi bi-check"></i><?=$data['link_b1']?></li>
              <li class="link_b2"><i class="bi bi-check"></i><?=$data['link_b2']?></li>
              <li class="link_b3"><i class="bi bi-check"></i><?=$data['link_b3']?></li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-4.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3 class="title_four"></i><?=$data['title_four']?></h3>
            <p class="fst-italic pra_five"><?=$data['pra_five']?></p>
            <p class="pra_six"><?=$data['pra_five']?></p>
          </div>
        </div>
        <?php      
            }
        ?>
      </div>
    </section><!-- End Features Section -->