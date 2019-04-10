<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Post</title>
</head>

<body>
    <div class="container mt-5">
        <form class="form-group form-inline" action="post.php" method="POST">
            <input class="form-control" type="text" name="name" placeholder="Enter name">
            <button type="submit" name="submit" class="btn btn-primary">Click</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            echo $_POST['name'];
        }
        ?>
    </div>
</body>

</html>