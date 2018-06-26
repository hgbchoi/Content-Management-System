<?php include_once 'includes/db.php'?>
<?php include 'includes/widgets.php'?>
<?php include 'includes/display.php'?>

<?php
dbManager::initialize('localhost', 'root','', 'cms');
dbManager::dbConnect();
widgets::setHeader();
if (dbManager::checkifSet_POST('submit_search')){
    $tag = $_POST['search'];
    $results = dbManager::fetchByUserSearch($tag);
}
?>

<body>

    <?php widgets::setNavBar(); ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

              <h1 class="page-header">
                  Page Heading
                  <small>Secondary Text</small>

              </h1>

                <?php if (isset($results))
                      display::displayPosts($results)
                ?>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php widgets::setSideBar(); ?>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

<?php widgets::setFooter(); ?>
