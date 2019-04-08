<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
    delete();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="delete.php" method="POST">
            <select class="form-group" name="id">
                <?php
                    $data = show_all_data();
                    foreach($data as $d) {
                        $id = $d['id'];
                        echo "<option name='id' value=$id>$id</option>";  
                    }
                ?>
            </select>
            <button type="submit" name="submit" class="btn btn-primary">Delete</button>
        </form>
    </div>
</body>

</html>