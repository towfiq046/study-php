<?php include "db.php"; ?>
<?php
    function show_all_data() {
        global $conn;
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
        
        if(!$result) {
            die("Query failed" . mysqli_error($conn));
        }
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option name='id' value='$id'>$id</option>";
        }
    }

    function update() {
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $id = $_POST['id'];
    
            $query = "UPDATE users SET ";
            $query .= "email = '$email', username = '$username', password = '$password' ";
            $query .= "WHERE id = $id";
            
            global $conn;
            $update = mysqli_query($conn, $query);
    
            if(!$update) {
                die("Update was unsuccessful!" . mysqli_error($conn));
            }
        }
    }
?>