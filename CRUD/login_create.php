<?php include "functions.php" ?>
<?php 
    create();
?>

<?php include "include/header.php" ?>

<body>
    <div class="container">
        <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="POST">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

</body>

</html>