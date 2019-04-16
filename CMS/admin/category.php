<?php include "includes/admin_header.php"; ?>

<?php
$category_q = "SELECT * FROM categories";
$all_categories = mysqli_query($conn, $category_q) ;
?>

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
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                    </div>
                    <div class="col-xs-6">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Category">
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                    </div>
                    <div class="col-xs-6">
                        <table class="table table-boarded table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>                              
                                <?php
                                while($row = mysqli_fetch_assoc($all_categories)) {
                                    $cat_id = $row["cat_id"];
                                    $cat_title = $row["cat_title"];

                                    echo "<tr>";
                                    echo "<td>$cat_id</td>";
                                    echo "<td>$cat_title</td>";
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