<?php include "db.php"; ?>
<?php
    function show_all_data() {
        global $conn;
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
        
        if(!$result) {
            die("Query failed" . mysqli_error($conn));
        }
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($data, $row);
        }
        return $data;
    }

    function delete() {
        if(isset($_POST['submit'])) {
            $id = $_POST['id'];
    
            $query = "DELETE FROM users ";
            $query .= "WHERE id = $id";
            
            global $conn;
            $delete = mysqli_query($conn, $query);
    
            if(!$delete) {
                die("Update was unsuccessful!" . mysqli_error($conn));
            }
        }
    }
?>