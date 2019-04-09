<?php include "db.php"; ?>
<?php

// Creats new record in db.
function create()
{
    if (isset($_POST['submit'])) {
        global $conn;

        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $email = mysqli_real_escape_string($conn, $email);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        $hashed_password = generate_hash($password);

        $query = "INSERT INTO users(email, username, password) ";
        $query .= "VALUES ('$email', '$username', '$hashed_password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Create successful!";
        } else {
            die("Create failed! Error: " . mysqli_error($conn));
        }
    }
}

/* Copied from the doc.
 * Makes the user password crypted in db.
 */
function generate_hash($password, $cost=11)
{
    $salt = substr(base64_encode(openssl_random_pseudo_bytes(17)), 0, 22);
    $salt = str_replace("+", ".", $salt);
    $param = '$' . implode('$', array(
        "2y",
        str_pad($cost, 2, "0", STR_PAD_LEFT),
        $salt
    ));

    return crypt($password, $param);
}

// Reads all the records from db.
function read()
{
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    // ***** Shows inside the pagesource *****
    if ($result) {
        echo "Read successful!";
    } else {
        die("Read failed" . mysqli_error($conn));
    }

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data, $row);
    }
    return $data;
}

// Shows list of id in option.
function read_id()
{
    $data = read();
    foreach ($data as $d) {
        $id = $d['id'];
        echo "<option name='id' value=$id>$id</option>";
    }
}

// Prepares value for input tag.
function prepare_value_input()
{
    $id_data = array(id_wise_query());
    $email_str = "";
    $username_str = "";
    $password_str = "";

    foreach ($id_data as $value) {
        $email = $value[0]["email"];
        $email_str .= "value=" . $email;
        $username = $value[0]["username"];
        $username_str .= "value=" . $username;
        $password = $value[0]["password"];
        $password_str .= "value=" . $password;
    }

    $login_info = [
        "username" => $username_str,
        "email" => $email_str,
        "password" => $password_str
    ];

    return $login_info;
}

// Reads info of a selected id.
function id_wise_query()
{
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];

        $query = "SELECT * FROM users ";
        $query .= "WHERE id = $id";

        global $conn;
        $id_wise_query = mysqli_query($conn, $query);

        if (!$id_wise_query) {
            die("id_wise_query failed" . mysqli_error($conn));
        }
        $id_data = [];
        while ($row = mysqli_fetch_assoc($id_wise_query)) {
            array_push($id_data, $row);
        }
        return $id_data;
    }
}

// Updates info of a selected id.
function update()
{
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "email = '$email', username = '$username', password = '$password' ";
        $query .= "WHERE id = $id";

        global $conn;
        $update = mysqli_query($conn, $query);

        if ($update) {
            echo "Update successful!";
        } else {
            die("Update was unsuccessful!" . mysqli_error($conn));
        }
    }
}

// Deletes data of a selected id.
function delete()
{
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";

        global $conn;
        $delete = mysqli_query($conn, $query);

        if ($delete) {
            echo "Delete successful!";
        } else {
            die("Delete failed!" . mysqli_error($conn));
        }
    }
}
?>