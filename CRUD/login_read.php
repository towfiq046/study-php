<?php include "functions.php"; ?>
<?php
    $data = prepare_value_input();
?>

<?php include "include/header.php" ?>

<body>
    <div class="container">
        <h1 class="text-center">Read</h1>
        <form action="login_read.php" method="POST">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" name="email" placeholder="Email" <?php echo($data["email"]); ?>>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" <?php echo($data["username"]); ?>>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Password" <?php echo($data["password"]); ?>>
            </div>
            <select class="form-group" name="id">
                <?php
                    read_id()
                ?>
            </select>
            <button type="submit" name="submit" class="btn btn-primary">Show</button>
        </form>
    </div>
</body>

</html>