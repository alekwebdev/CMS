<div class="col-md-4">

  <!-- Search Widget -->
  <div class="card my-4">
    <h5 class="card-header">Search</h5>
    <form action="search.php" method="post">
    <div class="card-body">
      <div class="input-group">
        <input name="search" type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-append">
          <button name="submit" class="btn btn-secondary" type="submit">Go!</button>
        </span>
      </div>
    </div>
    </form> 
  </div>

  <!-- Categories Widget -->
  <div class="card my-4">
      <?php

    $query = "SELECT * FROM categories";
    $select_categories_sidebar = mysqli_query($connection, $query);

    ?>
    <h5 class="card-header">Categories</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <ul class="list-unstyled mb-0">
          <?php
              while($row = mysqli_fetch_assoc($select_categories_sidebar )){
              $cat_title = $row['cat_title'];
              
              echo "<li><a href='#'>{$cat_title}</a></li>";
              }
          ?>
          </ul>
        </div>
       
      </div>
    </div>
  </div>
  <?php include "includes/widget.php"?>
</div>