<?php
require_once '../inc/header.php';

require '../database.php';

$query = "SELECT * FROM modern_why_us";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  $data = mysqli_fetch_assoc($result);
}

?>

<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <div class="card">
          <div class="card-header">
            <h2>Edit Why Us</h2>
          </div>
          <div class="card-body">
            <form action="whyus_post.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" placeholder="Title One" value="<?=$data['title_one']?>" name="title_one" class="form-control">
              </div>
              <div class="form-group">
                <textarea name="description_one" placeholder="Description One" class="form-control"><?=$data['description_one']?></textarea>
              </div>
              <div class="form-group">
                <input type="text" name="icon_one" value="<?=$data['icon_one']?>" placeholder="Icon one" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" value="<?=$data['title_two']?>" placeholder="Title Two" name="title_two" class="form-control">
              </div>
              <div class="form-group">
                <textarea name="description_two"  placeholder="Description Two" class="form-control"><?=$data['description_two']?></textarea>
              </div>
              <div class="form-group">
                <input type="text" name="icon_two" value="<?=$data['icon_two']?>" placeholder="Icon Two" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" value="<?=$data['video_url']?>" name="video_url" placeholder="Video Url" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="">Banner Image: </label>
                <input type="file"  name="banner_img" class="form-control">
                <img src="../../uploads/why_us/<?=$data['photo']?>"  width="150">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Update" class="form-control btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once '../inc/footer.php';
?>

<!-- <script>
    function passFileUrl(){
    document.getElementById('asgnmnt_file').click();
    }

    function fileSelected(inputData){
    document.getElementById('asgnmnt_file_img').src = window.URL.createObjectURL(inputData.files[0]);
    }
</script>   -->

