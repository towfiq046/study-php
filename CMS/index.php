<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>

<?php
$query = "SELECT * FROM posts";
$all_posts = mysqli_query($conn, $query);
?>

    <!-- Navigation -->
    <?php include "includes/nav.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="data">
            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <?php

                if(isset($_POST["search"])) {
                    $search = $_POST["search"];
            
                    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                    $post_tags = mysqli_query($conn, $query);
            
                    if(!$post_tags) {
                        dei("post_tags failed" . mysqli_error($conn));
                    }
            
                    $count = mysqli_num_rows($post_tags);
            
                    if($count == 0) {                        
                        echo "Could not find anything like your search.";
                    }
                    else {
                        while($data = mysqli_fetch_assoc($post_tags)) {
                            ?>
            
                            <!-- First Blog Post -->
                            <h2>
                                <a href="#"><?php echo $data["post_title"];?></a>
                            </h2>
                            <p class="lead">
                                by <a href="index.php"><?php echo $data["post_author"];?></a>
                            </p>
                            <p><span class="glyphicon glyphicon-time"></span> <?php echo $data["post_date"];?></p>
                            <hr>
                            <img class="img-responsive" src="images/<?php echo $data["post_image"];?>" alt="">
                            <hr>
                            <p><?php echo $data["post_content"]?></p>
                            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
            
                            <hr>
            
                            <?php
                        }                            
                    }
                }
                else {
                    
                while($data = mysqli_fetch_assoc($all_posts)) {
                ?>
                    <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo $data["post_title"];?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $data["post_author"];?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $data["post_date"];?></p>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo $data["post_image"];?>" alt="">
                    <hr>
                    <p><?php echo $data["post_content"]?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>

                    <?php
                    }
                }
                ?>


            </div> 

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.data -->

        <hr>

        <?php include "includes/footer.php"; ?>
        