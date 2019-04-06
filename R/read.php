<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'login_app');

    if($conn) {
        echo('Connection successful!<br>');
    }
    else {
        die('Connection unsuccessful!<br>');
    }

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed" . mysqli_error($conn));
    }
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
        <?php 
            while($row = mysqli_fetch_assoc($result)) {
                //print_r($row);
                var_dump($row);
                //echo json_encode($row, JSON_PRETTY_PRINT);
            }
        ?>
    </div>
</body>

</html>