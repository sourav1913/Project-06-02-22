<?php
  require_once "admin/database.php";
   
  $query = "SELECT * FROM modern_banners WHERE status = 1";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) > 0){
    $datas = mysqli_fetch_all($result, 1);
  }
?>
 <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <?php
        foreach($datas as $key => $data){
      ?>
      <div class="carousel-item <?= $key == 0 ? "active": "" ;?>">
      <img src="uploads/banners/<?= $data['photo']; ?>" alt="">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?= $data['title'] ;?></h2>
          <p class="animate__animated animate__fadeInUp"><?= $data['description'] ;?></p>
          <a href="btn_url" class="btn-get-started animate__animated animate__fadeInUp"><?= $data['btn_text']; ?></a>
        </div>
      </div>
<?php
  }
?>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
