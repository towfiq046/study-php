<?php
    if(isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conn = mysqli_connect('localhost', 'root', '', 'login_app');
        
        if($conn) {
            echo('Connection successful!<br>');
        }
        else {
            die('Connection unsuccessful!<br>');
        }

        $query = "INSERT INTO users(email, username, password)";
        $query .= "VALUES ('$email', '$username', '$password')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query failed" . mysqli_error($conn));
        }
    }
?>