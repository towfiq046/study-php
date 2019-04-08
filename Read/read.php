<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
    $id_data = array(id_wise_query());
    $email_s = '';
    $username_s = '';
    foreach($id_data as $value) {
        $email = $value[0]['email'];
        $email_s .= 'value=' . $email;
        $username = $value[0]['username'];
        $username_s .= 'value=' . $username;
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
        <h1 style="text-align: center">READ</h1>
        <form action="read.php" method="POST">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" name="email" placeholder="Email" <?php echo $email_s; ?>>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" <?php echo $username_s; ?>>
            </div>
            <select class="form-group" name="id">
                <?php
                    $data = show_all_data();
                    foreach($data as $d) {
                        $id = $d['id'];
                        echo "<option name='id' value=$id>$id</option>";  
                    }
                ?>
            </select>
            <button type="submit" name="submit" class="btn btn-primary">Show</button>
        </form>
    </div>
</body>

</html>