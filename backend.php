<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skl_todo_list";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error){
    die("Koneksi Gagal" . $con->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM tasks";
    $result = $con->query($sql);

    $todos = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $todos[] = $row;
        }
    }
    echo json_encode($todos);
}

?>