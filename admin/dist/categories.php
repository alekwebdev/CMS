<?php include 'admin_header.php'?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
<?php include 'admin_navigation.php'?>

<div id="layoutSidenav_content">
                
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">                   
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>


                        <div class="row">
                        <div class="col-md-6">

                        <?php
                            insert_categories();
                        ?>


                            <form action="" method ="post">
                                <div class="form-group">
                                <label for="cat_title">Add category</label>
                                    <input class = "form-control" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class = "btn btn-primary" type="submit" name="submit" value="Add category">
                                </div>
                            </form>

                           <?php // Update and include query

                                if(isset($_GET['edit'])){
                                    $cat_id = $_GET['edit'];
                                    include "update_categories.php";
                                }
                           ?>

                        </div>
                        <div class="col-md-6"> 
                            <br>                      
                            <table class = "table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category title</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php // Find all categoryes query

                                    find_all_categories();

                                // Delete query

                                    delete_categories();
                                ?>
                                </tbody>
                            </table>
                        </div>
                            </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
     
        <!-- /#page-wrapper -->
<?php include 'admin_footer.php'?>
