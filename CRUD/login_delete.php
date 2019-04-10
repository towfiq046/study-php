<?php include "functions.php"; ?>

<?php
    delete();
?>

<?php include "include/header.php" ?>

<body>
    <div class="container">
        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="POST">
            <select class="form-group" name="id">
                <?php
                    read_id();
                ?>
            </select>
            <button type="submit" name="submit" class="btn btn-primary">Delete</button>
        </form>
    </div>
</body>

</html>