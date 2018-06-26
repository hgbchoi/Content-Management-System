<?php

class display {

public static function displayPosts($posts){

  while ($row = mysqli_fetch_assoc($posts)):

      $post_title = $row['post_title'];
      $post_author = $row['post_author'];
      $post_date = $row['post_date'];
      $post_image = $row['post_image'];
      $post_content = $row['post_content'];

    ?>



    <!-- First Blog Post -->
    <h2>
        <a href="#"><?php echo $post_title ?></a>
    </h2>
    <p class="lead">
        by <a href="index.php"><?php echo $post_author ?></a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
    <hr>
    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
    <hr>
    <p><?php echo $post_content ?></p>
    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>

  <?php endwhile;


  }

public static function displayCatagories($catalogues){

  while ($row = mysqli_fetch_assoc($catalogues)):
  ?>
  <li><a href="#"><?php echo $row['cat_title']?></a></li>

  <?php endwhile;





}

}
?>
