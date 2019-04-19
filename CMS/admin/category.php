<?php include "includes/admin_header.php"; ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_nav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin page.
                            <small>Author</small>
                        </h1>
                    </div>
                    <div class="col-xs-6">
                        <?php
                        // Create a category.
                        if(isset($_POST["submit"])) {
                            $cat_title_input = $_POST["cat_title_input"];

                            if($cat_title_input == "" || empty($cat_title_input)) {
                                echo "Please enter any title.";
                            }
                            else {

                                $cat_title_insert_query = "INSERT INTO categories (cat_title) ";
                                $cat_title_insert_query .= "VALUES ('$cat_title_input')";

                                $create_cat_title = mysqli_query($conn, $cat_title_insert_query);

                                if(!$create_cat_title) {
                                    die("<h2>Create category title failed</h2>" . mysqli_error($conn));
                                }
                            }
                        }

                        // Delete a category.
                        if(isset($_GET["delete"])) {
                            $id_to_delete = $_GET["delete"];
                            $delete_query = "DELETE FROM categories WHERE cat_id = {$id_to_delete} ";
                            $delete_id = mysqli_query($conn, $delete_query);
                            header("Location: category.php");
                        }

                        // Update a category.
                        if(isset($_POST["update_category"])) {
                            $title_to_update = $_POST["cat_title_input_update"];

                            if($_GET["update"]) {
                                $cat_title = $_GET["update"];
                            }

                            $update_query = "UPDATE categories  SET cat_title = '$title_to_update' WHERE cat_title = $cat_title";
                            $update_title = mysqli_query($conn, $update_query);
                            
                            if(!$update_title) {
                                die("Update query failed." . mysqli_error($conn));
                            }
                        }
                        
                        ?>
                        <!-- Category creation form -->
                        <form action="" method="POST">
                            <div class="form-group">
                                <input name="cat_title_input" type="text" class="form-control" placeholder="Category">
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Add Category</button>
                        </form>

                        <!-- Update form -->
                        <form action="" method="POST">
                            <div class="form-group">
                                <input name="cat_title_input_update" type="text" class="form-control" placeholder="Category" value='<?php if(isset($_GET["update"])) {echo $_GET["update"];}?>'>
                            </div>
                            <button name="update_category" type="submit" class="btn btn-primary">Update Category</button>
                        </form>
                    </div>
                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>                              
                                <?php
                                // All categories.
                                $category_query = "SELECT * FROM categories";
                                $all_categories = mysqli_query($conn, $category_query) ;
                               
                                while($row = mysqli_fetch_assoc($all_categories)) {
                                    $cat_id = $row["cat_id"];
                                    $cat_title = $row["cat_title"];

                                    echo "<tr>";
                                    echo "<td>$cat_id</td>";
                                    echo "<td>$cat_title</td>";
                                    echo "<td><a href='category.php?delete={$cat_id}'>Delete</a></td>";
                                    echo "<td><a href='category.php?update={$cat_title}'>Update</a></td>";
                                    echo "</tr>";                                 
                                }                               
                                ?>
                            </tbody>
                        </table>
                    </div> 
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>