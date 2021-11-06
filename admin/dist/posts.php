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
                            Welcome to posts
                            <small>Author</small>
                        </h1>    
                    <?php

                    if(isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = '';
                    }

                    switch ($source) {
                        case 'add_post':
                            include 'add_post.php';
                            break;
                            
                        case 'edit_post':
                            include 'edit_post.php';
                            break;
                        case '200':
                                echo "nice 200";
                                break;
                        default:
                            include 'view_all_posts.php';
                            break;
                    }
                    ?>

                    
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php include 'admin_footer.php'?>
