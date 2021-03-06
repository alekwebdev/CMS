<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<!-- Navigation -->

<?php include "includes/navigation.php"; ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
            <?php
            
            if(isset($_GET['category'])){
              $post_category_id = $_GET['category'];
            }


                $query = "SELECT * FROM posts WHERE post_category_id = $post_category_id";

                $select_all_posts_query = mysqli_query($connection, $query);

                 while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                        $post_id = $row['post_id'];
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = substr($row['post_content'],0,100);
                            
                         ?>

            <h1 class="my-4">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            <div class="card mb-4">
              <div class="card-body">
                <h2 class="car-title">
                    <a href="post.php?p_id=<?= $post_id; ?>"><?= $post_title; ?></a>
                </h2>
                <p class="cart-text">
                    by <a href="inzdex.php"><?= $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?= $post_date; ?></p>
                <hr>
                <img class="card-img-top" src="images/<?= $post_image; ?>" alt="nesto nema slike, haha">
                <hr>
                <p><?= $post_content ?>.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
              </div>
            </div>



            <?php 
                }     
            ?>
        <div>                
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
        </div>
        </div>
      <!-- Sidebar Widgets Column -->
      

        <?php include "includes/sidebar.php" ?>   

        <!-- Side Widget --> 
        
</div>

    <!-- /.row -->

  <!-- /.container -->

  <?php include "includes/footer.php"; ?>