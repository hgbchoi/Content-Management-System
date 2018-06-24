<?php include_once 'includes/db.php' ?>
<?php include 'includes/header.php' ?>

<?php
$dbManager = new dbManager('localhost', 'root','', 'cms');
$dbManager -> dbConnect();
$posts = $dbManager -> fetchPosts();
if (isset($_POST['submit'])){
    $tag = $_POST['search'];
    $results = $dbManager -> fetchByUserSearch($tag);  
  }
?>

<body>

    <?php include 'includes/navigation.php' ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

              <h1 class="page-header">
                  Page Heading
                  <small>Secondary Text</small>
              </h1>

                <?php while ($row = mysqli_fetch_assoc($posts)):

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

                <?php endwhile; ?>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include 'includes/sidebar.php' ?>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

<?php include 'includes/footer.php' ?>
