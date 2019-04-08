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
        while($row = mysqli_fetch_assoc($result)) {
            array_push($data, $row);
        }
        return $data;
    }

    function id_wise_query() {
        if(isset($_POST['submit'])) {
            $id = $_POST['id'];

            $query = "SELECT * FROM users ";
            $query .= "WHERE id = $id";

            global $conn;
            $id_wise_query = mysqli_query($conn, $query);

            if(!$id_wise_query) {
                die("id_wise_query failed" . mysqli_error($conn));
            }
            $id_data = [];
            while($row = mysqli_fetch_assoc($id_wise_query)) {
                array_push($id_data, $row);
            }
            return $id_data;
        }
    }
?>